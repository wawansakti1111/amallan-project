<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $news->title }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/amallan.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-body">

    <header>
        <a href="{{ url('/') }}">
            <img src="{{ asset('asset/Salinan dari Salinan dari Tambahkan judul (3).png') }}" alt="Logo Amallan" class="header-logo-new">
        </a>
        <nav class="main-nav">
            <ul>
                <li><a href="{{ url('/') }}">Beranda</a></li>
                </ul>
        </nav>
    </header>

    <section class="section-padding">
        <div class="max-w-4xl mx-auto bg-white p-8 rounded-lg shadow-md">
            @if ($news->image)
                <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="w-full h-96 object-cover rounded-lg mb-6">
            @endif
            <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $news->title }}</h1>
            <p class="text-gray-500 text-sm mb-6">Dipublikasikan pada: {{ $news->created_at->format('d F Y') }}</p>
            <div class="prose max-w-none text-gray-800">
                {!! nl2br(e($news->content)) !!}
            </div>
            <a href="{{ url('/') }}" class="mt-8 inline-block px-6 py-3 bg-green-500 text-white rounded-full">Kembali ke Beranda</a>
        </div>
    </section>

    <footer>
        </footer>
</body>
</html>