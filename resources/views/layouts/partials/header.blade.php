@php
    $isGallary = request()->is('gallery-page*') || request()->is('gallery-detail*');
@endphp

<!-- Navigation -->
<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 {{ $isGallary ? 'bg-transparent' : 'bg-transparent' }}">

    <!-- Gold accent line at bottom (visible when scrolled) -->
    <div class="double-divider w-full fixed top-16 sm:top-20 left-0 z-40">
        <div class="bar-maroon"></div>
        <div class="bar-green"></div>
    </div>

    <div class="max-w-7xl mx-auto px-3 xs:px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 sm:h-20">

            <!-- =====================
                 LOGO — transparent PNG, no white ring
            ===================== -->
            <a href="/" class="flex items-center gap-1 sm:gap-2 md:gap-3 flex-shrink-0 group">
                <img src="{{asset('gmuklogo.png')}}" 
                     alt="GMUK Logo" 
                     class="h-12 sm:h-14 md:h-16 w-auto object-contain rounded-full border-2 border-[#FFF5F8] bg-[#FFF5F8]">
                <img src="{{asset('logo2.png')}}" 
                     alt="Logo 2" 
                     class="h-12 sm:h-14 md:h-16 w-auto object-contain  ">
            </a>

            <!-- =====================
                 DESKTOP MENU (hidden on md and below)
            ===================== -->
            <div class="hidden lg:flex items-center space-x-2 xl:space-x-8">
                <a href="/" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs sm:text-sm font-medium">Home</a>
                <a href="/#impact" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs sm:text-sm font-medium">Impact</a>
                <a href="/#about" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs sm:text-sm font-medium">About</a>
                <a href="/#collaboration" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs sm:text-sm font-medium">Collaboration</a>
                <a href="/#projects" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs sm:text-sm font-medium">Projects</a>
                <a href="{{ route('gallery.index') }}" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs sm:text-sm font-medium">Gallery</a>
                <a href="/#contact" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs sm:text-sm font-medium">Contact</a>

                <!-- Donate Button — gold gradient -->
                <a href="/#donate"
                   class="btn-premium text-[#008543] px-4 xl:px-6 py-2 xl:py-2.5 rounded-full font-semibold text-xs xl:text-sm hover:opacity-90 transition-all duration-300 shadow-lg whitespace-nowrap"
                   style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                    Donate
                </a>
            </div>

            <!-- =====================
                 TABLET MENU (visible on md-lg)
            ===================== -->
            <div class="hidden md:flex lg:hidden items-center space-x-2 sm:space-x-3">
                <a href="/" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs font-medium px-1">Home</a>
                <a href="/#impact" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs font-medium px-1">Impact</a>
                <a href="/#about" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs font-medium px-1">About</a>
                <a href="/#projects" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs font-medium px-1">Projects</a>
                <a href="{{ route('gallery.index') }}" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs font-medium px-1">Gallery</a>
                <a href="/#contact" class="nav-link text-[#C9A84C] hover:text-[#F4E8C1] transition-colors text-xs font-medium px-1">Contact</a>

                <a href="/#donate"
                   class="btn-premium text-[#008543] px-3 py-1.5 rounded-full font-semibold text-xs hover:opacity-90 transition-all duration-300 shadow-lg whitespace-nowrap"
                   style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                    Donate
                </a>
            </div>

            <!-- Mobile Menu Button (hamburger icon) -->
            <button id="mobile-menu-btn" 
                    class="md:hidden text-[#C9A84C] p-2 -mr-2 touch-manipulation"
                    aria-label="Toggle menu"
                    aria-expanded="false"
                    aria-controls="mobile-menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </div>

    <!-- =====================
         MOBILE MENU (fixed drawer)
    ===================== -->
    <div id="mobile-menu" 
         class="mobile-menu fixed top-0 right-0 w-full max-w-sm h-screen bg-[#FFF5F8] shadow-2xl md:hidden z-40 p-4 sm:p-6 transform transition-transform duration-300 ease-in-out translate-x-full overflow-y-auto"
         role="navigation"
         aria-label="Mobile navigation">
        
        <!-- Close button -->
        <button id="close-menu" 
                class="absolute top-4 right-4 text-[#C9A84C] p-2 -mr-2 touch-manipulation hover:bg-[#007038] rounded-full transition-colors"
                aria-label="Close menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Mobile logo -->
        <div class="flex items-center gap-3 mb-8 sm:mb-10 mt-4 sm:mt-2">
            <img src="{{ asset('gmuklogo.png') }}" 
                 alt="GMUK" 
                 class="h-12 sm:h-14 w-auto object-contain drop-shadow">
            <img src="{{ asset('logo2.png') }}" 
                 alt="GMUK Name" 
                 class="h-10 sm:h-12 w-auto object-contain drop-shadow">
        </div>

        <!-- Mobile menu links -->
        <div class="space-y-1 sm:space-y-2 mb-8">
            <a href="/" 
               class="mobile-nav-link block text-[#C9A84C] text-base sm:text-lg font-medium hover:text-[#F4E8C1] hover:bg-[#007038] transition-colors px-3 py-2 rounded-lg">
                Home
            </a>
            <a href="/#impact" 
               class="mobile-nav-link block text-[#C9A84C] text-base sm:text-lg font-medium hover:text-[#F4E8C1] hover:bg-[#007038] transition-colors px-3 py-2 rounded-lg">
                Impact
            </a>
            <a href="/#about" 
               class="mobile-nav-link block text-[#C9A84C] text-base sm:text-lg font-medium hover:text-[#F4E8C1] hover:bg-[#007038] transition-colors px-3 py-2 rounded-lg">
                About
            </a>
            <a href="/#collaboration" 
               class="mobile-nav-link block text-[#C9A84C] text-base sm:text-lg font-medium hover:text-[#F4E8C1] hover:bg-[#007038] transition-colors px-3 py-2 rounded-lg">
                Collaboration
            </a>
            <a href="/#projects" 
               class="mobile-nav-link block text-[#C9A84C] text-base sm:text-lg font-medium hover:text-[#F4E8C1] hover:bg-[#007038] transition-colors px-3 py-2 rounded-lg">
                Projects
            </a>
            <a href="{{ route('gallery.index') }}" 
               class="mobile-nav-link block text-[#C9A84C] text-base sm:text-lg font-medium hover:text-[#F4E8C1] hover:bg-[#007038] transition-colors px-3 py-2 rounded-lg">
                Gallery
            </a>
            <a href="/#contact" 
               class="mobile-nav-link block text-[#C9A84C] text-base sm:text-lg font-medium hover:text-[#F4E8C1] hover:bg-[#007038] transition-colors px-3 py-2 rounded-lg">
                Contact
            </a>
        </div>

        <!-- Mobile Donate Button -->
        <a href="/#donate"
           class="mobile-nav-link block text-[#008543] px-6 py-3 rounded-full font-semibold text-center text-base sm:text-lg shadow-lg transition-opacity hover:opacity-90"
           style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
            Donate Now
        </a>
    </div>

    <!-- Mobile menu overlay/backdrop -->
    <div id="mobile-menu-overlay" 
         class="fixed inset-0 bg-black/50 md:hidden z-30 opacity-0 pointer-events-none transition-opacity duration-300"
         aria-hidden="true"></div>
</nav>

<!-- Double-line divider under navbar -->
<div class="double-divider w-full fixed top-16 sm:top-20 left-0 z-40">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>

<style>
    /* Prevent body scroll when mobile menu is open */
    body.mobile-menu-open {
        overflow: hidden;
    }

    /* Smooth menu animation */
    #mobile-menu.active {
        @apply translate-x-0;
    }

    #mobile-menu-overlay.active {
        @apply opacity-100 pointer-events-auto;
    }

    /* Ensure proper touch handling on iOS */
    @supports (-webkit-touch-callout: none) {
        #mobile-menu {
            height: 100vh;
            height: 100dvh;
        }
    }

    /* Safe area support for notch devices */
    @supports (padding-top: max(0px)) {
        #mobile-menu {
            padding-top: max(1rem, env(safe-area-inset-top));
            padding-right: max(1rem, env(safe-area-inset-right));
            padding-bottom: max(1rem, env(safe-area-inset-bottom));
            padding-left: max(1rem, env(safe-area-inset-left));
        }
    }

    /* Ensure buttons are easily tappable on mobile (minimum 44x44px) */
    #mobile-menu-btn,
    #close-menu,
    .mobile-nav-link {
        min-height: 44px;
        min-width: 44px;
    }

    /* Prevent font size zoom on iOS input focus */
    @media (max-width: 640px) {
        input,
        select,
        textarea {
            font-size: 16px !important;
        }
    }

    /* Fix for older iPhones and browsers */
    @media (max-width: 767px) {
        #navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
        }
    }

    /* Smooth transitions for all nav elements */
    .nav-link,
    .mobile-nav-link {
        transition: color 0.3s ease, background-color 0.3s ease;
    }

    /* Additional button hover states for better feedback */
    #mobile-menu-btn:active,
    #close-menu:active {
        opacity: 0.7;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const closeMenuBtn = document.getElementById('close-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const navLinks = document.querySelectorAll('.mobile-nav-link');
        const body = document.body;

        // Open mobile menu
        function openMenu() {
            mobileMenu.classList.add('active');
            mobileMenuOverlay.classList.add('active');
            mobileMenuBtn.setAttribute('aria-expanded', 'true');
            body.classList.add('mobile-menu-open');
            
            // Focus on close button for accessibility
            closeMenuBtn.focus();
        }

        // Close mobile menu
        function closeMenu() {
            mobileMenu.classList.remove('active');
            mobileMenuOverlay.classList.remove('active');
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
            body.classList.remove('mobile-menu-open');
            
            // Focus back on menu button
            mobileMenuBtn.focus();
        }

        // Toggle menu on button click
        mobileMenuBtn.addEventListener('click', function() {
            if (mobileMenu.classList.contains('active')) {
                closeMenu();
            } else {
                openMenu();
            }
        });

        // Close menu on close button click
        closeMenuBtn.addEventListener('click', closeMenu);

        // Close menu on overlay click
        mobileMenuOverlay.addEventListener('click', closeMenu);

        // Close menu when clicking a navigation link
        navLinks.forEach(link => {
            link.addEventListener('click', function() {
                closeMenu();
            });
        });

        // Close menu on ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && mobileMenu.classList.contains('active')) {
                closeMenu();
            }
        });

        // Handle window resize - close menu if resizing to desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768 && mobileMenu.classList.contains('active')) {
                closeMenu();
            }
        });

        // Prevent menu from scrolling body on iOS
        mobileMenu.addEventListener('touchmove', function(e) {
            if (e.target.closest('#mobile-menu')) {
                e.stopPropagation();
            }
        }, false);

        // Profile menu (if exists - your existing code)
        const profileBtn = document.getElementById('profileBtn');
        const profileMenu = document.getElementById('profileMenu');
        if (profileBtn) {
            profileBtn.addEventListener('click', () => profileMenu.classList.toggle('hidden'));
            document.addEventListener('click', (e) => {
                if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
                    profileMenu.classList.add('hidden');
                }
            });
        }
    });
</script>