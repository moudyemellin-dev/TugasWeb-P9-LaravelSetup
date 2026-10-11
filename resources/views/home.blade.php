<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $judul }}</title>

    <!-- Bonus: Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 text-slate-800">

    <nav class="bg-emerald-700 text-white shadow">
        <div class="max-w-6xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="font-bold text-xl">Laravel Setup</h1>

            <div class="flex gap-6">
                <a href="{{ route('home') }}" class="hover:text-emerald-200">Home</a>
                <a href="{{ route('about') }}" class="hover:text-emerald-200">About</a>
                <a href="{{ route('contact') }}" class="hover:text-emerald-200">Contact</a>
            </div>
        </div>
    </nav>

    <main class="max-w-6xl mx-auto px-6 py-16">

        <div class="bg-white rounded-2xl shadow-lg p-10">
            <p class="text-emerald-600 font-semibold mb-2">
                Pemrograman Web
            </p>

            <h2 class="text-4xl font-bold mb-4">
                {{ $judul }}
            </h2>

            <p class="text-lg text-slate-600 mb-8">
                Selamat datang, <strong>{{ $nama }}</strong>.
                Halaman ini dibuat menggunakan Laravel dan Blade.
            </p>

            <h3 class="font-bold text-xl mb-4">
                Fitur yang digunakan:
            </h3>

            <div class="grid md:grid-cols-2 gap-4">
                @foreach ($fitur as $item)
                    <div class="bg-emerald-50 border border-emerald-200 rounded-xl p-4">
                        ✅ {{ $item }}
                    </div>
                @endforeach
            </div>

            <div class="mt-8">
                <a
                    href="{{ route('hello', ['nama' => 'Moudy']) }}"
                    class="inline-block bg-emerald-700 text-white px-6 py-3 rounded-lg hover:bg-emerald-800"
                >
                    Coba Route /hello/Moudy
                </a>
            </div>
        </div>

    </main>

</body>
</html>