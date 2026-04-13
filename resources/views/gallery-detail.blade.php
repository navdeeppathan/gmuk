@extends('layouts.app')

@section('content')

<section class="py-24 bg-[#FDF8F3] min-h-screen">

    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">

        <!-- Back Button -->
        <div class="mb-10">
            <a href="{{ route('gallery.index') }}" class="text-[#008e4d] font-semibold hover:text-[#D4AF37] transition">
                ← Back to Gallery
            </a>
        </div>

        <!-- Main Image -->
        {{-- <div class="rounded-3xl overflow-hidden shadow-2xl mb-10">
            <img src="{{ asset($gallery->image) }}" 
                 class="w-full h-[500px] object-cover">
        </div> --}}

        <div class="mb-16">
            
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                @forelse($gallery->images ?? [] as $img)
                    <div class="group relative overflow-hidden rounded-2xl shadow-lg">
                        <img src="{{ asset($img->image) }}"
                            class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">
                    </div>
                @empty
                    <p class="text-center col-span-full">No images found</p>
                @endforelse

            </div>
        </div>


        <!-- Content -->
        <div class="text-center mb-16">
            <p class="text-[#D4AF37] uppercase text-sm tracking-[0.3em] mb-3">
                {{ ucfirst($gallery->category) }}
            </p>

            <h1 class="font-serif text-4xl md:text-5xl text-[#008e4d] font-bold mb-6">
                {{ $gallery->title }}
            </h1>

            <p class="text-gray-600 max-w-2xl mx-auto leading-relaxed">
                {{ $gallery->description ?? 'No description available.' }}
            </p>
        </div>

        <!-- Divider -->
        <div class="h-[1px] bg-[#D4AF37]/30 my-16"></div>

        <!-- Related Images -->
        <div>
            <h3 class="font-serif text-3xl text-[#008e4d] font-bold mb-10 text-center">
                More from {{ ucfirst($gallery->category) }}
            </h3>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-6">

                @foreach($related as $item)
                    <a href="{{ route('gallery.detail', $item->id) }}" 
                       class="group relative overflow-hidden rounded-2xl">

                        <img src="{{ asset($item->image) }}" 
                             class="w-full h-56 object-cover transform group-hover:scale-110 transition duration-500">

                        <div class="absolute inset-0 bg-[#008e4d]/60 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">
                            <p class="text-white text-sm">View</p>
                        </div>

                    </a>
                @endforeach

            </div>
        </div>

    </div>
</section>

@endsection