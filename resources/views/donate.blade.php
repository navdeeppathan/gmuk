@extends('layouts.app')

@section('content')

<section class="min-h-screen bg-[#008543] py-20 relative overflow-hidden">

    <!-- Background pattern -->
    <div class="absolute inset-0 opacity-15">
        <div class="w-full h-full bg-[url('https://images.unsplash.com/photo-1497486751825-1233686d5d80')] bg-cover bg-center"></div>
    </div>

    <!-- Maroon glow accent -->
    <div class="absolute top-0 right-0 w-96 h-96 bg-[#A62828]/20 rounded-full blur-3xl"></div>
    <!-- Gold glow accent -->
    <div class="absolute bottom-0 left-0 w-96 h-96 bg-[#C9A84C]/15 rounded-full blur-3xl"></div>

    <div class="max-w-5xl mx-auto px-4 relative z-10">

        <!-- Heading — GOLD eyebrow, WHITE title -->
        <div class="text-center mb-12">
            <p class="gold-gradient-text tracking-[0.3em] uppercase text-sm font-bold">Donate</p>
            <h1 class="text-white font-serif text-4xl md:text-5xl font-bold mt-4">
                Make a Contribution
            </h1>

            <!-- Double divider under heading — MAROON + GOLD -->
            <div class="max-w-xs mx-auto mt-6 mb-6">
                <div class="h-[2px] bg-[#A62828]"></div>
                <div class="h-[2px] mt-[2px]" style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);"></div>
            </div>

            <p class="text-white/90 mt-4 max-w-xl mx-auto">
                Your donation helps transform lives through education and community support.
            </p>
        </div>

        <!-- Coming Soon Card -->
        <div class="bg-white rounded-3xl p-10 shadow-2xl border-4 border-[#C9A84C] relative overflow-hidden">

            <!-- Top accent line — GOLD gradient -->
            <div class="absolute top-0 left-0 right-0 h-1" 
                 style="background: linear-gradient(90deg, #008543, #C9A84C, #A62828);"></div>

            <!-- Coming Soon content -->
            <div class="text-center py-12">

                <!-- Icon circle — gold gradient -->
                <div class="w-24 h-24 mx-auto mb-8 rounded-full flex items-center justify-center shadow-xl"
                     style="background: linear-gradient(358deg, #F4E8C1, #C9A84C, #8B6914);">
                    <i data-lucide="hand-coins" class="w-12 h-12 text-[#008543]"></i>
                </div>

                <h2 class="font-serif text-4xl md:text-5xl font-bold mb-4">
                    <span class="text-[#008543]">Coming</span>
                    <span class="text-[#A62828]">Soon</span>
                </h2>

                <p class="text-gray-800 text-lg max-w-md mx-auto mb-8">
                    Our secure online donation system is under development. Meanwhile, you can donate via bank transfer.
                </p>

                <!-- Bank Transfer Info — GREEN panel -->
                <div class="max-w-md mx-auto bg-[#008543]/5 border-2 border-[#008543] rounded-2xl p-6 text-left">
                    <h3 class="text-[#008543] font-bold text-lg mb-4 flex items-center gap-2">
                        <i data-lucide="landmark" class="w-5 h-5"></i>
                        Bank Transfer Details
                    </h3>
                    <div class="space-y-3 text-sm">
                        <div class="flex justify-between border-b border-[#008543]/20 pb-2">
                            <span class="text-gray-600 font-semibold">Bank:</span>
                            <span class="text-gray-900 font-bold">NatWest Bank</span>
                        </div>
                        <div class="flex justify-between border-b border-[#008543]/20 pb-2">
                            <span class="text-gray-600 font-semibold">Sort Code:</span>
                            <span class="text-gray-900 font-bold">60-16-24</span>
                        </div>
                        <div class="flex justify-between border-b border-[#008543]/20 pb-2">
                            <span class="text-gray-600 font-semibold">Account No:</span>
                            <span class="text-gray-900 font-bold">30807867</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-600 font-semibold">Account Name:</span>
                            <span class="text-gray-900 font-bold text-right">The Gujarat Muslim Association UK</span>
                        </div>
                    </div>
                </div>

                <!-- Contact CTA -->
                <div class="mt-8 flex flex-wrap gap-3 justify-center">
                    <a href="/#contact" 
                       class="btn-premium text-white px-6 py-3 rounded-full font-semibold transition-all"
                       style="background: #008543;">
                        Contact Us
                    </a>
                    <a href="https://wa.me/447464597722" target="_blank"
                       class="btn-premium text-white px-6 py-3 rounded-full font-semibold transition-all"
                       style="background: #A62828;">
                        <i class="fab fa-whatsapp mr-1"></i> WhatsApp
                    </a>
                </div>
            </div>

            <!-- Bottom accent line -->
            <div class="absolute bottom-0 left-0 right-0 h-1"
                 style="background: linear-gradient(90deg, #A62828, #C9A84C, #008543);"></div>
        </div>

        <!-- Trust badges — MAROON, GOLD, GREEN mix -->
        <div class="mt-12 flex flex-wrap justify-center gap-6 text-white/90">
            <div class="flex items-center gap-2">
                <i data-lucide="shield-check" class="w-5 h-5 text-[#C9A84C]"></i>
                <span class="text-sm">SSL Secured</span>
            </div>
            <div class="flex items-center gap-2">
                <i data-lucide="lock" class="w-5 h-5 text-[#C9A84C]"></i>
                <span class="text-sm">GDPR Compliant</span>
            </div>
            <div class="flex items-center gap-2">
                <i data-lucide="award" class="w-5 h-5 text-[#C9A84C]"></i>
                <span class="text-sm">Registered Charity</span>
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
        confirmButtonColor: '#C9A84C',
        background: '#008543',
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
        confirmButtonColor: '#A62828',
        background: '#008543',
        color: '#fff'
    });
</script>
@endif

<script>
    // Re-render lucide icons
    if (window.lucide) window.lucide.createIcons();
</script>

@endsection