@extends('layouts.app')

@section('content')

<style>
    /* REPLACE in your <style> block */
        .section-divider {
            height: 4px;
            background: linear-gradient(to right, #A62828 50%, #008543 50%);  /* maroon left, green right */
            margin: 0;
        }

        /* Double line divider — maroon top, green bottom */
        .double-divider {
            width: 100%;
        }
        .double-divider .bar-maroon {
            height: 2px;
            background: #A62828;
        }
        .double-divider .bar-green {
            height: 2px;
            background: #008543;
            margin-top: 2px;
        }
</style>

<div class="double-divider w-full fixed top-20 left-0 z-40">
    <div class="bar-maroon"></div>
    <div class="bar-green"></div>
</div>
<section class="py-24 bg-[#FDF8F3]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading — GREEN + MAROON mix -->
        <div class="text-center mt-10 mb-20 fade-up">
            <p class="text-[#A62828] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">
                Gallery
            </p>
            <h2 class="font-serif text-4xl md:text-6xl font-bold">
                <span class="text-[#008543]">Moments of</span>
                <span class="text-[#A62828]">Impact</span>
            </h2>
            <p class="text-gray-700 mt-4 max-w-2xl mx-auto">
                A visual journey through our community programs, educational initiatives, and charitable work.
            </p>
        </div>

        {{-- ================= SCHOLARSHIP — GREEN accent ================= --}}
        <div class="mb-20 fade-up">
            <h3 class="font-serif text-3xl font-bold mb-8 flex items-center gap-3 text-[#008543]">
                🎓 Scholarship Programs
                <span class="h-[2px] flex-1 bg-[#008543]/40"></span>
                <span class="text-sm font-semibold gold-gradient-text">Education</span>
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($scholarships as $item)
                    @foreach($item->images ?? [] as $img)
                        <div class="group relative overflow-hidden rounded-2xl shadow-lg border-2 border-transparent hover:border-[#008543] transition-all">
                            <a href="{{ route('gallery.detail', $item->id) }}">
                                <img src="{{ asset($img->image) }}"
                                     class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-[#008543]/80 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                    <p class="text-white font-serif text-lg">View Details</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

        <div class="double-divider w-full fixed top-20 left-0 z-40">
            <div class="bar-maroon"></div>
            <div class="bar-green"></div>
        </div>
        {{-- ================= COMMUNITY — MAROON accent ================= --}}
        <div class="mb-20 fade-up">
            <h3 class="font-serif text-3xl font-bold mb-8 flex items-center gap-3 text-[#A62828]">
                🤝 Community Support
                <span class="h-[2px] flex-1 bg-[#A62828]/40"></span>
                <span class="text-sm font-semibold gold-gradient-text">Welfare</span>
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($communities as $item)
                    @foreach($item->images ?? [] as $img)
                        <div class="group relative overflow-hidden rounded-2xl shadow-lg border-2 border-transparent hover:border-[#A62828] transition-all">
                            <a href="{{ route('gallery.detail', $item->id) }}">
                                <img src="{{ asset($img->image) }}"
                                     class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-[#A62828]/80 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                    <p class="text-white font-serif text-lg">View Details</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

        <div class="double-divider w-full fixed top-20 left-0 z-40">
            <div class="bar-maroon"></div>
            <div class="bar-green"></div>
        </div>

        {{-- ================= EDUCATION — GOLD accent ================= --}}
        <div class="mb-20 fade-up">
            <h3 class="font-serif text-3xl font-bold mb-8 flex items-center gap-3 gold-gradient-text">
                📚 Education Programs
                <span class="h-[2px] flex-1" style="background: linear-gradient(90deg, #C9A84C40, #8B691440);"></span>
                <span class="text-sm font-semibold text-[#008543]">Knowledge</span>
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($educations as $item)
                    @foreach($item->images ?? [] as $img)
                        <div class="group relative overflow-hidden rounded-2xl shadow-lg border-2 border-transparent hover:border-[#C9A84C] transition-all">
                            <a href="{{ route('gallery.detail', $item->id) }}">
                                <img src="{{ asset($img->image) }}"
                                     class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 opacity-0 group-hover:opacity-100 transition flex items-center justify-center"
                                     style="background: linear-gradient(358deg, #F4E8C1DD, #C9A84CDD, #8B6914DD);">
                                    <p class="text-[#008543] font-serif text-lg font-bold">View Details</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

        <div class="double-divider w-full fixed top-20 left-0 z-40">
            <div class="bar-maroon"></div>
            <div class="bar-green"></div>
        </div>
        {{-- ================= FOOD — BLACK/GRAY accent ================= --}}
        <div class="fade-up">
            <h3 class="font-serif text-3xl font-bold mb-8 flex items-center gap-3 text-gray-900">
                🍛 Food Distribution
                <span class="h-[2px] flex-1 bg-gray-900/40"></span>
                <span class="text-sm font-semibold text-[#A62828]">Charity</span>
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($foods as $item)
                    @foreach($item->images ?? [] as $img)
                        <div class="group relative overflow-hidden rounded-2xl shadow-lg border-2 border-transparent hover:border-gray-900 transition-all">
                            <a href="{{ route('gallery.detail', $item->id) }}">
                                <img src="{{ asset($img->image) }}"
                                     class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                                <div class="absolute inset-0 bg-black/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                                    <p class="text-white font-serif text-lg">View Details</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

        <div class="double-divider w-full fixed top-20 left-0 z-40">
            <div class="bar-maroon"></div>
            <div class="bar-green"></div>
        </div>

    </div>
</section>

@endsection