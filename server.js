const express = require('express');
const cors = require('cors');
const bodyParser = require('body-parser');
const path = require('path');
const fs = require('fs');

const app = express();
const PORT = process.env.PORT || 3000;

app.use(cors());
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true }));

// Serve static files from the current directory
app.use(express.static(__dirname));

// Handle the root URL to serve index.html explicitly if needed, but express.static usually handles it.
// keeping the route just in case
app.get('/', (req, res) => {
    const filePath = path.join(__dirname, 'index.html');
    if (fs.existsSync(filePath)) {
        res.sendFile(filePath);
    } else {
        res.status(404).send('Not Found');
    }
});

app.post('/api/contact', (req, res) => {
    const { name, email, phone, message } = req.body;
    
    if (!name || !email || !phone || !message) {
        return res.status(400).json({ error: 'All fields are required.' });
    }
    
    const newEntry = {
        name,
        email,
        phone,
        message,
        timestamp: new Date().toISOString()
    };
    
    // Simple file-based database for contacts
    const dbPath = path.join(__dirname, 'contacts.json');
    let contacts = [];
    
    if (fs.existsSync(dbPath)) {
        try {
            const data = fs.readFileSync(dbPath, 'utf8');
            contacts = JSON.parse(data);
        } catch (err) {
            console.error('Error reading database:', err);
        }
    }
    
    contacts.push(newEntry);
    
    try {
        fs.writeFileSync(dbPath, JSON.stringify(contacts, null, 2));
        res.status(200).json({ message: 'Request submitted successfully.' });
    } catch (err) {
        console.error('Error saving to database:', err);
        res.status(500).json({ error: 'Failed to save request.' });
    }
});

app.get('/api/contacts', (req, res) => {
    const dbPath = path.join(__dirname, 'contacts.json');
    if (fs.existsSync(dbPath)) {
        try {
            const data = fs.readFileSync(dbPath, 'utf8');
            res.status(200).json(JSON.parse(data));
        } catch (err) {
            console.error('Error reading database:', err);
            res.status(500).json({ error: 'Failed to load contacts.' });
        }
    } else {
        // Return empty array if file does not exist yet
        res.status(200).json([]);
    }
});

// Handle fallback routing - returning index.html for SPA-like behavior
app.use((req, res, next) => {
    const filePath = path.join(__dirname, 'index.html');
    if (fs.existsSync(filePath)) {
        res.sendFile(filePath);
    } else {
        res.status(404).send('Not Found: index.html missing');
    }
});

app.listen(PORT, () => {
    console.log(`ZETABYT backend server is running on http://localhost:${PORT}`);
    console.log(`Serving static files from ${__dirname}`);
    
    // Auto-open browser
    require('child_process').exec(`start http://localhost:${PORT}`);
});

