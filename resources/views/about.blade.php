<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

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

    <main class="max-w-4xl mx-auto px-6 py-16">
        <div class="bg-white rounded-2xl shadow-lg p-10">

            <p class="text-emerald-600 font-semibold mb-2">
                Tentang Project
            </p>

            <h2 class="text-4xl font-bold mb-6">
                Tugas Rutin 9 - Laravel Setup
            </h2>

            <p class="text-slate-600 leading-8">
                Project ini dibuat untuk memenuhi Tugas Rutin 9 mata kuliah
                Pemrograman Web. Project menggunakan Laravel dengan penerapan
                routing, controller, Blade view, model, migration, serta
                koneksi database MySQL.
            </p>

            <div class="mt-8">
                <a
                    href="{{ route('home') }}"
                    class="inline-block bg-emerald-700 text-white px-6 py-3 rounded-lg hover:bg-emerald-800"
                >
                    Kembali ke Home
                </a>
            </div>

        </div>
    </main>

</body>
</html>