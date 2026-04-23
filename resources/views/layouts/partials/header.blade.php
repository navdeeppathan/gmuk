@php
    $isGallary = request()->is('gallery-page*') || request()->is('gallery-detail*');
@endphp

<!-- Navigation -->
<nav id="navbar" class="fixed w-full z-50 transition-all duration-300 {{ $isGallary ? 'bg-transparent' : 'bg-transparent' }}">

    <!-- Gold accent line at bottom (visible when scrolled) -->
    <div class="nav-gold-line"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20">

            <!-- =====================
                 LOGO — transparent PNG, no white ring
            ===================== -->
            <a href="/" class="flex items-center gap-3 flex-shrink-0 group">
                {{-- 
                    IMPORTANT: Make sure you're using the .png version of both logos
                    so the transparent background shows correctly.
                    If your file is still .jpeg, rename/replace with the PNG version.
                --}}
                <img src="{{asset('gmuklogo.png')}}" alt="" class="w-full h-16 object-contain rounded-full border-2 border-[#FFF5F8] bg-[#FFF5F8]">
                <img src="{{asset('logo2.png')}}" alt="" class="w-full h-16 object-contain">
                <!-- <img src="{{ asset('logo2.png') }}"
                     alt="Gujarat Muslim Association UK"
                     class="h-12 w-auto object-contain drop-shadow-lg transition-transform group-hover:scale-105 hidden sm:block"> -->
            </a>

            <!-- =====================
                 DESKTOP MENU
            ===================== -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/"              class="nav-link text-[#C9A84C] hover:text-[#C9A84C] transition-colors text-sm font-medium">Home</a>
                <a href="/#impact"       class="nav-link text-[#C9A84C] hover:text-[#C9A84C] transition-colors text-sm font-medium">Impact</a>
                <a href="/#about"        class="nav-link text-[#C9A84C] hover:text-[#C9A84C] transition-colors text-sm font-medium">About</a>
                <a href="/#collaboration" class="nav-link text-[#C9A84C] hover:text-[#C9A84C] transition-colors text-sm font-medium">Collaboration</a>
                <a href="/#projects"     class="nav-link text-[#C9A84C] hover:text-[#C9A84C] transition-colors text-sm font-medium">Projects</a>
                <a href="{{ route('gallery.index') }}" class="nav-link text-[#C9A84C] hover:text-[#C9A84C] transition-colors text-sm font-medium">Gallery</a>
                <a href="/#contact"      class="nav-link text-[#C9A84C] hover:text-[#C9A84C] transition-colors text-sm font-medium">Contact</a>

                <!-- Donate Button — gold gradient -->
                <a href="/#donate"
                   class="btn-premium text-[#008543] px-6 py-2.5 rounded-full font-semibold text-sm hover:opacity-90 transition-all duration-300 shadow-lg"
                   style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                    Donate Now
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden text-[#C9A84C] p-2">
                <i data-lucide="menu" class="w-6 h-6"></i>
            </button>
        </div>
    </div>

    <!-- =====================
         MOBILE MENU
    ===================== -->
    <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 w-80 h-full bg-[#008543] shadow-2xl md:hidden z-50 p-8">
        <button id="close-menu" class="absolute top-6 right-6 text-[#C9A84C]">
            <i data-lucide="x" class="w-6 h-6"></i>
        </button>

        <!-- Mobile logo -->
        <div class="flex items-center gap-3 mb-10 mt-2">
            <img src="{{ asset('gmuklogo.png') }}" alt="GMUK" class="h-10 w-auto object-contain drop-shadow">
        </div>

        <div class="space-y-6">
            <a href="/"              class="block text-[#C9A84C] text-lg font-medium hover:text-[#C9A84C] transition-colors">Home</a>
            <a href="/#impact"       class="block text-[#C9A84C] text-lg font-medium hover:text-[#C9A84C] transition-colors">Impact</a>
            <a href="/#about"        class="block text-[#C9A84C] text-lg font-medium hover:text-[#C9A84C] transition-colors">About</a>
            <a href="/#collaboration" class="block text-[#C9A84C] text-lg font-medium hover:text-[#C9A84C] transition-colors">Collaboration</a>
            <a href="/#projects"     class="block text-[#C9A84C] text-lg font-medium hover:text-[#C9A84C] transition-colors">Projects</a>
            <a href="{{ route('gallery.index') }}" class="block text-[#C9A84C] text-lg font-medium hover:text-[#C9A84C] transition-colors">Gallery</a>
            <a href="/#contact"      class="block text-[#C9A84C] text-lg font-medium hover:text-[#C9A84C] transition-colors">Contact</a>

            <a href="/#donate"
               class="block text-[#008543] px-6 py-3 rounded-full font-semibold text-center mt-8 shadow-lg"
               style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                Donate Now
            </a>
        </div>
    </div>
</nav>
{{-- Double-line divider under navbar --}}
<div class="double-divider w-full fixed top-20 left-0 z-40">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>
<script>
    const profileBtn  = document.getElementById('profileBtn');
    const profileMenu = document.getElementById('profileMenu');
    if (profileBtn) {
        profileBtn.addEventListener('click', () => profileMenu.classList.toggle('hidden'));
        document.addEventListener('click', (e) => {
            if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
                profileMenu.classList.add('hidden');
            }
        });
    }
</script>