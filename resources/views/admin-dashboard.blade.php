<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mb-8">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">
                        {{ isset($editingNews) ? 'Edit Berita' : 'Tambah Berita Baru' }}
                    </h3>
                    
                    <form action="{{ isset($editingNews) ? route('admin.news.update', $editingNews) : route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if (isset($editingNews))
                            @method('PUT')
                        @endif
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full" value="{{ old('title', $editingNews->title ?? '') }}">
                        </div>
                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Konten</label>
                            <textarea name="content" id="content" rows="10" class="mt-1 block w-full">{{ old('content', $editingNews->content ?? '') }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                            @if (isset($editingNews) && $editingNews->image)
                                <img src="{{ asset('storage/' . $editingNews->image) }}" class="h-20 w-20 object-cover mb-2">
                            @endif
                            <input type="file" name="image" id="image" class="mt-1 block w-full">
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md">
                                {{ isset($editingNews) ? 'Update' : 'Simpan' }}
                            </button>
                            @if (isset($editingNews))
                                <a href="{{ route('admin.dashboard') }}" class="ml-4 text-gray-600">Batal Edit</a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-medium text-gray-900 mb-4">Daftar Berita</h3>
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                                <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
                                <th class="px-6 py-3 bg-gray-50"></th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach($allNews as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->title }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" class="h-10 w-10 rounded-full">
                                    @else
                                        <span class="text-gray-500">Tidak ada gambar</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="{{ route('admin.news.edit', $item) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                    <form action="{{ route('admin.news.destroy', $item) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-2" onclick="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>