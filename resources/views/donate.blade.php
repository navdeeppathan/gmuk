@extends('layouts.app')

@section('content')

<section class="min-h-screen bg-[#0F2E26] py-20 relative overflow-hidden">

    <!-- Background -->
    <div class="absolute inset-0 opacity-20">
        <div class="w-full h-full bg-[url('https://images.unsplash.com/photo-1497486751825-1233686d5d80')] bg-cover bg-center"></div>
    </div>

    <div class="max-w-5xl mx-auto px-4 relative z-10">

        <!-- Heading -->
        <div class="text-center mb-12">
            <p class="text-[#D4AF37] tracking-[0.3em] uppercase text-sm">Donate</p>
            <h1 class="text-white font-serif text-4xl md:text-5xl font-bold mt-4">
                Make a Contribution
            </h1>
            <p class="text-gray-300 mt-4 max-w-xl mx-auto">
                Your donation helps transform lives through education and community support.
            </p>
        </div>

        <!-- Card -->
        <div class="bg-white/5 backdrop-blur-md border border-white/10 rounded-3xl p-8 shadow-2xl">

            <form action="/donate" method="POST" class="space-y-6">
                @csrf

                <!-- Donation Type -->
                <div>
                    <label class="text-white block mb-2">Donation Type</label>
                    <select name="type" class="w-full px-4 py-3 rounded-xl bg-white/10 text-white border border-white/20 focus:border-[#D4AF37] focus:outline-none">
                        <option value="zakat" class="bg-gray-800 text-white">Zakat</option>
                        <option value="sadaqah" class="bg-gray-800 text-white">Sadaqah</option>
                        <option value="monthly" class="bg-gray-800 text-white">Monthly</option>
                    </select>
                </div>

                <!-- Amount -->
                <div>
                    <label class="text-white block mb-2">Amount (£)</label>
                    <input type="number" name="amount" required
                        class="w-full px-4 py-3 rounded-xl bg-white/10 text-white border border-white/20 focus:border-[#D4AF37] focus:outline-none"
                        placeholder="Enter amount">
                </div>

                <!-- Quick Amount Buttons -->
                <div class="flex gap-3 flex-wrap">
                    <button type="button" onclick="setAmount(25)" class="px-4 py-2 bg-[#D4AF37] text-[#1B4D3E] rounded-full">£25</button>
                    <button type="button" onclick="setAmount(50)" class="px-4 py-2 bg-[#D4AF37] text-[#1B4D3E] rounded-full">£50</button>
                    <button type="button" onclick="setAmount(100)" class="px-4 py-2 bg-[#D4AF37] text-[#1B4D3E] rounded-full">£100</button>
                </div>

                <!-- Message -->
                <div>
                    <label class="text-white block mb-2">Message (Optional)</label>
                    <textarea name="message" rows="3"
                        class="w-full px-4 py-3 rounded-xl bg-white/10 text-white border border-white/20 focus:border-[#D4AF37] focus:outline-none"
                        placeholder="Any message..."></textarea>
                </div>

                <!-- Submit -->
                <button type="submit"
                    class="w-full bg-[#D4AF37] text-[#1B4D3E] py-4 rounded-full font-semibold hover:bg-[#F4E8C1] transition-all">
                    Proceed to Donate
                </button>
                
            </form>

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
        background: '#1B4D3E',
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
        background: '#1B4D3E',
        color: '#fff'
    });
</script>
@endif

<script>
function setAmount(value) {
    document.querySelector('input[name="amount"]').value = value;
}
</script>

@endsection