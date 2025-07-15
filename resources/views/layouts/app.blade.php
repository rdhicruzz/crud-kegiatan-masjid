<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistem Kegiatan Masjid')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 text-gray-800 font-sans">

    <nav class="bg-white border-b shadow-sm sticky top-0 z-10">
        <div class="max-w-6xl mx-auto px-4 py-3 flex justify-between items-center">
            <h1 class="text-xl font-semibold text-green-600">🕌 Sistem Kegiatan Masjid</h1>
            <span class="text-sm text-gray-500">Admin Panel</span>
        </div>
    </nav>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-gray-500 py-4">
        &copy; {{ date('Y') }} Masjid Baitur Rohman. All rights reserved.
    </footer>

</body>
</html>
