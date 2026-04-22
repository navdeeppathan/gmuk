@extends('layouts.app')

@section('content')

<section class="py-24 bg-[#FDF8F3] min-h-screen">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Back Button — GREEN -->
        <div class="mb-10">
            <a href="{{ route('gallery.index') }}" 
               class="inline-flex items-center gap-2 text-[#008543] font-semibold hover:text-[#A62828] transition">
                <span class="text-xl">←</span> Back to Gallery
            </a>
        </div>

        <!-- Image Gallery -->
        <div class="mb-16">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse($gallery->images ?? [] as $img)
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg border-2 border-transparent hover:border-[#C9A84C] transition-all">
                        <img src="{{ asset($img->image) }}"
                             class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">
                    </div>
                @empty
                    <p class="text-center col-span-full text-gray-600">No images found</p>
                @endforelse
            </div>
        </div>

        <!-- Content — GREEN heading + GOLD label + BLACK body -->
        <div class="text-center mb-16">
            <p class="gold-gradient-text uppercase text-sm tracking-[0.3em] mb-3 font-bold">
                {{ ucfirst($gallery->category) }}
            </p>

            <h1 class="font-serif text-4xl md:text-5xl font-bold mb-6">
                <span class="text-[#008543]">{{ $gallery->title }}</span>
            </h1>

            <p class="text-gray-800 max-w-2xl mx-auto leading-relaxed text-lg">
                {{ $gallery->description ?? 'No description available.' }}
            </p>
        </div>

        <!-- Double Line Divider — MAROON top, GREEN bottom -->
        <div class="my-16">
            <div class="h-[2px] bg-[#A62828]"></div>
            <div class="h-[2px] bg-[#008543] mt-[2px]"></div>
        </div>

        <!-- Related Images — MAROON heading -->
        <div>
            <h3 class="font-serif text-3xl font-bold mb-10 text-center">
                <span class="text-[#A62828]">More from</span>
                <span class="gold-gradient-text">{{ ucfirst($gallery->category) }}</span>
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                @foreach($related as $item)
                    <a href="{{ route('gallery.detail', $item->id) }}"
                       class="group relative overflow-hidden rounded-2xl shadow-lg border-2 border-transparent hover:border-[#A62828] transition-all">

                        @php $firstImg = $item->images->first(); @endphp
                        <img src="{{ $firstImg ? asset($firstImg->image) : asset($item->image) }}"
                             class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

                        <div class="absolute inset-0 bg-[#A62828]/70 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <p class="text-white font-serif text-lg">View</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

    </div>
</section>

@endsection