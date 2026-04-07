<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gujrat Muslim Association UK | Empowering Communities Since 1968</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;0,700;1,400&family=Inter:wght@300;400;500;600;700&family=Amiri:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://unpkg.com/lucide@latest"></script>
    <style>
        :root {
            --primary-gold: #D4AF37;
            --deep-green: #1B4D3E;
            --dark-green: #0F2E26;
            --cream: #FDF8F3;
            --light-gold: #F4E8C1;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--cream);
            overflow-x: hidden;
        }
        
        .font-serif {
            font-family: 'Cormorant Garamond', serif;
        }
        
        .font-arabic {
            font-family: 'Amiri', serif;
        }
        
        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }
        ::-webkit-scrollbar-track {
            background: var(--cream);
        }
        ::-webkit-scrollbar-thumb {
            background: var(--deep-green);
            border-radius: 5px;
        }
        
        /* Gold Gradient Text */
        .text-gold-gradient {
            background: linear-gradient(135deg, #D4AF37 0%, #F4E8C1 50%, #D4AF37 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        /* Glass Morphism */
        .glass {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .glass-dark {
            background: rgba(27, 77, 62, 0.9);
            backdrop-filter: blur(10px);
        }
        
        /* Animations */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
        }
        
        .scale-in {
            opacity: 0;
            transform: scale(0.9);
        }
        
        /* Hero Pattern */
        .hero-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.03'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }
        
        /* Islamic Geometric Pattern */
        .islamic-pattern {
            background-image: url("data:image/svg+xml,%3Csvg width='80' height='80' viewBox='0 0 80 80' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M40 0L80 40L40 80L0 40L40 0z' fill='none' stroke='%23D4AF37' stroke-opacity='0.1' stroke-width='1'/%3E%3C/svg%3E");
        }
        
        /* Button Hover Effects */
        .btn-premium {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }
        .btn-premium::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        .btn-premium:hover::before {
            left: 100%;
        }
        
        /* Counter Animation */
        .counter-value {
            font-variant-numeric: tabular-nums;
        }
        
        /* Card Hover */
        .impact-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .impact-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(27, 77, 62, 0.15);
        }
        
        /* Navigation Active State */
        .nav-link {
            position: relative;
        }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-gold);
            transition: width 0.3s ease;
        }
        .nav-link:hover::after,
        .nav-link.active::after {
            width: 100%;
        }
        
        /* Loading Screen */
        #loader {
            position: fixed;
            inset: 0;
            background: var(--deep-green);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: opacity 0.5s ease;
        }
        
        /* Parallax Images */
        .parallax-img {
            will-change: transform;
        }
        
        /* Mobile Menu */
        .mobile-menu {
            transform: translateX(100%);
            transition: transform 0.3s ease;
        }
        .mobile-menu.open {
            transform: translateX(0);
        }
    </style>
</head>
<body class="antialiased text-gray-800">

    <!-- Loading Screen -->
    <div id="loader">
        <div class="text-center">
            <div class="w-16 h-16 border-4 border-[#D4AF37] border-t-transparent rounded-full animate-spin mx-auto mb-4"></div>
            <p class="text-white font-serif text-xl">Gujrat Muslim Association UK</p>
            <p class="text-[#D4AF37] text-sm mt-2">Since 1968</p>
        </div>
    </div>

   @include('layouts.partials.header')

    
    <main class="">
      @yield('content')
    </main>  

   @include('layouts.partials.footer')

    <!-- Back to Top Button -->
    <button id="back-to-top" class="fixed bottom-8 right-8 bg-[#D4AF37] text-[#1B4D3E] w-12 h-12 rounded-full shadow-lg flex items-center justify-center opacity-0 pointer-events-none transition-all hover:scale-110 z-40">
        <i data-lucide="arrow-up" class="w-5 h-5"></i>
    </button>

    <script>
        const isDashboard = {{ request()->is('dashboard*') ? 'true' : 'false' }};
    </script>

    <script>
        // Initialize Lucide Icons
        lucide.createIcons();

        // Remove Loader
        window.addEventListener('load', () => {
            setTimeout(() => {
                document.getElementById('loader').style.opacity = '0';
                setTimeout(() => {
                    document.getElementById('loader').style.display = 'none';
                }, 500);
            }, 1000);
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const closeMenuBtn = document.getElementById('close-menu');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.add('open');
        });

        closeMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.remove('open');
        });

        // Close mobile menu when clicking on links
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.remove('open');
            });
        });

        // Navbar Scroll Effect
        const navbar = document.getElementById('navbar');
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (isDashboard) {
                navbar.classList.add('bg-[#1B4D3E]', 'shadow-lg');
                navbar.classList.remove('bg-transparent', 'glass-dark');
                return; // ❗ scroll logic skip
            }
            
            if (currentScroll > 100) {
                navbar.classList.add('glass-dark', 'shadow-lg');
                navbar.classList.remove('bg-transparent');
            } else {
                navbar.classList.remove('glass-dark', 'shadow-lg');
                navbar.classList.add('bg-transparent');
            }

            // Back to top button
            const backToTop = document.getElementById('back-to-top');
            if (currentScroll > 500) {
                backToTop.classList.remove('opacity-0', 'pointer-events-none');
            } else {
                backToTop.classList.add('opacity-0', 'pointer-events-none');
            }

            lastScroll = currentScroll;
        });

        // Back to top functionality
        document.getElementById('back-to-top').addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // GSAP Animations
        gsap.registerPlugin(ScrollTrigger);

        // Fade up animations
        gsap.utils.toArray('.fade-up').forEach(element => {
            gsap.fromTo(element, 
                { opacity: 0, y: 30 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    ease: "power2.out",
                    scrollTrigger: {
                        trigger: element,
                        start: "top 85%",
                        toggleActions: "play none none reverse"
                    }
                }
            );
        });

        // Counter Animation
        const counters = document.querySelectorAll('.counter-value');
        counters.forEach(counter => {
            const target = parseInt(counter.getAttribute('data-target'));
            if (target) {
                gsap.to(counter, {
                    innerHTML: target,
                    duration: 2,
                    snap: { innerHTML: 1 },
                    scrollTrigger: {
                        trigger: counter,
                        start: "top 80%"
                    }
                });
            }
        });

        // Parallax Effect for Hero
        gsap.to("#hero-bg", {
            yPercent: 50,
            ease: "none",
            scrollTrigger: {
                trigger: "#home",
                start: "top top",
                end: "bottom top",
                scrub: true
            }
        });

        // Active Navigation Link
        const sections = document.querySelectorAll('section[id]');
        window.addEventListener('scroll', () => {
            let current = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (pageYOffset >= sectionTop - 200) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${current}`) {
                    link.classList.add('active');
                }
            });
        });

        // Smooth Scroll for Safari
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>
</html>