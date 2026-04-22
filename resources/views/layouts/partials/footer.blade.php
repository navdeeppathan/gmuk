<!-- Footer -->
<footer class="bg-[#008543] text-white py-16 border-t border-[#C9A84C]/30">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-12">

            <!-- Brand Column -->
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-3 mb-6">
                    {{-- 
                        Logo: use .png so transparency works correctly.
                        No border, no rounded-full, no white ring.
                    --}}
                    <img src="{{ asset('gmuklogo.jpeg') }}"
                         alt="GMUK Logo"
                         class="h-14 w-auto object-contain drop-shadow-lg border-2 border-[#FFFFFF]">
                </div>
                <h3 class="font-serif text-xl font-bold text-white mb-3">The Gujarat Muslim Association UK.</h3>
                <p class="text-white/80 mb-6 max-w-md leading-relaxed">
                    Empowering communities through education since 1968. Registered charity dedicated to
                    transparent Zakat distribution and educational scholarships.
                </p>
                <div class="flex gap-6">
                    <a href="#" class="text-white/60 hover:text-white transition-colors text-sm">GDPR</a>
                    <a href="#" class="text-white/60 hover:text-white transition-colors text-sm">Privacy Policy</a>
                </div>

                <!-- Social icons -->
                <div class="flex gap-3 mt-6">
                    <a href="#"
                       class="w-10 h-10 rounded-full flex items-center justify-center text-[#008543] hover:scale-110 transition-transform"
                       style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                        <i class="fab fa-facebook-f text-sm"></i>
                    </a>
                    <a href="#"
                       class="w-10 h-10 rounded-full flex items-center justify-center text-[#008543] hover:scale-110 transition-transform"
                       style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                        <i class="fab fa-tiktok text-sm"></i>
                    </a>
                    <a href="#"
                       class="w-10 h-10 rounded-full flex items-center justify-center text-[#008543] hover:scale-110 transition-transform"
                       style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                        <i class="fab fa-instagram text-sm"></i>
                    </a>
                    <a href="https://wa.me/447464597722" target="_blank"
                       class="w-10 h-10 bg-[#25D366] rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform">
                        <i class="fab fa-whatsapp text-sm"></i>
                    </a>
                </div>
            </div>

            <!-- Quick Links -->
            <div>
                <h4 class="font-bold text-lg mb-5"
                    style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);
                           -webkit-background-clip: text;
                           -webkit-text-fill-color: transparent;
                           background-clip: text;">
                    Quick Links
                </h4>
                <ul class="space-y-3">
                    <li><a href="/"              class="text-white/80 hover:text-white transition-colors text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C9A84C] inline-block"></span>Home</a></li>
                    <li><a href="/#about"        class="text-white/80 hover:text-white transition-colors text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C9A84C] inline-block"></span>About Us</a></li>
                    <li><a href="/#impact"       class="text-white/80 hover:text-white transition-colors text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C9A84C] inline-block"></span>Our Impact</a></li>
                    <li><a href="/#projects"     class="text-white/80 hover:text-white transition-colors text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C9A84C] inline-block"></span>Projects</a></li>
                    <li><a href="/#donate"       class="text-white/80 hover:text-white transition-colors text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C9A84C] inline-block"></span>Donate</a></li>
                    <li><a href="{{ route('gallery.index') }}" class="text-white/80 hover:text-white transition-colors text-sm flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-[#C9A84C] inline-block"></span>Gallery</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div>
                <h4 class="font-bold text-lg mb-5"
                    style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);
                           -webkit-background-clip: text;
                           -webkit-text-fill-color: transparent;
                           background-clip: text;">
                    Contact
                </h4>
                <ul class="space-y-4 text-white/80 text-sm">
                    <li class="flex items-start gap-3">
                        <i data-lucide="mail" class="w-4 h-4 mt-0.5 flex-shrink-0 text-[#C9A84C]"></i>
                        <span>admin@thegmauk.org<br>secretary@thegmauk.org</span>
                    </li>
                    <li class="flex items-center gap-3">
                        <i data-lucide="phone" class="w-4 h-4 flex-shrink-0 text-[#C9A84C]"></i>
                        <span>+44 (0) 7464 597722</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i data-lucide="map-pin" class="w-4 h-4 mt-0.5 flex-shrink-0 text-[#C9A84C]"></i>
                        <span>47 Marlborough Road, Nuneaton. CV11 5PG. UK</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Bottom bar -->
        <div class="border-t border-white/10 pt-8 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-white/60 text-sm">© 2026 The Gujarat Muslim Association UK. All rights reserved.</p>
            <p class="text-white/60 text-sm">Registered Charity No: 1141663</p>
        </div>
    </div>
</footer>