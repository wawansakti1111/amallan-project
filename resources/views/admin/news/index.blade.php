<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kelola Berita') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{ route('admin.news.create') }}" class="px-4 py-2 bg-green-500 text-white rounded-md">Tambah Berita</a>
                    <div class="mt-4">
                        @if (session('success'))
                            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gambar</th>
                                    <th class="px-6 py-3 bg-gray-50"></th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach($news as $item)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">{{ $item->title }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        @if ($item->image)
                                            <img src="{{ asset('storage/' . $item->image) }}" class="h-10 w-10 rounded-full">
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
    </div>
</x-app-layout>