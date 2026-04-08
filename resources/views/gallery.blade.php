@extends('layouts.app')

@section('content')

<section class="py-24 bg-[#FDF8F3]">

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Heading -->
        <div class="text-center mt-10 mb-20 fade-up">
            <p class="text-[#1B4D3E] text-sm tracking-[0.3em] uppercase mb-4 font-semibold">
                Gallery
            </p>
            <h2 class="font-serif text-4xl md:text-6xl text-[#0F2E26] font-bold">
                Moments of Impact
            </h2>
        </div>

        {{-- ================= SCHOLARSHIP ================= --}}
        <div class="mb-20 fade-up">
            <h3 class="font-serif text-3xl text-[#0F2E26] font-bold mb-8 flex items-center gap-3">
                🎓 Scholarship Programs
                <span class="h-[2px] flex-1 bg-[#D4AF37]/40"></span>
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($scholarships as $item)
                    {{-- <div class="group relative overflow-hidden rounded-2xl shadow-lg"> --}}
                        {{-- <img src="{{ asset($item->image) }}" 
                             class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500"> --}}
                        {{-- <a href="{{ route('gallery.detail', $item->id) }}">
                            <img src="{{ asset($item->image) }} " alt="Scholarship" class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                        </a> --}}
                        @foreach($item->images ?? [] as $img)
                            <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                                <a href="{{ route('gallery.detail', $item->id) }}">
                                    <img src="{{ asset($img->image) }}"
                                        class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                                </a>
                            </div>
                        @endforeach
                        {{-- <div class="absolute inset-0 bg-[#0F2E26]/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <p class="text-white font-serif text-lg">Scholarship</p>
                        </div> --}}
                        <!-- FIX HERE -->
                        {{-- <div class="absolute inset-0 bg-[#0F2E26]/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center pointer-events-none">
                            <p class="text-white font-serif text-lg">Scholarship</p>
                        </div> --}}
                    {{-- </div> --}}
                @endforeach
            </div>
        </div>

        {{-- ================= COMMUNITY ================= --}}
        <div class="mb-20 fade-up">
            <h3 class="font-serif text-3xl text-[#0F2E26] font-bold mb-8 flex items-center gap-3">
                🤝 Community Support
                <span class="h-[2px] flex-1 bg-[#D4AF37]/40"></span>
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($communities as $item)
                    {{-- <div class="group relative overflow-hidden rounded-2xl shadow-lg"> --}}
                        {{-- <a href="{{ route('gallery.detail', $item->id) }}">
                            <img src="{{ asset($item->image) }}" 
                                class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                        </a> --}}
                        @foreach($item->images ?? [] as $img)
                            <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                                <a href="{{ route('gallery.detail', $item->id) }}">
                                    <img src="{{ asset($img->image) }}"
                                        class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                                </a>
                            </div>
                        @endforeach
                        {{-- <div class="absolute inset-0 bg-[#0F2E26]/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <p class="text-white font-serif text-lg">Community</p>
                        </div> --}}
                    {{-- </div> --}}
                @endforeach
            </div>
        </div>

        {{-- ================= EDUCATION ================= --}}
        <div class="mb-20 fade-up">
            <h3 class="font-serif text-3xl text-[#0F2E26] font-bold mb-8 flex items-center gap-3">
                📚 Education Programs
                <span class="h-[2px] flex-1 bg-[#D4AF37]/40"></span>
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($educations as $item)
                    {{-- <div class="group relative overflow-hidden rounded-2xl shadow-lg"> --}}
                        {{-- <a href="{{ route('gallery.detail', $item->id) }}">
                            <img src="{{ asset($item->image) }}" 
                                class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                        </a> --}}

                        @foreach($item->images ?? [] as $img)
                            <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                                <a href="{{ route('gallery.detail', $item->id) }}">
                                    <img src="{{ asset($img->image) }}"
                                        class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                                </a>
                            </div>
                        @endforeach

                        {{-- <div class="absolute inset-0 bg-[#0F2E26]/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <p class="text-white font-serif text-lg">Education</p>
                        </div> --}}
                    {{-- </div> --}}
                @endforeach
            </div>
        </div>

        {{-- ================= FOOD ================= --}}
        <div class="fade-up">
            <h3 class="font-serif text-3xl text-[#0F2E26] font-bold mb-8 flex items-center gap-3">
                🍛 Food Distribution
                <span class="h-[2px] flex-1 bg-[#D4AF37]/40"></span>
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($foods as $item)
                    {{-- <div class="group relative overflow-hidden rounded-2xl shadow-lg"> --}}
                        {{-- <img src="{{ asset($item->image) }}" 
                             class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">

                        <div class="absolute inset-0 bg-[#0F2E26]/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <p class="text-white font-serif text-lg">Food Distribution</p>
                        </div> --}}
                        @foreach($item->images ?? [] as $img)
                            <div class="flex relative overflow-hidden rounded-2xl shadow-lg">
                                <a href="{{ route('gallery.detail', $item->id) }}">
                                    <img src="{{ asset($img->image) }}"
                                        class="w-full h-64 object-cover transform group-hover:scale-110 transition duration-500">
                                </a>
                            </div>
                        @endforeach
                    {{-- </div> --}}
                @endforeach
            </div>
        </div>

    </div>
</section>

@endsection