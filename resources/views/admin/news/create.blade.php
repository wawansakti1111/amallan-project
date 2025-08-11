<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="title" class="block text-sm font-medium text-gray-700">Judul</label>
                            <input type="text" name="title" id="title" class="mt-1 block w-full">
                        </div>
                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700">Konten</label>
                            <textarea name="content" id="content" rows="10" class="mt-1 block w-full"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="image" class="block text-sm font-medium text-gray-700">Gambar</label>
                            <input type="file" name="image" id="image" class="mt-1 block w-full">
                        </div>
                        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-md">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>