 <!-- Navigation -->
 @php
    $isGallary = request()->is('gallery-page*') || request()->is('gallery-detail*');
@endphp
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 {{ $isGallary ? 'bg-[#008543]' : 'bg-transparent' }}">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center gap-3 cursor-pointer" onclick="window.scrollTo(0,0)">
                    {{-- <div class="w-12 h-12 bg-[#D4AF37] rounded-full flex items-center justify-center">
                        <span class="text-[#008543] font-bold text-xl font-arabic">G</span>
                    </div>
                    <div class="hidden sm:block">
                        <h1 class="text-white font-serif text-xl font-bold leading-tight">Gujrat Muslim</h1>
                        <p class="text-[#D4AF37] text-xs tracking-widest uppercase">Association UK</p>
                    </div> --}}
                    <img src="{{asset('gmuklogo.jpeg')}}" alt="" class="w-full h-16 object-contain rounded-full border-2 border-[#FFFFFF]" >

                    <img src="{{asset('logo2.jpeg')}}" alt="" class="w-full h-16 object-contain " >
                </div>

                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="/" class="nav-link text-white hover:text-[#D4AF37] transition-colors text-sm font-medium">Home</a>
                    <a href="/#impact" class="nav-link text-white hover:text-[#D4AF37] transition-colors text-sm font-medium">Impact</a>
                    <a href="/#about" class="nav-link text-white hover:text-[#D4AF37] transition-colors text-sm font-medium">About</a>
                    <a href="/#collaboration" class="nav-link text-white hover:text-[#D4AF37] transition-colors text-sm font-medium">Collaboration</a>
                    <a href="/#projects" class="nav-link text-white hover:text-[#D4AF37] transition-colors text-sm font-medium">Projects</a>
                    <a href="{{ route('gallery.index') }}" class="nav-link text-white hover:text-[#D4AF37] transition-colors text-sm font-medium">Gallery</a>
                    <a href="/#contact" class="nav-link text-white hover:text-[#D4AF37] transition-colors text-sm font-medium">Contact</a>
                    
                    {{-- @auth
                    <div class="relative">
                        <!-- Profile Button -->
                        <button id="profileBtn" class="flex items-center gap-2 text-white bg-[#D4AF37] px-4 py-2 rounded-full font-semibold text-sm hover:bg-[#F4E8C1] transition">
                            <span>{{ auth()->user()->name }}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>

                        <!-- Dropdown -->
                        <div id="profileMenu" class="hidden absolute right-0 mt-3 w-48 bg-[#008543] rounded-xl shadow-xl border border-[#D4AF37]/20 overflow-hidden">

                            <a href="/dashboard" class="block px-4 py-3 text-white hover:bg-[#008543] transition">
                                Profile
                            </a>

                            <form method="POST" action="/logout">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-3 text-red-400 hover:bg-[#008543] transition">
                                    Logout
                                </button>
                            </form>
                        </div>
                    </div>
                    @else
                    <a href="/login" class="nav-link text-white hover:text-[#D4AF37] transition-colors text-sm font-medium">
                        Login
                    </a>
                    @endauth --}}
                    <a href="/#donate" class="btn-premium bg-[#D4AF37] text-[#008543] px-6 py-2.5 rounded-full font-semibold text-sm hover:bg-[#F4E8C1] transition-colors">
                        Donate Now
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-btn" class="md:hidden text-white p-2">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="mobile-menu fixed top-0 right-0 w-80 h-full bg-[#008543] shadow-2xl md:hidden z-50 p-8">
            <button id="close-menu" class="absolute top-6 right-6 text-white">
                <i data-lucide="x" class="w-6 h-6"></i>
            </button>
            <div class="mt-16 space-y-6">
                <a href="#home" class="block text-white text-lg font-medium hover:text-[#D4AF37]">Home</a>
                <a href="#impact" class="block text-white text-lg font-medium hover:text-[#D4AF37]">Impact</a>
                <a href="#about" class="block text-white text-lg font-medium hover:text-[#D4AF37]">About</a>
                <a href="#collaboration" class="block text-white text-lg font-medium hover:text-[#D4AF37]">Collaboration</a>
                <a href="#projects" class="block text-white text-lg font-medium hover:text-[#D4AF37]">Projects</a>
                <a href="#donate" class="block bg-[#D4AF37] text-[#008543] px-6 py-3 rounded-full font-semibold text-center mt-8">Donate Now</a>
            </div>
        </div>
    </nav>

    <script>
    const profileBtn = document.getElementById('profileBtn');
    const profileMenu = document.getElementById('profileMenu');

    if(profileBtn){
        profileBtn.addEventListener('click', () => {
            profileMenu.classList.toggle('hidden');
        });

        // close on outside click
        document.addEventListener('click', (e) => {
            if (!profileBtn.contains(e.target) && !profileMenu.contains(e.target)) {
                profileMenu.classList.add('hidden');
            }
        });
    }
    </script>