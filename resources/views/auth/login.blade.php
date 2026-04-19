<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login | Gujrat Muslim Association UK</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    :root {
        --gold: #D4AF37;
        --green: #008543;
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
    <div class="w-full h-full bg-[url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1')] bg-cover bg-center"></div>
</div>

<!-- Login Card -->
<div class="relative z-10 w-full max-w-md">

    <!-- Logo -->
    <div class="text-center mb-8">
        <div class="w-16 h-16 bg-[#D4AF37] rounded-full flex items-center justify-center mx-auto mb-4">
            <span class="text-[#008543] font-bold text-2xl font-serif">G</span>
        </div>
        <h1 class="text-white font-serif text-3xl font-bold">Welcome Back</h1>
        <p class="text-gray-300 text-sm mt-2">Login to continue your impact</p>
    </div>

    <!-- Card -->
    <div class="glass rounded-3xl p-8 shadow-2xl">

        <form action="/login" method="POST" class="space-y-6">
            <!-- Laravel CSRF -->
            @csrf

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

            <!-- Password -->
            <div>
                <label class="text-white text-sm mb-2 block">Password</label>
                <input 
                    type="password" 
                    name="password"
                    required
                    class="w-full px-4 py-3 rounded-xl bg-white/10 text-white border border-white/20 focus:border-[#D4AF37] focus:outline-none"
                    placeholder="••••••••"
                >
            </div>

            <!-- Remember + Forgot -->
            <div class="flex items-center justify-between text-sm">
                <label class="flex items-center gap-2 text-gray-300">
                    <input type="checkbox" class="accent-[#D4AF37]">
                    Remember me
                </label>
                <a href="#" class="text-[#D4AF37] hover:underline">Forgot Password?</a>
            </div>

            <!-- Login Button -->
            <button 
                type="submit"
                class="w-full bg-[#D4AF37] text-[#008543] py-3 rounded-full font-semibold hover:bg-[#F4E8C1] transition-all"
            >
                Login
            </button>
        </form>

        <!-- Divider -->
        <div class="my-6 flex items-center gap-4">
            <div class="flex-1 h-px bg-white/20"></div>
            <span class="text-gray-400 text-sm">OR</span>
            <div class="flex-1 h-px bg-white/20"></div>
        </div>

        <!-- Register -->
        <p class="text-center text-gray-300 text-sm">
            Don't have an account?
            <a href="/register" class="text-[#D4AF37] font-semibold hover:underline">
                Sign Up
            </a>
        </p>
    </div>

    <!-- Back to Home -->
    <div class="text-center mt-6">
        <a href="/" class="text-gray-400 hover:text-[#D4AF37] text-sm">
            ← Back to Home
        </a>
    </div>

</div>

</body>
</html>