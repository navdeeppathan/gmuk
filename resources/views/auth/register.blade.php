<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Register | Gujrat Muslim Association UK</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    :root {
        --gold: #D4AF37;
        --green: #1B4D3E;
        --dark: #0F2E26;
        --cream: #FDF8F3;
    }

    body {
        font-family: 'Inter', sans-serif;
        background: var(--dark);
    }

    .font-serif {
        font-family: 'Cormorant Garamond', serif;
    }

    .glass {
        background: rgba(255,255,255,0.05);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255,255,255,0.1);
    }

    .gold-gradient {
        background: linear-gradient(135deg, #D4AF37, #F4E8C1, #D4AF37);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>
</head>

<body class="min-h-screen flex items-center justify-center px-4">

<!-- Background -->
<div class="absolute inset-0 opacity-20">
    <div class="w-full h-full bg-[url('https://images.unsplash.com/photo-1503676260728-1c00da094a0b')] bg-cover bg-center"></div>
</div>

<!-- Register Card -->
<div class="relative z-10 w-full max-w-md">

    <!-- Logo -->
    <div class="text-center mb-8">
        <div class="w-16 h-16 bg-[#D4AF37] rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-[#1B4D3E] font-bold text-2xl font-serif">G</span>
        </div>
        <h1 class="text-white font-serif text-3xl font-bold">Create Account</h1>
        <p class="text-gray-300 text-sm mt-2">Join us and start making impact</p>
    </div>

    <!-- Card -->
    <div class="glass rounded-3xl p-8 shadow-2xl">

        <form action="/register" method="POST" class="space-y-5">
            @csrf

            <!-- Name -->
            <div>
                <label class="text-white text-sm mb-2 block">Full Name</label>
                <input 
                    type="text" 
                    name="name"
                    required
                    class="w-full px-4 py-3 rounded-xl bg-white/10 text-white border border-white/20 focus:border-[#D4AF37] focus:outline-none"
                    placeholder="Your full name"
                >
            </div>

            <!-- Email -->
            <div>
                <label class="text-white text-sm mb-2 block">Email Address</label>
                <input 
                    type="email" 
                    name="email"
                    required
                    class="w-full px-4 py-3 rounded-xl bg-white/10 text-white border border-white/20 focus:border-[#D4AF37] focus:outline-none"
                    placeholder="your@email.com"
                >
            </div>

            <div>
                <label class="text-white text-sm mb-2 block">Phone</label>
                <input 
                    type="text" 
                    name="phone"
                    class="w-full px-4 py-3 rounded-xl bg-white/10 text-white border border-white/20 focus:border-[#D4AF37] focus:outline-none"
                    placeholder="Your phone number"
                >
            </div>

            <!-- Password -->
            <div>
                <label class="text-white text-sm mb-2 block">Password</label>
                <input 
                    type="password" 
                    name="password"
                    required
                    class="w-full px-4 py-3 rounded-xl bg-white/10 text-white border border-white/20 focus:border-[#D4AF37] focus:outline-none"
                    placeholder="Create password"
                >
            </div>

            <!-- Confirm Password -->
            <div>
                <label class="text-white text-sm mb-2 block">Confirm Password</label>
                <input 
                    type="password" 
                    name="password_confirmation"
                    required
                    class="w-full px-4 py-3 rounded-xl bg-white/10 text-white border border-white/20 focus:border-[#D4AF37] focus:outline-none"
                    placeholder="Confirm password"
                >
            </div>

            <!-- Terms -->
            <div class="flex items-start gap-2 text-sm text-gray-300">
                <input type="checkbox" required class="accent-[#D4AF37] mt-1">
                <span>
                    I agree to the 
                    <a href="#" class="text-[#D4AF37] hover:underline">Terms</a> 
                    and 
                    <a href="#" class="text-[#D4AF37] hover:underline">Privacy Policy</a>
                </span>
            </div>

            <!-- Register Button -->
            <button 
                type="submit"
                class="w-full bg-[#D4AF37] text-[#1B4D3E] py-3 rounded-full font-semibold hover:bg-[#F4E8C1] transition-all"
            >
                Create Account
            </button>
        </form>

        <!-- Divider -->
        <div class="my-6 flex items-center gap-4">
            <div class="flex-1 h-px bg-white/20"></div>
            <span class="text-gray-400 text-sm">OR</span>
            <div class="flex-1 h-px bg-white/20"></div>
        </div>

        <!-- Login Link -->
        <p class="text-center text-gray-300 text-sm">
            Already have an account?
            <a href="/login" class="text-[#D4AF37] font-semibold hover:underline">
                Login
            </a>
        </p>
    </div>

    <!-- Back -->
    <div class="text-center mt-6">
        <a href="/" class="text-gray-400 hover:text-[#D4AF37] text-sm">
            ← Back to Home
        </a>
    </div>

</div>

</body>
</html>