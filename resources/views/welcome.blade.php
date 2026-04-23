@extends('layouts.app')

@section('content')

<style>
    /* =============================================
       HERO SECTION
    ============================================= */
    .hero {
        background: var(--light-pink);
        padding: 120px 120px 80px;
        overflow: hidden;
        position: relative;
    }

    /* Subtle radial glow behind hero text */
    .hero::before {
        content: '';
        position: absolute;
        top: -100px;
        left: -100px;
        width: 600px;
        height: 600px;
        background: radial-gradient(circle, rgba(201,168,76,0.08) 0%, transparent 70%);
        pointer-events: none;
    }

    .hero-container {
        display: grid;
        grid-template-columns: 1.1fr 1fr;
        align-items: center;
        gap: 80px;
        max-width: 1280px;
        margin: 0 auto;
    }

    /* =========================
    LEFT CONTENT
    ========================= */
    .hero-left h1 {
        color: #fff;
        font-size: 48px;
        line-height: 1.1;
        margin-bottom: 20px;
    }

    .hero-left p {
        color: rgba(255,255,255,0.85);
        margin-bottom: 32px;
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

    .slider.reverse { animation-direction: alternate-reverse; }

    .slider img {
        width: 100%;
        height: auto;
        border-radius: 18px;
        object-fit: cover;
    }

    @keyframes slideDown {
        from { transform: translateY(0); }
        to   { transform: translateY(-50%); }
    }

    /* =========================
    TABLET & MOBILE
    ========================= */
    @media (max-width: 1024px) {
        .hero { padding: 100px 24px 60px; }

        .hero-container {
            grid-template-columns: 1fr;
            gap: 48px;
        }

        .hero-right {
            flex-direction: column;
            height: auto;
            gap: 16px;
            overflow: hidden;
            align-items: center;
        }

        .slider {
            width: max-content;
            flex-direction: row;
            animation: slideHorizontal 18s linear infinite;
        }

        .slider.reverse { animation-direction: reverse; }

        .slider img {
            width: 160px;
            height: 220px;
            flex-shrink: 0;
        }
    }

    @media (max-width: 768px) {
        .slider { animation-duration: 22s; }
    }

    @keyframes slideHorizontal {
        from { transform: translateX(0); }
        to   { transform: translateX(-50%); }
    }

    /* =============================================
       GOLD GRADIENT UTILITY (mirrored from layout)
    ============================================= */
    .gold-gradient-text {
        background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    .gold-gradient-bg {
        background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);
    }
</style>

<!-- =============================================
     HERO SECTION
============================================= -->
<!-- =============================================
     HERO SECTION — Green + Maroon + Gold + Black
============================================= -->
<section id="hero" class="hero">
    <div class="hero-container">

        <!-- LEFT CONTENT -->
        <div class="hero-left">
            <div class="fade-up">
                <!-- "Since 1968" tag -->
                <p class="gold-gradient-text text-sm font-semibold tracking-[0.3em] uppercase mb-5">
                    Since 1968
                </p>

                <!-- Main heading -->
                <h1 class="font-serif font-bold gold-gradient-text italic">
                    Empowering Communities<br>
                    <span class="gold-gradient-text italic">Through Education</span>
                </h1>

                <!-- Subtext -->
                <p class="gold-gradient-text italic text-lg max-w-xl mb-10 font-light leading-relaxed">
                    Transforming 500+ Zakat Acceptors into Zakat Givers every year. Building
                    global trust and credibility through transparent charity and educational excellence.
                </p>
            </div>

           <div class="fade-up grid grid-cols-3 gap-4 max-w-xl mb-10">
                
                <div class="glass rounded-2xl p-5 border border-[#C9A84C]/20 flex flex-col items-center justify-center text-center">
                    <div class="text-3xl font-bold gold-gradient-text" data-target="500">500+</div>
                    <p class="text-white/70 text-xs mt-2 leading-snug text-center">
                        Students Supported Yearly
                    </p>
                </div>

                <div class="glass rounded-2xl p-5 border border-[#C9A84C]/20 flex flex-col items-center justify-center text-center">
                    <div class="text-3xl font-bold gold-gradient-text counter-value" data-target="1968">0</div>
                    <p class="text-white/70 text-xs mt-2 leading-snug text-center">
                        Serving Since
                    </p>
                </div>

                <div class="glass rounded-2xl p-5 border border-[#C9A84C]/20 flex flex-col items-center justify-center text-center">
                    <div class="text-3xl font-bold gold-gradient-text">∞</div>
                    <p class="text-white/70 text-xs mt-2 leading-snug text-center">
                        Lives Transformed
                    </p>
                </div>
            </div>

            <!-- CTA Buttons -->
            <div class="fade-up flex flex-wrap gap-4">
                <a href="#donate"
                   class="btn-premium text-[#fff] px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl transition-all transform hover:-translate-y-1"
                   style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                    Give Zakat
                </a>
                <a href="#impact"
                   class="btn-premium text-[#fff] px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl transition-all transform hover:-translate-y-1"
                   style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);"> 
                    Support a Student
                </a>
            </div>
           </div>

        <!-- RIGHT — UPCOMING EVENTS -->
        <?php
            $events = \App\Models\UpcomingEvent::where('status', 1)
                ->orderBy('event_date', 'asc')
                ->take(3)
                ->get();
        ?>
        <div class="flex flex-col gap-5">
            <h2 class="text-white font-bold text-2xl font-serif">
                <span class="gold-gradient-text">Upcoming Events</span>
            </h2>

            @forelse($events as $event)
                <div class="glass rounded-2xl p-5 border border-[#C9A84C]/20 backdrop-blur-lg hover:border-[#C9A84C]/60 transition-all">
                    <div class="flex gap-4 items-start">
                        <!-- Date badge -->
                        <div class="flex-shrink-0 rounded-xl overflow-hidden text-center"
                             style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914); min-width: 52px;">
                            <div class="text-[#fff] font-bold text-xl leading-none pt-2">
                                {{ \Carbon\Carbon::parse($event->event_date)->format('d') }}
                            </div>
                            <div class="text-[#fff] text-xs font-semibold uppercase pb-2">
                                {{ \Carbon\Carbon::parse($event->event_date)->format('M') }}
                            </div>
                        </div>

                        <div class="flex-1 min-w-0">
                            <h3 class="text-white font-semibold text-base leading-snug">
                                {{ $event->title }}
                            </h3>
                            <p class="text-white/60 text-sm mt-1">
                                @if($event->event_time)
                                    {{ date('h:i A', strtotime($event->event_time)) }} &nbsp;·&nbsp;
                                @endif
                                {{ $event->location }}
                            </p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="glass rounded-2xl p-6 border border-[#C9A84C]/20 text-center">
                    <i data-lucide="calendar-x" class="w-10 h-10 mx-auto mb-3 text-[#008543]"></i>
                    <p class="text-white/70 text-sm">No upcoming events at the moment.</p>
                </div>
            @endforelse
        </div>
    </div>
</section>
<div class="double-divider w-full">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>

<!-- =============================================
     IMPACT SECTION
============================================= -->
<section id="impact" class="py-24 bg-[#FFF5F8] relative overflow-hidden">
    <div class="absolute inset-0 islamic-pattern opacity-50"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 fade-up">
            <p class="text-[#008543] font-semibold">Our Impact</p>
            <h2 class="font-serif text-4xl md:text-6xl text-[#008543] font-bold mb-6">Transforming Lives</h2>
            <p class="text-gray-600 max-w-2xl mx-auto text-lg">
                For over five decades, we have been the bridge between generous donors and deserving students,
                creating a cycle of empowerment that spans generations.
            </p>
        </div>

        <!-- Impact Cards -->
       <!-- Impact Cards — simple SOLID green -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

            <div class="impact-card bg-white rounded-2xl overflow-hidden shadow-lg fade-up">
                <div class="h-48 flex items-center justify-center" style="background: #008543;">
                    <i data-lucide="graduation-cap" class="w-16 h-16 text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-serif text-2xl font-bold text-[#008543] mb-3">Education</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">Annual scholarships to over 500 students, enabling them to pursue engineering, medicine, and teaching careers.</p>
                </div>
            </div>

            <div class="impact-card bg-white rounded-2xl overflow-hidden shadow-lg fade-up" style="transition-delay: 100ms;">
                <div class="h-48 flex items-center justify-center" style="background: #008543;">
                    <i data-lucide="heart-handshake" class="w-16 h-16 text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-serif text-2xl font-bold text-[#008543] mb-3">Welfare</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">Supporting underprivileged families with food distribution during crises and community welfare initiatives.</p>
                </div>
            </div>

            <div class="impact-card bg-white rounded-2xl overflow-hidden shadow-lg fade-up" style="transition-delay: 200ms;">
                <div class="h-48 flex items-center justify-center" style="background: #008543;">
                    <i data-lucide="users" class="w-16 h-16 text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-serif text-2xl font-bold text-[#008543] mb-3">Community</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">Building stronger communities through structured Zakat and Sadaqah systems that ensure transparency.</p>
                </div>
            </div>

            <div class="impact-card bg-white rounded-2xl overflow-hidden shadow-lg fade-up" style="transition-delay: 300ms;">
                <div class="h-48 flex items-center justify-center" style="background: #008543;">
                    <i data-lucide="trending-up" class="w-16 h-16 text-white"></i>
                </div>
                <div class="p-6">
                    <h3 class="font-serif text-2xl font-bold text-[#008543] mb-3">Growth</h3>
                    <p class="text-gray-700 text-sm leading-relaxed">Transforming Zakat acceptors into givers, creating a sustainable cycle of giving and empowerment.</p>
                </div>
            </div>

        </div>

        <!-- Testimonial Preview -->
        <div class="mt-20 bg-[#FFF5F8] rounded-3xl p-8 md:p-12 fade-up relative overflow-hidden">
            <div class="absolute top-0 right-0 w-64 h-64 bg-[#C9A84C]/10 rounded-full -mr-32 -mt-32"></div>
            <div class="relative z-10 flex flex-col md:flex-row items-center gap-8">
                <div class="w-24 h-24 rounded-full flex items-center justify-center flex-shrink-0"
                     style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                    <span class="text-3xl font-serif text-[#008543] font-bold">A</span>
                </div>
                <div class="text-center md:text-left">
                    <p class="text-[#008543] text-xl md:text-2xl font-serif italic leading-relaxed mb-4">
                        "The scholarship from GMUK changed my life and allowed me to pursue my engineering degree.
                        Today, I am able to support my family and give back to the community."
                    </p>
                    <p class="font-semibold gold-gradient-text">— Ahmed, Engineering Graduate</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="double-divider w-full">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>
<!-- =============================================
     ABOUT SECTION
============================================= -->
<section id="about" class="py-24 bg-[#FFF5F8] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="fade-up">
                <p class="text-[#008543] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">About Us</p>
                <h2 class="font-serif text-4xl md:text-5xl text-[#008543] font-bold mb-6 leading-tight">
                    A Legacy of<br>
                    <span class="gold-gradient-text">Service Since 1968</span>
                </h2>

                <div class="space-y-6 text-gray-600 leading-relaxed">
                    <p>Founded in 1968, The Gujarat Muslim Association UK was established with a singular vision: to support underprivileged communities through education and create a structured Zakat and Sadaqah system that ensures every donation reaches those who need it most.</p>
                    <p>Our mission is to empower disadvantaged communities through education and social welfare, creating a future where no talented student is deprived of education due to financial constraints.</p>
                </div>

                <div class="mt-8 grid grid-cols-2 gap-6">
                    <div class="border-l-4 pl-4" style="border-color: #C9A84C;">
                        <h4 class="font-bold text-[#008543] text-lg">Mission</h4>
                        <p class="text-sm text-gray-600 mt-1">Empower through education</p>
                    </div>
                    <div class="border-l-4 pl-4" style="border-color: #C9A84C;">
                        <h4 class="font-bold text-[#008543] text-lg">Vision</h4>
                        <p class="text-sm text-gray-600 mt-1">No student left behind</p>
                    </div>
                </div>

                <div class="mt-10 flex gap-4">
                    <a href="#contact"
                       class="btn-premium bg-[#FFF5F8] text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition-colors">
                        Contact Us
                    </a>
                    <a href="#projects"
                       class="btn-premium border-2 border-[#C9A84C] text-[#008543] px-8 py-3 rounded-full font-semibold hover:bg-[#C9A84C] hover:text-white transition-colors">
                        Our Work
                    </a>
                </div>
            </div>

            <div class="relative fade-up">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1497633762265-9d179a990aa6?w=800&q=80"
                         alt="Students studying"
                         class="w-full h-[600px] object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#FFF5F8]/80 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 right-0 p-8">
                        <p class="text-white font-serif text-2xl italic">"Education is the most powerful weapon which you can use to change the world."</p>
                        <p class="mt-2 gold-gradient-text font-semibold">— Nelson Mandela</p>
                    </div>
                </div>
                <!-- Floating Badge -->
                <div class="absolute -bottom-6 -left-6 rounded-2xl p-6 shadow-xl"
                     style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                    <div class="text-[#fff] font-bold text-3xl">56+</div>
                    <div class="text-[#fff]/80 text-sm">Years of Service</div>
                </div>
            </div>
        </div>

        <!-- Leadership Team -->
        <div class="mt-24">
            <h3 class="font-serif text-3xl text-center text-[#008543] font-bold mb-12 fade-up">Leadership Team</h3>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach([
                    // ROW 1
                    [
                        'img' => 'president.jpg',
                        'name' => 'Shoayb Pathan',
                        'role' => 'President',
                        'desc' => 'Chartered Accountant',
                        'since' => '2019 - Present'
                    ],
                    [
                        'img' => 'Pathan.jpeg',
                        'name' => 'Dr Tanveerkhan Pathan',
                        'role' => 'General Secretary',
                        'desc' => 'Research Scientist',
                        'since' => '2019 - Present'
                    ],
                    [
                        'img' => 'Jameel.jpeg',
                        'name' => 'Jameel Ahmed Malik',
                        'role' => 'Treasurer',
                        'desc' => 'Project Management',
                        'since' => '2024 - Present'
                    ],

                    // ROW 2
                    [
                        'img' => 'Marghub.jpeg',
                        'name' => 'Marghub Shaikh',
                        'role' => 'Vice President',
                        'desc' => 'Logistics Manager',
                        'since' => '2010 - Present'
                    ],
                    [
                        'img' => 'Mukhtar.jpeg',
                        'name' => 'Muhamad Mukhtar Shaikh',
                        'role' => 'Assistant Secretary',
                        'desc' => 'Civil Servant',
                        'since' => '2010 - Present'
                    ],
                    [
                        'img' => 'Mukhtasr.jpeg',
                        'name' => 'Abu Baker Malek',
                        'role' => 'Assistant Treasurer',
                        'desc' => 'Civil Servant',
                        'since' => '2024 - Present'
                    ],
                ] as $member)
                <div class="text-center fade-up group cursor-pointer">
                    <div class="w-32 h-32 mx-auto rounded-full overflow-hidden mb-4 group-hover:scale-110 transition-transform ring-2 ring-[#C9A84C]/40">
                        <img src="{{ $member['img'] }}" alt="{{ $member['name'] }}" class="w-full h-full object-cover">
                    </div>
                    <h4 class="font-bold text-[#008543] text-lg">{{ $member['name'] }}</h4>
                    <p class="gold-gradient-text text-sm font-semibold">{{ $member['role'] }}</p>
                    <p class="text-gray-500 text-sm mt-2">{{ $member['desc'] }}</p>
                      <p class="text-gray-500 text-sm mt-2">{{ $member['since'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="double-divider w-full">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>
<!-- =============================================
     COLLABORATION SECTION
============================================= -->
<section id="collaboration" class="py-24 bg-[#FFF5F8] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-up">
            <p class="text-[#008543] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Partnership</p>
            <h2 class="font-serif text-4xl md:text-5xl text-[#008543] font-bold mb-6">Anjumane Talimul Muslimeen</h2>
            <p class="text-gray-600 max-w-3xl mx-auto text-lg">
                Our strategic partnership ensures transparent scholarship distribution and academic monitoring,
                creating a robust system for identifying and supporting deserving students.
            </p>
            <div class="mt-6">
                <img src="https://atmmalekpore.com/assets/front/images/logo.png"
                     alt="Anjumane Talimul Muslimeen Logo"
                     class="w-32 h-auto mx-auto mb-4">
                <a href="https://atmmalekpore.com/home"
                   class="btn-premium bg-[#c9a84c] text-white px-8 py-3 rounded-full font-semibold hover:opacity-90 transition-colors">
                    Click to Visit Anjumane Talimul Muslimeen
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="fade-up space-y-8">
                @foreach([
                    ['n'=>'1','title'=>'Student Identification',  'desc'=>'Systematic identification of deserving students through local community networks and school partnerships.'],
                    ['n'=>'2','title'=>'Scholarship Approval',    'desc'=>'Rigorous verification process ensuring funds reach genuinely deserving candidates.'],
                    ['n'=>'3','title'=>'Academic Monitoring',     'desc'=>'Continuous tracking of student progress to ensure educational goals are met.'],
                    ['n'=>'4','title'=>'Success Tracking',        'desc'=>'Long-term follow-up to measure impact and success stories of graduated students.'],
                ] as $step)
                <div class="flex gap-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0"
                         style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                        <span class="text-[#008543] font-bold">{{ $step['n'] }}</span>
                    </div>
                    <div>
                        <h4 class="font-bold text-[#008543] text-lg mb-2">{{ $step['title'] }}</h4>
                        <p class="text-gray-600">{{ $step['desc'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="fade-up relative">
                <div class="bg-white rounded-3xl p-8 shadow-2xl border border-[#C9A84C]/20">
                    
                    <!-- Video Section -->
                    <div class="aspect-video rounded-2xl mb-6 relative overflow-hidden group cursor-pointer">
                        
                        <!-- Gradient Overlay -->
                        <div class="absolute inset-0 z-10 opacity-0"
                            style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                        </div>

                        <!-- Video -->
                        <video 
                            src="a.mp4" 
                            class="w-full h-full object-cover rounded-2xl relative z-0"
                            autoplay 
                            muted 
                            loop>
                        </video>

                    </div>

                    <!-- Content -->
                    <h3 class="font-serif text-2xl font-bold text-[#008543] mb-3">
                        Collaboration Impact
                    </h3>

                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center gap-2">
                            <i data-lucide="check-circle" class="w-5 h-5 text-[#008543] flex-shrink-0"></i>
                            <span>Improved educational access for 500+ students annually</span>
                        </li>

                        <li class="flex items-center gap-2">
                            <i data-lucide="check-circle" class="w-5 h-5 text-[#008543] flex-shrink-0"></i>
                            <span>Better career opportunities through quality education</span>
                        </li>

                        <li class="flex items-center gap-2">
                            <i data-lucide="check-circle" class="w-5 h-5 text-[#008543] flex-shrink-0"></i>
                            <span>Community upliftment through knowledge</span>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
</section>

<div class="double-divider w-full">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>
<!-- =============================================
     PROJECTS SECTION
============================================= -->
<section id="projects" class="py-24 bg-[#FFF5F8]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-up">
            <p class="text-[#008543] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Current Initiatives</p>
            <h2 class="font-serif text-4xl md:text-5xl text-[#008543] font-bold mb-6">Ongoing Projects</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="group fade-up">
                <div class="relative overflow-hidden rounded-2xl mb-4">
                    <img src="https://images.unsplash.com/photo-1503676260728-1c00da094a0b?w=600&q=80"
                         alt="Scholarship"
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#FFF5F8] to-transparent opacity-60"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <p class="gold-gradient-text text-sm font-semibold">Education</p>
                        <h3 class="text-white font-serif text-xl font-bold">Scholarship Expansion</h3>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Target: 1000 students</span>
                        <span class="text-[#008543] font-semibold">65% Complete</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="h-2 rounded-full" style="width:65%; background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);"></div>
                    </div>
                    <p class="text-gray-600 text-sm">Expanding our reach to support 1000 students annually by 2025.</p>
                </div>
            </div>

            <!-- Project 2 -->
            <div class="group fade-up" style="transition-delay: 100ms;">
                <div class="relative overflow-hidden rounded-2xl mb-4">
                    <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=600&q=80"
                         alt="School"
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#FFF5F8] to-transparent opacity-60"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <p class="gold-gradient-text text-sm font-semibold">Infrastructure</p>
                        <h3 class="text-white font-serif text-xl font-bold">School Partnerships</h3>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">10 new schools</span>
                        <span class="text-[#008543] font-semibold">40% Complete</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="h-2 rounded-full" style="width:40%; background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);"></div>
                    </div>
                    <p class="text-gray-600 text-sm">Partnering with educational institutions to improve infrastructure.</p>
                </div>
            </div>

            <!-- Project 3 -->
            <div class="group fade-up" style="transition-delay: 200ms;">
                <div class="relative overflow-hidden rounded-2xl mb-4">
                    <img src="https://images.unsplash.com/photo-1593113598332-cd288d649433?w=600&q=80"
                         alt="Food"
                         class="w-full h-64 object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-[#FFF5F8] to-transparent opacity-60"></div>
                    <div class="absolute bottom-4 left-4 right-4">
                        <p class="gold-gradient-text text-sm font-semibold">Welfare</p>
                        <h3 class="text-white font-serif text-xl font-bold">Food Distribution</h3>
                    </div>
                </div>
                <div class="space-y-3">
                    <div class="flex justify-between text-sm">
                        <span class="text-gray-600">Monthly program</span>
                        <span class="text-[#008543] font-semibold">Active</span>
                    </div>
                    <div class="w-full bg-gray-200 rounded-full h-2">
                        <div class="h-2 rounded-full" style="width:90%; background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);"></div>
                    </div>
                    <p class="text-gray-600 text-sm">Regular food distribution to families in need across Gujarat.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="double-divider w-full">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>

<!-- =============================================
     DONATION SECTION
============================================= -->
<section id="donate" class="py-24 bg-[#FFF5F8] relative overflow-hidden">
    <div class="absolute inset-0 hero-pattern opacity-20"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 fade-up">
            <p class="gold-gradient-text text-sm font-semibold tracking-[0.3em] uppercase mb-4">Give Today</p>
            <h2 class="font-serif text-4xl md:text-6xl text-[#008543] font-bold mb-6">Support the Next Generation</h2>
            <p class="text-[#008543] max-w-2xl mx-auto text-lg">
                Your contribution creates a ripple effect of positive change.
                Choose how you would like to make an impact today.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto">

            <!-- Bank Transfer Card -->
            <div class="fade-up bg-[#A62828] backdrop-blur-sm rounded-3xl p-8 border border-[#C9A84C]/30 hover:border-[#C9A84C] transition-colors group">
                <h3 class="text-white font-serif text-xl font-bold mb-3">💳 Prefer Bank Transfer?</h3>
                <p class="text-white text-sm mb-5">
                    If you prefer not to donate online, transfer directly to our bank account using the details below.
                </p>
                <div class="text-sm space-y-2">
                    <p><span class="gold-gradient-text font-semibold">Bank:</span> <span class="text-white">NatWest Bank</span></p>
                    <p><span class="gold-gradient-text font-semibold">Sort Code:</span> <span class="text-white">60-16-24</span></p>
                    <p><span class="gold-gradient-text font-semibold">Account No:</span> <span class="text-white">30807867</span></p>
                    <p><span class="gold-gradient-text font-semibold">Account Name:</span> <span class="text-white">The Gujarat Muslim Association UK</span></p>
                </div>
            </div>

            <!-- Zakat Card -->
            <div class="fade-up bg-[#A62828] backdrop-blur-sm rounded-3xl p-8 border border-[#C9A84C]/30 hover:border-[#C9A84C] transition-colors group">
                <div class="w-16 h-16 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform"
                     style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                    <i data-lucide="hand-coins" class="w-8 h-8 text-white"></i>
                </div>
                <h3 class="font-serif text-2xl font-bold text-white mb-3">Give Zakat</h3>
                <p class="text-white text-sm mb-4 leading-relaxed italic">
                    "Islam is built upon five pillars...including giving Zakat." — Sahih al-Bukhari
                </p>
                <p class="gold-gradient-text text-sm font-semibold mb-6">
                    Structured Zakat management ensuring 100% compliance with Islamic principles.
                </p>
                <a href="/"
                   class="w-full inline-block text-center btn-premium text-white py-3 rounded-full font-semibold transition-colors"
                   style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                    Coming Soon
                </a>
            </div>
        </div>

        <!-- Trust Badges -->
        <div class="mt-16 flex flex-wrap justify-center gap-8 fade-up">
            @foreach([
                ['icon'=>'shield-check', 'label'=>'SSL Secured'],
                ['icon'=>'lock',         'label'=>'GDPR Compliant'],
                ['icon'=>'award',        'label'=>'Registered Charity'],
                ['icon'=>'receipt',      'label'=>'Tax Exempt'],
            ] as $badge)
            <div class="flex items-center gap-2 text-[#008543]">
                <i data-lucide="{{ $badge['icon'] }}" class="w-5 h-5 text-[#008543]"></i>
                <span class="text-sm">{{ $badge['label'] }}</span>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div class="double-divider w-full">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>

<!-- =============================================
     GALLERY SECTION
============================================= -->

<section class="py-24 bg-[#FFF5F8]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16 fade-up">
            <p class="text-[#008543] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Gallery</p>
            <h2 class="font-serif text-4xl md:text-5xl text-[#008543] font-bold mb-6">Moments of Impact</h2>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach([
                ['var' => $scholarImage,  'label' => 'Scholarship Ceremony'],
                ['var' => $communityImage,'label' => 'Community Support'],
                ['var' => $educationImage,'label' => 'Education Program'],
                ['var' => $foodImage,     'label' => 'Food Distribution'],
            ] as $item)
            <a href="{{ route('gallery.index') }}">
                <div class="relative group overflow-hidden rounded-2xl fade-up aspect-square">
                    @php $img = $item['var']?->images->first(); @endphp
                    <img src="{{ $img ? asset($img->image) : '' }}"
                         alt="{{ $item['label'] }}"
                         class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-[#FFF5F8]/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center">
                        <p class="text-white font-serif text-lg">{{ $item['label'] }}</p>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<div class="double-divider w-full">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>
<!-- =============================================
     TESTIMONIALS SECTION
============================================= -->
<section class="py-24 bg-[#FFF5F8] relative overflow-hidden">
    <div class="absolute inset-0 hero-pattern opacity-20"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-16 fade-up">
            <p class="gold-gradient-text text-sm font-semibold tracking-[0.3em] uppercase mb-4">Testimonials</p>
            <h2 class="font-serif text-4xl md:text-6xl text-[#008543] font-bold mb-6">Voices of Impact</h2>
            <p class="text-[#008543] max-w-2xl mx-auto text-lg">
                Real stories from students and families whose lives have been transformed through your generosity.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach([
                ['initial'=>'R','name'=>'Rahman',  'role'=>'Medical Graduate',   'quote'=>'The scholarship program gave me the opportunity to complete my medical degree. Today, I serve my community as a doctor.'],
                ['initial'=>'A','name'=>'Ahmed',   'role'=>'Engineer',           'quote'=>'Thanks to the support, I was able to continue my engineering studies without financial stress. Forever grateful.'],
                ['initial'=>'S','name'=>'Sana',    'role'=>'Teacher',            'quote'=>'This organization didn\'t just support my education — it changed my entire future and my family\'s life.'],
            ] as $t)
            <div class="fade-up bg-[#FFF5F8] backdrop-blur-lg rounded-3xl p-8 border border-[#C9A84C]/20 hover:border-[#C9A84C] transition-all group">
                <div class="w-12 h-12 rounded-full flex items-center justify-center mb-6"
                     style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                    <i data-lucide="quote" class="w-5 h-5 text-[#fff]"></i>
                </div>
                <p class="text-[#008543] text-sm leading-relaxed mb-6">{{ $t['quote'] }}</p>
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center"
                         style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                        <span class="text-[#008543] font-bold">{{ $t['initial'] }}</span>
                    </div>
                    <div>
                        <h4 class="text-[#008543] font-semibold">{{ $t['name'] }}</h4>
                        <p class="gold-gradient-text text-xs font-semibold">{{ $t['role'] }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-16 fade-up">
            <a href="#donate"
               class="btn-premium text-[#fff] px-8 py-4 rounded-full font-semibold text-lg hover:shadow-2xl transition-all transform hover:-translate-y-1"
               style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                Be Part of These Stories
            </a>
        </div>
    </div>
</section>

<div class="double-divider w-full">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>
<!-- =============================================
     CONTACT SECTION
============================================= -->
<section id="contact" class="py-24 bg-[#FFF5F8]">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">

            <!-- Left info -->
            <div class="fade-up">
                <p class="text-[#008543] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">Get in Touch</p>
                <h2 class="font-serif text-4xl md:text-5xl text-[#008543] font-bold mb-6">Contact Us</h2>

                <ul class="list-disc pl-5 space-y-2 text-gray-600 mb-8">
                    <li>Have any questions about our Charity, our programmes, donations or simply curious?</li>
                    <li>Reach out to us through any of the channels here.</li>
                    <li>But most importantly, please remember us in your duas!</li>
                </ul>

                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#FFF5F8]/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i data-lucide="mail" class="w-5 h-5 text-[#008543]"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#008543]">Email</h4>
                            <p class="text-gray-600">admin@thegmauk.org<br>secretary@thegmauk.org</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#FFF5F8]/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i data-lucide="phone" class="w-5 h-5 text-[#008543]"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#008543]">Phone</h4>
                            <p class="text-gray-600">+44 (0) 7464 597722</p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-12 h-12 bg-[#FFF5F8]/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i data-lucide="map-pin" class="w-5 h-5 text-[#008543]"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-[#008543]">Address</h4>
                            <p class="text-gray-600">General Secretary, The Gujarat Muslim Association UK<br>47 Marlborough Road, Nuneaton. CV11 5PG. UK</p>
                        </div>
                    </div>

                    <div class="flex gap-3 pt-2">
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
            </div>

            <!-- Contact Form -->
            <div class="fade-up bg-white rounded-3xl p-8 shadow-xl border border-gray-100">
                <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-[#008543] font-semibold mb-2">Full Name</label>
                        <input type="text" name="full_name"
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#C9A84C] focus:outline-none transition-colors"
                               placeholder="Your name">
                    </div>
                    <div>
                        <label class="block text-[#008543] font-semibold mb-2">Email Address</label>
                        <input type="email" name="email"
                               class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#C9A84C] focus:outline-none transition-colors"
                               placeholder="your@email.com">
                    </div>
                    <div>
                        <label class="block text-[#008543] font-semibold mb-2">Subject</label>
                        <select name="subject" required
                                class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#C9A84C] focus:outline-none transition-colors">
                            <option value="General Inquiry">General Inquiry</option>
                            <option value="Donation Query">Donation Query</option>
                            <option value="Volunteer">Volunteer</option>
                            <option value="Partnership">Partnership</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-[#008543] font-semibold mb-2">Message</label>
                        <textarea name="message" rows="4"
                                  class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-[#C9A84C] focus:outline-none transition-colors"
                                  placeholder="Your message..."></textarea>
                    </div>
                    <button type="submit"
                            class="w-full btn-premium bg-[#c] text-white py-4 rounded-full font-semibold hover:opacity-90 transition-all">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<div class="double-divider w-full">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>
<!-- SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if(session('success'))
<script>
    Swal.fire({
        title: 'Success!',
        text: '{{ session('success') }}',
        icon: 'success',
        confirmButtonColor: '#C9A84C',
        background: '#FFF5F8',
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
        confirmButtonColor: '#C9A84C',
        background: '#FFF5F8',
        color: '#fff'
    });
</script>
@endif

@endsection