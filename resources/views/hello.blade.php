<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello {{ $nama }}</title>

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-slate-100 text-slate-800">

    <main class="min-h-screen flex items-center justify-center px-6">
        <div class="bg-white rounded-2xl shadow-lg p-10 text-center max-w-xl w-full">

            <p class="text-emerald-600 font-semibold mb-2">
                Bonus Route Parameter
            </p>

            <h1 class="text-4xl font-bold mb-4">
                Halo, {{ $nama }} 👋
            </h1>

            <p class="text-slate-600 mb-8">
                Nama pada halaman ini diambil dari parameter URL
                <strong>/hello/{nama}</strong>.
            </p>

            <a
                href="{{ route('home') }}"
                class="inline-block bg-emerald-700 text-white px-6 py-3 rounded-lg hover:bg-emerald-800"
            >
                Kembali ke Home
            </a>

        </div>
    </main>

</body>
</html>