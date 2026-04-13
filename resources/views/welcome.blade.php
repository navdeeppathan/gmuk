@extends('layouts.app')

@section('content')

<style>
    /*--------------------------------------------------------------
    # Hero Section
    --------------------------------------------------------------*/
    /*--------------------------------------------------------------
    # HERO SECTION (Dynamic Banner)
    --------------------------------------------------------------*/
    /* ===============================
    HERO SECTION
    ================================ */
    /* =========================
    HERO BASE
    ========================= */
    .hero {
        background: var(--deep-green);
        padding: 100px 120px;
        overflow: hidden;
    }

    .hero-container {
        display: grid;
        grid-template-columns: 1.1fr 1fr;
        align-items: center;
        gap: 80px;
    }

    /* =========================
    LEFT CONTENT
    ========================= */
    .hero-left h1 {
        color: #fff;
        font-size: 42px;
        line-height: 1.1;
        margin-bottom: 20px;
        text-align: center;
    }

    .hero-left h1:hover {
        color: var(--accent-color);
    }

    .hero-left h1 span {
        font-style: italic;
    }

    .hero-left p {
        color: var(--cream);
       
        margin-bottom: 32px;
        text-align: center;
    }

    .hero-left p:hover {
        color: var(--accent-color);
    }

    .btn {
        background: var(--accent-color);
        padding: 14px 28px;
        border-radius: 999px;
        color: var(--surface-color);
        font-weight: 600;
        display: inline-block;
        text-decoration: none;
    }

    .btn:hover {
        background: color-mix(in srgb, var(--accent-color), transparent 20%);
        color: var(--surface-color);
    }

    /* =========================
    RIGHT SLIDERS (DESKTOP)
    ========================= */
    .hero-right {
        display: flex;
        gap: 18px;
        height: 520px;
    }

    .slider {
        width: 180px;
        display: flex;
        flex-direction: column;
        gap: 18px;
        animation: slideDown 18s ease-in-out infinite alternate;
    }

    .slider.reverse {
        animation-direction: alternate-reverse;
    }

    .slider img {
        width: 100%;
        height: auto;
        border-radius: 18px;
        object-fit: cover;
    }

    /* =========================
    DESKTOP ANIMATION
    ========================= */
    @keyframes slideDown {
        from {
            transform: translateY(0);
        }
        to {
            transform: translateY(-50%);
        }
    }

    /* =========================
    TABLET & MOBILE
    ========================= */
    @media (max-width: 1024px) {
        .hero {
            padding: 80px 24px;
        }

        .hero-container {
            grid-template-columns: 1fr;
            gap: 48px;
        }

        /* SLIDERS MOVE BELOW TEXT */
        .hero-right {
            flex-direction: column;
            height: auto;
            gap: 16px;
            overflow: hidden;
            align-items: center;
        }

        /* EACH SLIDER ROW */
        .slider {
            width: max-content;
            flex-direction: row;
            animation: slideHorizontal 18s linear infinite;
        }

        .slider.reverse {
            animation-direction: reverse;
        }

        .slider img {
            width: 160px;
            height: 220px;
            flex-shrink: 0;
        }
    }

    /* =========================
    MOBILE SMOOTHER SPEED
    ========================= */
    @media (max-width: 768px) {
        .slider {
            animation-duration: 22s;
        }
    }

    /* =========================
    MOBILE ANIMATION
    ========================= */
    @keyframes slideHorizontal {
        from {
            transform: translateX(0);
        }
        to {
            transform: translateX(-50%);
        }
    }
</style>

    <!-- Hero Section -->
    {{-- <section id="home" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-[#008e4d]">
        <!-- Background Image with Overlay -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-gradient-to-b from-[#008e4d]/90 via-[#008e4d]/80 to-[#008e4d]/95 z-10"></div>
            <div class="absolute inset-0 hero-pattern z-10 opacity-30"></div>
            <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=1920&q=80" alt="Education" class="w-full h-full object-cover opacity-40 parallax-img" id="hero-bg">
        </div>

        <!-- Floating Islamic Geometric Elements -->
        <div class="absolute top-20 left-10 w-32 h-32 border border-[#D4AF37]/20 rotate-45 animate-pulse hidden lg:block"></div>
        <div class="absolute bottom-20 right-10 w-48 h-48 border border-[#D4AF37]/10 rotate-12 hidden lg:block"></div>

        <!-- Content -->
        <div class="relative z-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center pt-20">
            <div class="fade-up">
                <p class="text-[#D4AF37] text-sm tracking-[0.3em] uppercase mb-4 font-medium">Since 1968</p>
                <h1 class="font-serif text-5xl md:text-7xl lg:text-8xl text-white font-bold leading-tight mb-6">
                    Empowering Communities<br>
                    <span class="text-gold-gradient italic">Through Education</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 font-light leading-relaxed">
                    Transforming 500+ Zakat Acceptors into Zakat Givers every year. Building global trust and credibility through transparent charity and educational excellence.
                </p>
            </div>

            <!-- Stats -->
            <div class="fade-up grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto mb-12 mt-16">
                <div class="glass rounded-2xl p-6 border border-[#D4AF37]/20">
                    <div class="text-4xl font-bold text-[#D4AF37] counter-value" data-target="500">0</div>
                    <p class="text-white/80 text-sm mt-2">Students Supported Yearly</p>
                </div>
                <div class="glass rounded-2xl p-6 border border-[#D4AF37]/20">
                    <div class="text-4xl font-bold text-[#D4AF37] counter-value" data-target="1968">0</div>
                    <p class="text-white/80 text-sm mt-2">Serving Since</p>
                </div>
                <div class="glass rounded-2xl p-6 border border-[#D4AF37]/20">
                    <div class="text-4xl font-bold text-[#D4AF37]">∞</div>
                    <p class="text-white/80 text-sm mt-2">Lives Transformed</p>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="fade-up flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#donate" class="btn-premium bg-[#D4AF37] text-[#008e4d] px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:shadow-[#D4AF37]/20 transition-all transform hover:-translate-y-1">
                    Give Zakat
                </a>
                <a href="#impact" class="btn-premium border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-[#008e4d] transition-all">
                    Support a Student
                </a>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <i data-lucide="chevron-down" class="w-6 h-6 text-[#D4AF37]"></i>
        </div>
    </section> --}}
    <section id="hero" class="hero">
      <div class="hero-container">

        <!-- LEFT CONTENT -->
        <div class="hero-left">
          <div class="fade-up">
                <p class="text-[#D4AF37] text-sm tracking-[0.3em] uppercase mb-4 font-medium">Since 1968</p>
                <h1 class="font-serif text-5xl md:text-7xl lg:text-8xl text-white font-bold leading-tight mb-6">
                    Empowering Communities<br>
                    <span class="text-gold-gradient italic">Through Education</span>
                </h1>
                <p class="text-gray-300 text-lg md:text-xl max-w-2xl mx-auto mb-10 font-light leading-relaxed">
                    Transforming 500+ Zakat Acceptors into Zakat Givers every year. Building global trust and credibility through transparent charity and educational excellence.
                </p>
            </div>
          <!-- Stats -->
            <div class="fade-up grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto mb-12 mt-16">
                <div class="glass rounded-2xl p-6 border border-[#D4AF37]/20">
                    <div class="text-4xl font-bold text-[#D4AF37] counter-value" data-target="500">0</div>
                    <p class="text-white/80 text-sm mt-2">Students Supported Yearly</p>
                </div>
                <div class="glass rounded-2xl p-6 border border-[#D4AF37]/20">
                    <div class="text-4xl font-bold text-[#D4AF37] counter-value" data-target="1968">0</div>
                    <p class="text-white/80 text-sm mt-2">Serving Since</p>
                </div>
                <div class="glass rounded-2xl p-6 border border-[#D4AF37]/20">
                    <div class="text-4xl font-bold text-[#D4AF37]">∞</div>
                    <p class="text-white/80 text-sm mt-2">Lives Transformed</p>
                </div>
            </div>
            <!-- CTA Buttons -->
            <div class="fade-up flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="#donate" class="btn-premium bg-[#D4AF37] text-[#008e4d] px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:shadow-[#D4AF37]/20 transition-all transform hover:-translate-y-1">
                    Give Zakat
                </a>
                <a href="#impact" class="btn-premium border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-[#008e4d] transition-all">
                    Support a Student
                </a>
            </div>
        </div>

        <!-- RIGHT SLIDERS -->
        <div class="hero-right">
          <div class="slider reverse">
            @foreach(range(1,6) as $i)
              <img src="/demo{{ $i }}.avif" />
            @endforeach
          </div>

          <div class="slider">
            @foreach(range(7,12) as $i)
              <img src="/demo{{ $i }}.avif" />
            @endforeach
          </div>

          <div class="slider reverse">
            @foreach(range(13,18) as $i)
              <img src="/demo{{ $i }}.avif" />
            @endforeach
          </div>
        </div>

      </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        new Swiper(".hero-swiper", {
            loop: true,
            speed: 2000,
            autoplay: {
            delay: 2000,
            disableOnInteraction: false,
            },
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            },
            effect: "creative",
            creativeEffect: {
            prev: {
                shadow: true,
                translate: ["-120%", 0, -500],
                rotate: [0, 0, -20],
            },
            next: {
                shadow: true,
                translate: ["120%", 0, -500],
                rotate: [0, 0, 20],
            },
            },
        });
        });
    </script>

    <!-- Impact Section -->
    <section id="impact" class="py-24 bg-[#FDF8F3] relative overflow-hidden">
        <div class="absolute inset-0 islamic-pattern opacity-50"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-up">
                <p class="text-[#008e4d] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Our Impact</p>
                <h2 class="font-serif text-4xl md:text-6xl text-[#008e4d] font-bold mb-6">Transforming Lives</h2>
                <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                    For over five decades, we have been the bridge between generous donors and deserving students, creating a cycle of empowerment that spans generations.
                </p>
            </div>

            <!-- Impact Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="impact-card bg-white rounded-2xl overflow-hidden shadow-lg fade-up">
                    <div class="h-48 bg-gradient-to-br from-[#008e4d] to-[#008e4d] flex items-center justify-center">
                        <i data-lucide="graduation-cap" class="w-16 h-16 text-[#D4AF37]"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl font-bold text-[#008e4d] mb-3">Education</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Annual scholarships to over 500 students, enabling them to pursue engineering, medicine, and teaching careers.</p>
                    </div>
                </div>

                <div class="impact-card bg-white rounded-2xl overflow-hidden shadow-lg fade-up" style="transition-delay: 100ms;">
                    <div class="h-48 bg-gradient-to-br from-[#008e4d] to-[#008e4d] flex items-center justify-center">
                        <i data-lucide="heart-handshake" class="w-16 h-16 text-[#D4AF37]"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl font-bold text-[#008e4d] mb-3">Welfare</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Supporting underprivileged families with food distribution during crises and community welfare initiatives.</p>
                    </div>
                </div>

                <div class="impact-card bg-white rounded-2xl overflow-hidden shadow-lg fade-up" style="transition-delay: 200ms;">
                    <div class="h-48 bg-gradient-to-br from-[#008e4d] to-[#008e4d] flex items-center justify-center">
                        <i data-lucide="users" class="w-16 h-16 text-[#D4AF37]"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl font-bold text-[#008e4d] mb-3">Community</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Building stronger communities through structured Zakat and Sadaqah systems that ensure transparency.</p>
                    </div>
                </div>

                <div class="impact-card bg-white rounded-2xl overflow-hidden shadow-lg fade-up" style="transition-delay: 300ms;">
                    <div class="h-48 bg-gradient-to-br from-[#008e4d] to-[#008e4d] flex items-center justify-center">
                        <i data-lucide="trending-up" class="w-16 h-16 text-[#D4AF37]"></i>
                    </div>
                    <div class="p-6">
                        <h3 class="font-serif text-2xl font-bold text-[#008e4d] mb-3">Growth</h3>
                        <p class="text-gray-600 text-sm leading-relaxed">Transforming Zakat acceptors into givers, creating a sustainable cycle of giving and empowerment.</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Preview -->
            <div class="mt-20 bg-[#008e4d] rounded-3xl p-8 md:p-12 fade-up relative overflow-hidden">
                <div class="absolute top-0 right-0 w-64 h-64 bg-[#D4AF37]/10 rounded-full -mr-32 -mt-32"></div>
                <div class="relative z-10 flex flex-col md:flex-row items-center gap-8">
                    <div class="w-24 h-24 rounded-full bg-[#D4AF37] flex items-center justify-center flex-shrink-0">
                        <span class="text-3xl font-serif text-[#008e4d] font-bold">A</span>
                    </div>
                    <div class="text-center md:text-left">
                        <p class="text-white text-xl md:text-2xl font-serif italic leading-relaxed mb-4">
                            "The scholarship from GMUK changed my life and allowed me to pursue my engineering degree. Today, I am able to support my family and give back to the community."
                        </p>
                        <p class="text-[#D4AF37] font-semibold">— Ahmed, Engineering Graduate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 bg-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div class="fade-up">
                    <p class="text-[#008e4d] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">About Us</p>
                    <h2 class="font-serif text-4xl md:text-5xl text-[#008e4d] font-bold mb-6 leading-tight">
                        A Legacy of<br>
                        <span class="text-gold-gradient">Service Since 1968</span>
                    </h2>
                    
                    <div class="space-y-6 text-gray-600 leading-relaxed">
                        <p>
                            Founded in 1968, Gujrat Muslim Association UK was established with a singular vision: to support underprivileged communities through education and create a structured Zakat and Sadaqah system that ensures every donation reaches those who need it most.
                        </p>
                        <p>
                            Our mission is to empower disadvantaged communities through education and social welfare, creating a future where no talented student is deprived of education due to financial constraints.
                        </p>
                    </div>

                    <div class="mt-8 grid grid-cols-2 gap-6">
                        <div class="border-l-4 border-[#D4AF37] pl-4">
                            <h4 class="font-bold text-[#008e4d] text-lg">Mission</h4>
                            <p class="text-sm text-gray-600 mt-1">Empower through education</p>
                        </div>
                        <div class="border-l-4 border-[#D4AF37] pl-4">
                            <h4 class="font-bold text-[#008e4d] text-lg">Vision</h4>
                            <p class="text-sm text-gray-600 mt-1">No student left behind</p>
                        </div>
                    </div>

                    <div class="mt-10 flex gap-4">
                        <a href="#contact" class="btn-premium bg-[#008e4d] text-white px-8 py-3 rounded-full font-semibold hover:bg-[#008e4d] transition-colors">
                            Contact Us
                        </a>
                        <a href="#projects" class="btn-premium border-2 border-[#008e4d] text-[#008e4d] px-8 py-3 rounded-full font-semibold hover:bg-[#008e4d] hover:text-white transition-colors">
                            Our Work
                        </a>
                    </div>
                </div>

                <div class="relative fade-up">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=800&q=80" alt="Students studying" class="w-full h-[600px] object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#008e4d]/80 to-transparent"></div>
                        <div class="absolute bottom-0 left-0 right-0 p-8">
                            <p class="text-white font-serif text-2xl italic">"Education is the most powerful weapon which you can use to change the world."</p>
                            <p class="text-[#D4AF37] mt-2">— Nelson Mandela</p>
                        </div>
                    </div>
                    <!-- Floating Badge -->
                    <div class="absolute -bottom-6 -left-6 bg-[#D4AF37] rounded-2xl p-6 shadow-xl">
                        <div class="text-[#008e4d] font-bold text-3xl">56+</div>
                        <div class="text-[#008e4d]/80 text-sm">Years of Service</div>
                    </div>
                </div>
            </div>

            <!-- Leadership Team -->
            <div class="mt-24">
                <h3 class="font-serif text-3xl text-center text-[#008e4d] font-bold mb-12 fade-up">Leadership Team</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center fade-up group cursor-pointer">
                        <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-br from-[#008e4d] to-[#008e4d] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i data-lucide="user" class="w-12 h-12 text-[#D4AF37]"></i>
                        </div>
                        <h4 class="font-bold text-[#008e4d] text-lg">Trustee Name</h4>
                        <p class="text-[#D4AF37] text-sm">Chairman</p>
                        <p class="text-gray-500 text-sm mt-2">Leading educational initiatives and community outreach programs.</p>
                    </div>
                    <div class="text-center fade-up group cursor-pointer" style="transition-delay: 100ms;">
                        <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-br from-[#008e4d] to-[#008e4d] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i data-lucide="user" class="w-12 h-12 text-[#D4AF37]"></i>
                        </div>
                        <h4 class="font-bold text-[#008e4d] text-lg">Trustee Name</h4>
                        <p class="text-[#D4AF37] text-sm">Secretary</p>
                        <p class="text-gray-500 text-sm mt-2">Managing operations and donor relations with transparency.</p>
                    </div>
                    <div class="text-center fade-up group cursor-pointer" style="transition-delay: 200ms;">
                        <div class="w-32 h-32 mx-auto rounded-full bg-gradient-to-br from-[#008e4d] to-[#008e4d] flex items-center justify-center mb-4 group-hover:scale-110 transition-transform">
                            <i data-lucide="user" class="w-12 h-12 text-[#D4AF37]"></i>
                        </div>
                        <h4 class="font-bold text-[#008e4d] text-lg">Trustee Name</h4>
                        <p class="text-[#D4AF37] text-sm">Treasurer</p>
                        <p class="text-gray-500 text-sm mt-2">Ensuring financial accountability and Zakat distribution.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Collaboration Section -->
    <section id="collaboration" class="py-24 bg-[#FDF8F3] relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-up">
                <p class="text-[#008e4d] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Partnership</p>
                <h2 class="font-serif text-4xl md:text-5xl text-[#008e4d] font-bold mb-6">Anjumane Talimul Muslimeen</h2>
                <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                    Our strategic partnership ensures transparent scholarship distribution and academic monitoring, creating a robust system for identifying and supporting deserving students.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="fade-up space-y-8">
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#D4AF37] flex items-center justify-center flex-shrink-0">
                            <span class="text-[#008e4d] font-bold">1</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#008e4d] text-lg mb-2">Student Identification</h4>
                            <p class="text-gray-600">Systematic identification of deserving students through local community networks and school partnerships.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#D4AF37] flex items-center justify-center flex-shrink-0">
                            <span class="text-[#008e4d] font-bold">2</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#008e4d] text-lg mb-2">Scholarship Approval</h4>
                            <p class="text-gray-600">Rigorous verification process ensuring funds reach genuinely deserving candidates.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#D4AF37] flex items-center justify-center flex-shrink-0">
                            <span class="text-[#008e4d] font-bold">3</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#008e4d] text-lg mb-2">Academic Monitoring</h4>
                            <p class="text-gray-600">Continuous tracking of student progress to ensure educational goals are met.</p>
                        </div>
                    </div>

                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#D4AF37] flex items-center justify-center flex-shrink-0">
                            <span class="text-[#008e4d] font-bold">4</span>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#008e4d] text-lg mb-2">Success Tracking</h4>
                            <p class="text-gray-600">Long-term follow-up to measure impact and success stories of graduated students.</p>
                        </div>
                    </div>
                </div>

                <div class="fade-up relative">
                    <div class="bg-white rounded-3xl p-8 shadow-2xl border border-[#D4AF37]/20">
                        <div class="aspect-video bg-gradient-to-br from-[#008e4d] to-[#008e4d] rounded-2xl flex items-center justify-center mb-6 relative overflow-hidden group cursor-pointer">
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/30 transition-colors"></div>
                            <div class="w-16 h-16 bg-[#D4AF37] rounded-full flex items-center justify-center relative z-10 group-hover:scale-110 transition-transform">
                                <i data-lucide="play" class="w-6 h-6 text-[#008e4d] ml-1"></i>
                            </div>
                            <p class="absolute bottom-4 left-4 text-white text-sm">Watch Partnership Video</p>
                        </div>
                        <h3 class="font-serif text-2xl font-bold text-[#008e4d] mb-3">Collaboration Impact</h3>
                        <ul class="space-y-3 text-gray-600">
                            <li class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-[#D4AF37]"></i>
                                <span>Improved educational access for 500+ students annually</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-[#D4AF37]"></i>
                                <span>Better career opportunities through quality education</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="check-circle" class="w-5 h-5 text-[#D4AF37]"></i>
                                <span>Community upliftment through knowledge</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-up">
                <p class="text-[#008e4d] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Current Initiatives</p>
                <h2 class="font-serif text-4xl md:text-5xl text-[#008e4d] font-bold mb-6">Ongoing Projects</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="group fade-up">
                    <div class="relative overflow-hidden rounded-2xl mb-4">
                        <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600&q=80" alt="Scholarship" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#008e4d] to-transparent opacity-60"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-[#D4AF37] text-sm font-semibold">Education</p>
                                    <h3 class="text-white font-serif text-xl font-bold">Scholarship Expansion</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Target: 1000 students</span>
                            <span class="text-[#008e4d] font-semibold">65% Complete</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-[#D4AF37] h-2 rounded-full" style="width: 65%"></div>
                        </div>
                        <p class="text-gray-600 text-sm">Expanding our reach to support 1000 students annually by 2025.</p>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="group fade-up" style="transition-delay: 100ms;">
                    <div class="relative overflow-hidden rounded-2xl mb-4">
                        <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=600&q=80" alt="School" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#008e4d] to-transparent opacity-60"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-[#D4AF37] text-sm font-semibold">Infrastructure</p>
                                    <h3 class="text-white font-serif text-xl font-bold">School Partnerships</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">10 new schools</span>
                            <span class="text-[#008e4d] font-semibold">40% Complete</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-[#D4AF37] h-2 rounded-full" style="width: 40%"></div>
                        </div>
                        <p class="text-gray-600 text-sm">Partnering with educational institutions to improve infrastructure.</p>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="group fade-up" style="transition-delay: 200ms;">
                    <div class="relative overflow-hidden rounded-2xl mb-4">
                        <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?w=600&q=80" alt="Food" class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-[#008e4d] to-transparent opacity-60"></div>
                        <div class="absolute bottom-4 left-4 right-4">
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-[#D4AF37] text-sm font-semibold">Welfare</p>
                                    <h3 class="text-white font-serif text-xl font-bold">Food Distribution</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-3">
                        <div class="flex justify-between text-sm">
                            <span class="text-gray-600">Monthly program</span>
                            <span class="text-[#008e4d] font-semibold">Active</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2">
                            <div class="bg-[#D4AF37] h-2 rounded-full" style="width: 90%"></div>
                        </div>
                        <p class="text-gray-600 text-sm">Regular food distribution to families in need across Gujarat.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Donation Section -->
    <section id="donate" class="py-24 bg-[#008e4d] relative overflow-hidden">
        <div class="absolute inset-0 hero-pattern opacity-20"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="text-center mb-16 fade-up">
                <p class="text-[#D4AF37] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Give Today</p>
                <h2 class="font-serif text-4xl md:text-6xl text-white font-bold mb-6">Support the Next Generation</h2>
                <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                    Your contribution creates a ripple effect of positive change. Choose how you would like to make an impact today.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 i gap-8 max-w-6xl mx-auto">
                <!-- Zakat -->
                <div class="fade-up bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-[#D4AF37]/30 hover:border-[#D4AF37] transition-colors group">
                    <div class="w-16 h-16 bg-[#D4AF37] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="hand-coins" class="w-8 h-8 text-[#008e4d]"></i>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-white mb-3">Give Zakat</h3>
                    <p class="text-gray-300 text-sm mb-6 leading-relaxed">
                        "Islam is built upon five pillars...including giving Zakat." — Sahih al-Bukhari
                    </p>
                    <p class="text-[#D4AF37] text-sm mb-6">Structured Zakat management ensuring 100% compliance with Islamic principles.</p>
                    {{-- <button onclick="handleProtectedAction()" type="button" class="w-full btn-premium bg-[#D4AF37] text-[#008e4d] py-3 rounded-full font-semibold hover:bg-[#F4E8C1] transition-colors">
                        Give Your Zakat
                    </button> --}}
                    {{-- @auth --}}
                        <a href="/donate" class="w-full inline-block text-center btn-premium bg-[#D4AF37] text-[#008e4d] py-3 rounded-full font-semibold hover:bg-[#F4E8C1] transition-colors">
                            Give Your Zakat
                        </a>
                    {{-- @else
                        <a href="/login" class="w-full inline-block text-center btn-premium bg-[#D4AF37] text-[#008e4d] py-3 rounded-full font-semibold hover:bg-[#F4E8C1] transition-colors">
                            Give Your Zakat
                        </a>
                    @endauth --}}
                </div>

                <!-- Monthly -->
                {{-- <div class="fade-up bg-[#D4AF37] rounded-3xl p-8 transform md:-translate-y-4 shadow-2xl shadow-[#D4AF37]/20" style="transition-delay: 100ms;">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 bg-[#008e4d] text-[#D4AF37] px-4 py-1 rounded-full text-xs font-bold tracking-wider">
                        MOST IMPACTFUL
                    </div>
                    <div class="w-16 h-16 bg-[#008e4d] rounded-2xl flex items-center justify-center mb-6">
                        <i data-lucide="calendar-heart" class="w-8 h-8 text-[#D4AF37]"></i>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-[#008e4d] mb-3">Monthly Contribution</h3>
                    <p class="text-[#008e4d]/80 text-sm mb-6 leading-relaxed">
                        "The most beloved deeds to Allah are those that are consistent, even if they are small." — Sahih Muslim
                    </p>
                    <p class="text-[#008e4d] text-sm mb-6 font-medium">Sustainable support that allows us to plan long-term educational initiatives.</p>
                    
                    @auth
                        <a href="/donate" class="w-full inline-block text-center btn-premium bg-[#008e4d] text-white py-3 rounded-full font-semibold hover:bg-[#008e4d] transition-colors">
                            Start Monthly Giving
                        </a>
                    @else
                        <a href="/login" class="w-full inline-block text-center btn-premium bg-[#008e4d] text-white py-3 rounded-full font-semibold hover:bg-[#008e4d] transition-colors">
                            Start Monthly Giving
                        </a>
                    @endauth
                </div> --}}

                <!-- Sadaqah -->
                <div class="fade-up bg-white/5 backdrop-blur-sm rounded-3xl p-8 border border-[#D4AF37]/30 hover:border-[#D4AF37] transition-colors group" style="transition-delay: 200ms;">
                    <div class="w-16 h-16 bg-[#D4AF37] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i data-lucide="heart" class="w-8 h-8 text-[#008e4d]"></i>
                    </div>
                    <h3 class="font-serif text-2xl font-bold text-white mb-3">Give Sadaqah</h3>
                    <p class="text-gray-300 text-sm mb-6 leading-relaxed">
                        "Charity does not decrease wealth." — Sahih Muslim
                    </p>
                    <p class="text-[#D4AF37] text-sm mb-6">Voluntary charity that brings barakah to your wealth and helps those in need.</p>
                    {{-- <button onclick="handleProtectedAction()" type="button" class="w-full btn-premium bg-transparent border-2 border-[#D4AF37] text-[#D4AF37] py-3 rounded-full font-semibold hover:bg-[#D4AF37] hover:text-[#008e4d] transition-colors">
                        Give Sadaqah
                    </button> --}}
                    {{-- @auth --}}
                        <a href="/donate" class="w-full inline-block text-center btn-premium bg-transparent border-2 border-[#D4AF37] text-[#D4AF37] py-3 rounded-full font-semibold hover:bg-[#D4AF37] hover:text-[#008e4d] transition-colors">
                            Give Sadaqah
                        </a>
                    {{-- @else
                        <a href="/login" class="w-full inline-block text-center btn-premium bg-transparent border-2 border-[#D4AF37] text-[#D4AF37] py-3 rounded-full font-semibold hover:bg-[#D4AF37] hover:text-[#008e4d] transition-colors">
                            Give Sadaqah
                        </a>
                    @endauth --}}
                </div>
            </div>

            <!-- Trust Badges -->
            <div class="mt-16 flex flex-wrap justify-center gap-8 fade-up">
                <div class="flex items-center gap-2 text-white/60">
                    <i data-lucide="shield-check" class="w-5 h-5 text-[#D4AF37]"></i>
                    <span class="text-sm">SSL Secured</span>
                </div>
                <div class="flex items-center gap-2 text-white/60">
                    <i data-lucide="lock" class="w-5 h-5 text-[#D4AF37]"></i>
                    <span class="text-sm">GDPR Compliant</span>
                </div>
                <div class="flex items-center gap-2 text-white/60">
                    <i data-lucide="award" class="w-5 h-5 text-[#D4AF37]"></i>
                    <span class="text-sm">Registered Charity</span>
                </div>
                <div class="flex items-center gap-2 text-white/60">
                    <i data-lucide="receipt" class="w-5 h-5 text-[#D4AF37]"></i>
                    <span class="text-sm">Tax Exempt</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-24 bg-[#FDF8F3]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16 fade-up">
                <p class="text-[#008e4d] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Gallery</p>
                <h2 class="font-serif text-4xl md:text-5xl text-[#008e4d] font-bold mb-6">Moments of Impact</h2>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="{{ route('gallery.index') }}">
                <div class="relative group overflow-hidden rounded-2xl fade-up aspect-square">
                    {{-- <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=400&q=80" alt="Students" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"> --}}
                    {{-- <img src="{{ $scholarImage ? asset($scholarImage->image) : '' }}" alt="Students" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"> --}}
                    @php $img = $scholarImage?->images->first(); @endphp
                    <img src="{{ $img ? asset($img->image) : '' }}" alt="Students"  class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-[#008e4d]/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white font-serif text-lg">Scholarship Ceremony</p>
                    </div>
                </div>
                </a>
                <a href="{{ route('gallery.index') }}">
                <div class="relative group overflow-hidden rounded-2xl fade-up aspect-square" style="transition-delay: 50ms;">
                    {{-- <img src="https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?w=400&q=80" alt="Community" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"> --}}
                    {{-- <img src="{{ $communityImage ? asset($communityImage->image) : '' }}" alt="Community" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"> --}}
                    @php $img = $communityImage?->images->first(); @endphp
                    <img src="{{ $img ? asset($img->image) : '' }}" alt="Community"  class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-[#008e4d]/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white font-serif text-lg">Community Support</p>
                    </div>
                </div>
                </a>
                <a href="{{ route('gallery.index') }}">
                <div class="relative group overflow-hidden rounded-2xl fade-up aspect-square" style="transition-delay: 100ms;">
                    {{-- <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?w=400&q=80" alt="Education" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"> --}}
                    {{-- <img src="{{ $educationImage ? asset($educationImage->image) : '' }}" alt="Education" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"> --}}
                    @php $img = $educationImage?->images->first(); @endphp
                    <img src="{{ $img ? asset($img->image) : '' }}" alt="Education"  class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-[#008e4d]/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white font-serif text-lg">Education Program</p>
                    </div>
                </div>
                 </a>
                <a href="{{ route('gallery.index') }}">
                <div  class="relative group overflow-hidden rounded-2xl fade-up aspect-square" style="transition-delay: 150ms;">
                    {{-- <img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?w=400&q=80" alt="Distribution" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"> --}}
                    {{-- <img src="{{ $foodImage ? asset($foodImage->image) : '' }}" alt="Distribution" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500"> --}}
                    @php $img = $foodImage?->images->first(); @endphp
                    <img src="{{ $img ? asset($img->image) : '' }}" alt="Distribution"  class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-[#008e4d]/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white font-serif text-lg">Food Distribution</p>
                    </div>
                </div>
                 </a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-24 bg-[#008e4d] relative overflow-hidden">
        
        <!-- Background Pattern -->
        <div class="absolute inset-0 hero-pattern opacity-20"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">

            <!-- Heading -->
            <div class="text-center mb-16 fade-up">
                <p class="text-[#D4AF37] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">
                    Testimonials
                </p>
                <h2 class="font-serif text-4xl md:text-6xl text-white font-bold mb-6">
                    Voices of Impact
                </h2>
                <p class="text-gray-300 max-w-2xl mx-auto text-lg">
                    Real stories from students and families whose lives have been transformed through your generosity.
                </p>
            </div>

            <!-- Testimonial Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Card 1 -->
                <div class="fade-up bg-white/5 backdrop-blur-lg rounded-3xl p-8 border border-[#D4AF37]/20 hover:border-[#D4AF37] transition-all group">
                    
                    <!-- Quote Icon -->
                    <div class="w-12 h-12 bg-[#D4AF37] rounded-full flex items-center justify-center mb-6">
                        <i data-lucide="quote" class="w-5 h-5 text-[#008e4d]"></i>
                    </div>

                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        The scholarship program gave me the opportunity to complete my medical degree. Today, I serve my community as a doctor.
                    </p>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#D4AF37] flex items-center justify-center">
                            <span class="text-[#008e4d] font-bold">R</span>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Rahman</h4>
                            <p class="text-[#D4AF37] text-xs">Medical Graduate</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="fade-up bg-white/5 backdrop-blur-lg rounded-3xl p-8 border border-[#D4AF37]/20 hover:border-[#D4AF37] transition-all group" style="transition-delay: 100ms;">
                    
                    <div class="w-12 h-12 bg-[#D4AF37] rounded-full flex items-center justify-center mb-6">
                        <i data-lucide="quote" class="w-5 h-5 text-[#008e4d]"></i>
                    </div>

                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        Thanks to the support, I was able to continue my engineering studies without financial stress. Forever grateful.
                    </p>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#D4AF37] flex items-center justify-center">
                            <span class="text-[#008e4d] font-bold">A</span>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Ahmed</h4>
                            <p class="text-[#D4AF37] text-xs">Engineer</p>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="fade-up bg-white/5 backdrop-blur-lg rounded-3xl p-8 border border-[#D4AF37]/20 hover:border-[#D4AF37] transition-all group" style="transition-delay: 200ms;">
                    
                    <div class="w-12 h-12 bg-[#D4AF37] rounded-full flex items-center justify-center mb-6">
                        <i data-lucide="quote" class="w-5 h-5 text-[#008e4d]"></i>
                    </div>

                    <p class="text-gray-300 text-sm leading-relaxed mb-6">
                        This organization didn’t just support my education — it changed my entire future and my family’s life.
                    </p>

                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-full bg-[#D4AF37] flex items-center justify-center">
                            <span class="text-[#008e4d] font-bold">S</span>
                        </div>
                        <div>
                            <h4 class="text-white font-semibold">Sana</h4>
                            <p class="text-[#D4AF37] text-xs">Teacher</p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- CTA -->
            <div class="text-center mt-16 fade-up">
                <a href="#donate" class="btn-premium bg-[#D4AF37] text-[#008e4d] px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl hover:shadow-[#D4AF37]/20 transition-all transform hover:-translate-y-1">
                    Be Part of These Stories
                </a>
            </div>

        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <div class="fade-up">
                    <p class="text-[#008e4d] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Get in Touch</p>
                    <h2 class="font-serif text-4xl md:text-5xl text-[#008e4d] font-bold mb-6">Contact Us</h2>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        Have questions about our programs, donations, or want to get involved? Reach out to us through any of the channels below.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-[#FDF8F3] rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="mail" class="w-5 h-5 text-[#008e4d]"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#008e4d]">Email</h4>
                                <p class="text-gray-600">info@gujratmuslimassociation.org.uk</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-[#FDF8F3] rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="phone" class="w-5 h-5 text-[#008e4d]"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#008e4d]">Phone</h4>
                                <p class="text-gray-600">+44 (0) XXX XXX XXXX</p>
                            </div>
                        </div>

                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-[#FDF8F3] rounded-full flex items-center justify-center flex-shrink-0">
                                <i data-lucide="map-pin" class="w-5 h-5 text-[#008e4d]"></i>
                            </div>
                            <div>
                                <h4 class="font-bold text-[#008e4d]">Address</h4>
                                <p class="text-gray-600">Gujrat Muslim Association UK<br>United Kingdom</p>
                            </div>
                        </div>

                        <div class="flex gap-4 pt-4">
    
                            <!-- Facebook -->
                            <a href="#" class="w-10 h-10 bg-[#008e4d] rounded-full flex items-center justify-center text-white hover:bg-[#D4AF37] hover:text-[#008e4d] transition-colors">
                                <i class="fab fa-facebook-f"></i>
                            </a>

                            <!-- Twitter -->
                            <a href="#" class="w-10 h-10 bg-[#008e4d] rounded-full flex items-center justify-center text-white hover:bg-[#D4AF37] hover:text-[#008e4d] transition-colors">
                                 <i class="fab fa-tiktok"></i>
                            </a>

                            <!-- Instagram -->
                            <a href="#" class="w-10 h-10 bg-[#008e4d] rounded-full flex items-center justify-center text-white hover:bg-[#D4AF37] hover:text-[#008e4d] transition-colors">
                                <i class="fab fa-instagram"></i>
                            </a>

                            <!-- WhatsApp -->
                            <a href="#" class="w-10 h-10 bg-[#25D366] rounded-full flex items-center justify-center text-white hover:scale-110 transition-transform">
                                <i class="fab fa-whatsapp"></i>
                            </a>

                        </div>
                    </div>
                </div>

                <div class="fade-up bg-[#FDF8F3] rounded-3xl p-8 shadow-xl">
                    {{-- <form class="space-y-6" onsubmit="event.preventDefault(); alert('Thank you for your message. We will get back to you soon.');"> --}}
                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf
                        <div>
                            <label class="block text-[#008e4d] font-semibold mb-2">Full Name</label>
                            <input type="text" name="full_name" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:outline-none transition-colors" placeholder="Your name">
                        </div>
                        <div>
                            <label class="block text-[#008e4d] font-semibold mb-2">Email Address</label>
                            <input type="email" name="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:outline-none transition-colors" placeholder="your@email.com">
                        </div>
                        <div>
                           <label class="block text-[#008e4d] font-semibold mb-2">Subject</label>
                            <select 
                                name="subject"
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:outline-none transition-colors"
                                required
                            >
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Donation Query">Donation Query</option>
                                <option value="Volunteer">Volunteer</option>
                                <option value="Partnership">Partnership</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-[#008e4d] font-semibold mb-2">Message</label>
                            <textarea name="message" rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#D4AF37] focus:outline-none transition-colors" placeholder="Your message..."></textarea>
                        </div>
                        <button type="submit" class="w-full btn-premium bg-[#008e4d] text-white py-4 rounded-full font-semibold hover:bg-[#008e4d] transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>



<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonColor: '#D4AF37',
        background: '#008e4d',
        color: '#fff'
    });
</script>

@endif

@if ($errors->any())
<script>
    Swal.fire({
        title: 'Error!',
        text: '{{ $errors->first() }}',
        icon: 'error',
        confirmButtonColor: '#D4AF37',
        background: '#008e4d',
        color: '#fff'
    });
</script>
@endif

@endsection