<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Login | GMUK</title>

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Inter', sans-serif;
        background: #0F2E26;
    }

    .font-serif {
        font-family: 'Cormorant Garamond', serif;
    }

    .glass {
        background: rgba(255,255,255,0.05);
        backdrop-filter: blur(15px);
        border: 1px solid rgba(255,255,255,0.1);
    }
</style>
</head>

<body class="min-h-screen flex items-center justify-center px-4">

<div class="relative w-full max-w-md">

    <!-- Title -->
    <div class="text-center mb-8">
        <h1 class="text-white font-serif text-3xl font-bold">Admin Panel</h1>
        <p class="text-gray-300 text-sm mt-2">Authorized access only</p>
    </div>

    <!-- Card -->
    <div class="glass rounded-3xl p-8 shadow-2xl">

        <form action="/admin/login" method="POST" class="space-y-6">
            @csrf

            <!-- Email -->
            <div>
                <label class="text-white text-sm mb-2 block">Email</label>
                <input type="email" name="email" required
                    class="w-full px-4 py-3 rounded-xl bg-white/10 text-white border border-white/20 focus:border-[#D4AF37] focus:outline-none">
            </div>

            <!-- Password -->
            <div>
                <label class="text-white text-sm mb-2 block">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-3 rounded-xl bg-white/10 text-white border border-white/20 focus:border-[#D4AF37] focus:outline-none">
            </div>

            <!-- Button -->
            <button type="submit"
                class="w-full bg-[#D4AF37] text-[#008543] py-3 rounded-full font-semibold hover:bg-[#F4E8C1] transition">
                Login as Admin
            </button>

        </form>

    </div>

</div>

</body>
</html>