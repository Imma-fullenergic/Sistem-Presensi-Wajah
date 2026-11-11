@props(['judul' => 'Dasbor Tata Usaha'])
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $judul }} - UPT SMK Negeri 3 Parepare</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/tu.css') }}">
</head>
<body>
    @include('tu.partials.sidebar')
    <div class="overlay" id="overlay"></div>

    <main class="main">
        @include('tu.partials.topbar')
        {{ $slot }}
    </main>

    <script src="{{ asset('js/tu.js') }}"></script>
</body>
</html>
