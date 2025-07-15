@csrf

<div class="space-y-4">
    <div>
        <label class="block mb-1 font-medium">Nama Kegiatan</label>
        <input type="text" name="nama_kegiatan" value="{{ old('nama_kegiatan', $kegiatan->nama_kegiatan ?? '') }}" class="w-full border px-4 py-2 rounded shadow-sm" required>
    </div>

    <div>
        <label class="block mb-1 font-medium">Waktu</label>
        <input type="datetime-local" name="waktu" value="{{ old('waktu', isset($kegiatan) ? \Carbon\Carbon::parse($kegiatan->waktu)->format('Y-m-d\TH:i') : '') }}" class="w-full border px-4 py-2 rounded" required>
    </div>

    <div>
        <label class="block mb-1 font-medium">Tempat</label>
        <input type="text" name="tempat" value="{{ old('tempat', $kegiatan->tempat ?? '') }}" class="w-full border px-4 py-2 rounded" required>
    </div>

    <div>
        <label class="block mb-1 font-medium">Deskripsi</label>
        <textarea name="deskripsi" rows="3" class="w-full border px-4 py-2 rounded">{{ old('deskripsi', $kegiatan->deskripsi ?? '') }}</textarea>
    </div>

    <div>
        <label class="block mb-1 font-medium">Penanggung Jawab</label>
        <input type="text" name="penanggung_jawab" value="{{ old('penanggung_jawab', $kegiatan->penanggung_jawab ?? '') }}" class="w-full border px-4 py-2 rounded" required>
    </div>
</div>

<div class="mt-6">
    <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">{{ $submit ?? 'Simpan' }}</button>
    <a href="{{ route('kegiatan.index') }}" class="ml-3 text-gray-600 hover:underline">Batal</a>
</div>
