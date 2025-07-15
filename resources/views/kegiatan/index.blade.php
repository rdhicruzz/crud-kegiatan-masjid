@extends('layouts.app')

@section('title', 'Data Kegiatan Masjid')

@section('content')
<div class="max-w-6xl mx-auto px-4">
    <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-6">
        <h2 class="text-2xl font-bold text-slate-700">📋 Daftar Kegiatan</h2>
        <a href="{{ route('kegiatan.create') }}" class="mt-4 sm:mt-0 inline-block bg-green-600 text-white px-4 py-2 rounded shadow hover:bg-green-700">+ Tambah</a>
    </div>

    <form method="GET" action="{{ route('kegiatan.index') }}" class="flex gap-2 mb-6">
        <input type="text" name="search" value="{{ request('search') }}" placeholder="Cari kegiatan..." class="flex-1 border border-gray-300 px-4 py-2 rounded shadow-sm focus:ring focus:border-green-300">
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Cari</button>
    </form>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
        <table class="w-full text-sm text-left table-auto">
            <thead class="bg-gray-100 text-gray-600">
                <tr>
                    <th class="px-4 py-2 border">No</th>
                    <th class="px-4 py-2 border">Nama</th>
                    <th class="px-4 py-2 border">Waktu</th>
                    <th class="px-4 py-2 border">Tempat</th>
                    <th class="px-4 py-2 border">Deskripsi</th>
                    <th class="px-4 py-2 border">Penanggung Jawab</th>
                    <th class="px-4 py-2 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($kegiatans as $index => $kegiatan)
                    <tr class="border-t hover:bg-gray-50">
                        <td class="px-4 py-2">{{ $index + $kegiatans->firstItem() }}</td>
                        <td class="px-4 py-2">{{ $kegiatan->nama_kegiatan }}</td>
                        <td class="px-4 py-2">{{ \Carbon\Carbon::parse($kegiatan->waktu)->format('d M Y, H:i') }}</td>
                        <td class="px-4 py-2">{{ $kegiatan->tempat }}</td>
                        <td class="px-4 py-2">{{ $kegiatan->deskripsi }}</td>
                        <td class="px-4 py-2">{{ $kegiatan->penanggung_jawab }}</td>
                        <td class="px-4 py-2 text-center space-x-1">
                            <a href="{{ route('kegiatan.edit', $kegiatan) }}" class="text-blue-600 hover:underline">Edit</a>
                            <form action="{{ route('kegiatan.destroy', $kegiatan) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-4 text-center text-gray-500">Belum ada data kegiatan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $kegiatans->links() }}
    </div>
</div>
@endsection
