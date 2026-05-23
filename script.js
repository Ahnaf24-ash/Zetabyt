// Intersection Observer for Scroll Animations
document.addEventListener('DOMContentLoaded', () => {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.15
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target); // Stop observing once visible
            }
        });
    }, observerOptions);

    const animatedElements = document.querySelectorAll('.animate-on-scroll');
    animatedElements.forEach(el => {
        observer.observe(el);
    });

    // Navbar scroll effect
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // Mobile Menu Toggle
    const hamburger = document.getElementById('hamburger');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');
    if (hamburger && mobileMenu) {
        let isMenuOpen = false;
        hamburger.addEventListener('click', () => {
            isMenuOpen = !isMenuOpen;
            if (isMenuOpen) {
                mobileMenu.classList.add('active');
                navbar.classList.add('scrolled', 'menu-open-forced'); // Force scrolled style for contrast
                hamburger.children[0].style.transform = 'rotate(45deg) translate(5px, 5px)';
                hamburger.children[1].style.opacity = '0';
                hamburger.children[2].style.transform = 'rotate(-45deg) translate(5px, -5px)';
            } else {
                closeMenu();
            }
        });

        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                closeMenu();
            });
        });

        function closeMenu() {
            isMenuOpen = false;
            mobileMenu.classList.remove('active');
            if (window.scrollY <= 50) {
                navbar.classList.remove('scrolled');
            }
            navbar.classList.remove('menu-open-forced');
            hamburger.children[0].style.transform = 'none';
            hamburger.children[1].style.opacity = '1';
            hamburger.children[2].style.transform = 'none';
        }
    }


    // Tech Specs Toggle
    const techBtns = document.querySelectorAll('.tech-btn');
    techBtns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            const info = e.target.nextElementSibling;
            if (info.style.display === 'none' || info.style.display === '') {
                info.style.display = 'block';
                e.target.textContent = 'Hide Tech Specs';
                e.target.style.background = '#39ff14';
                e.target.style.color = '#000';
            } else {
                info.style.display = 'none';
                e.target.textContent = 'View Tech Specs';
                e.target.style.background = 'transparent';
                e.target.style.color = '#39ff14';
            }
        });
    });

    // Contact Form Submission Handling
    const contactForm = document.querySelector('.contact-form');
    if (contactForm) {
        contactForm.addEventListener('submit', async (e) => {
            e.preventDefault();
            
            const submitBtn = contactForm.querySelector('.submit-btn');
            const originalText = submitBtn.textContent;
            submitBtn.textContent = 'Sending...';
            submitBtn.disabled = true;

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;

            try {
                const response = await fetch('/api/contact', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ name, email, phone, message })
                });

                const data = await response.json();

                if (response.ok) {
                    alert('Thanks! Your request has been submitted successfully.');
                    contactForm.reset();
                } else {
                    alert(`Error: ${data.error || 'Failed to submit the request.'}`);
                }
            } catch (err) {
                console.error('Submission error:', err);
                alert('An error occurred while sending your request. Please try again.');
            } finally {
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            }
        });
    }
});
