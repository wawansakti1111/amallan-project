<x-admin-layout>
    <x-slot name="header">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <div class="page-header">
            <h2>{{ __('Edit Berita') }}</h2>
        </div>
    </x-slot>

    <div class="container-fluid pt-5">
        <div class="card">
            <div class="card-header">
                <h3>
                    <svg width="24" height="24" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                    </svg>
                    Edit Berita
                </h3>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.news.update', $news) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group">
                        <label for="title" class="form-label">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: inline; margin-right: 8px;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                            </svg>
                            Judul Berita
                        </label>
                        <input type="text" name="title" id="title" class="form-input" value="{{ old('title', $news->title ?? '') }}" placeholder="Masukkan judul berita yang menarik...">
                    </div>
                    
                    <div class="form-group">
                        <label for="content" class="form-label">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: inline; margin-right: 8px;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Konten Berita
                        </label>
                        <textarea name="content" id="content" rows="8" class="form-textarea" placeholder="Tulis konten berita di sini...">{{ old('content', $news->content ?? '') }}</textarea>
                    </div>
                    
                    <div class="form-group">
                        <label for="image" class="form-label">
                            <svg width="16" height="16" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="display: inline; margin-right: 8px;">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Gambar Berita
                        </label>
                        @if ($news->image)
                            <div class="mb-4">
                                <p style="color: #6b7280; font-size: 0.875rem; margin-bottom: 0.5rem;">Gambar saat ini:</p>
                                <img src="{{ asset('storage/' . $news->image) }}" class="image-preview">
                            </div>
                        @endif
                        <input type="file" name="image" id="image" class="form-file">
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary">
                            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Update Berita
                        </button>
                        <a href="{{ route('admin.news.index') }}" class="btn btn-secondary">
                            <svg class="btn-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            Batal
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
