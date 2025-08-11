@extends('layouts.app') @section('title', 'Berita Terbaru - Amallan.id')

@section('content')

<section id="news-page" class="section-padding">
    <div class="container">
        <h2 class="section-heading animate__animated animate__fadeInUp">Berita & Pengumuman</h2>
        <p class="section-description animate__animated animate__fadeInUp animate__delay-1s">
            Ikuti perkembangan terbaru dari Amallan dan pesantren binaan kami.
        </p>

        @forelse ($news as $item)
            <div class="news-list-grid">
                <div class="news-card animate__animated animate__fadeInUp">
                    <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('asset/default-news-image.png') }}" alt="{{ $item->title }}" class="news-image">
                    <div class="news-content">
                        <h3>{{ $item->title }}</h3>
                        <div class="news-meta">
                            <span><i class="fas fa-calendar-alt"></i> {{ $item->created_at->format('d M Y') }}</span>
                        </div>
                        <p>{{ Str::limit(strip_tags($item->content), 150) }}</p>
                        <a href="{{ route('news.show', $item->slug) }}" class="read-more-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        @empty
            <div class="no-news-container animate__animated animate__fadeIn">
                <div class="no-news-icon">
                    <i class="fas fa-box-open"></i>
                </div>
                <h3>Ups, tidak ada berita terbaru saat ini.</h3>
                <p>Kami sedang menyiapkan konten-konten menarik lainnya. Silakan cek kembali nanti atau hubungi kami untuk informasi lebih lanjut.</p>
                <a href="{{ route('contact') }}" class="contact-link">Hubungi Kami</a>
            </div>
        @endforelse

        @if ($news->count() > 0)
            <div class="pagination-container">
                {{ $news->links() }}
            </div>
        @endif
    </div>
</section>

@endsection

<style>
    /* Tambahan CSS untuk halaman berita */
    #news-page {
        padding: 80px 0;
        background: linear-gradient(135deg, var(--white), var(--emerald-50));
        color: var(--slate-800);
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .section-heading {
        text-align: center;
        margin-bottom: 10px;
    }
    .section-description {
        text-align: center;
        margin-bottom: 50px;
        font-size: 1.1em;
        color: var(--slate-600);
    }
    .news-list-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 40px;
    }
    .news-card {
        background: white;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: var(--shadow-lg);
        transition: all 0.3s ease;
        border: 1px solid var(--emerald-200);
    }
    .news-card:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-xl);
    }
    .news-image {
        width: 100%;
        height: 200px;
        object-fit: cover;
        display: block;
    }
    .news-content {
        padding: 25px;
    }
    .news-content h3 {
        font-size: 1.5em;
        margin-bottom: 10px;
        color: var(--emerald-700);
        line-height: 1.3;
    }
    .news-meta {
        font-size: 0.9em;
        color: var(--slate-500);
        margin-bottom: 15px;
    }
    .read-more-link {
        display: inline-flex;
        align-items: center;
        color: var(--emerald-600);
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    .read-more-link i {
        margin-left: 8px;
        transition: transform 0.3s ease;
    }
    .read-more-link:hover {
        color: var(--emerald-800);
        transform: translateX(5px);
    }
    .no-news-container {
        text-align: center;
        padding: 60px 20px;
        background: var(--emerald-50);
        border: 2px dashed var(--emerald-200);
        border-radius: 15px;
        margin: 50px auto;
        max-width: 700px;
        transition: all 0.3s ease;
    }
    .no-news-container:hover {
        background: var(--emerald-100);
        transform: translateY(-5px);
    }
    .no-news-icon {
        font-size: 4em;
        color: var(--emerald-400);
        margin-bottom: 20px;
    }
    .no-news-container h3 {
        font-size: 1.8em;
        color: var(--slate-800);
        margin-bottom: 10px;
    }
    .no-news-container p {
        font-size: 1.1em;
        color: var(--slate-600);
        margin-bottom: 25px;
    }
    .contact-link {
        display: inline-block;
        padding: 12px 25px;
        background: var(--gradient-emerald);
        color: white;
        border-radius: 50px;
        text-decoration: none;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .contact-link:hover {
        transform: translateY(-2px);
        box-shadow: var(--shadow-lg);
    }
    .pagination-container {
        margin-top: 50px;
        text-align: center;
    }
</style>