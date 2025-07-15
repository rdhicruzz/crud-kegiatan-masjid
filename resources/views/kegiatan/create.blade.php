@extends('layouts.app')

@section('title', 'Tambah Kegiatan')

@section('content')
<div class="max-w-3xl mx-auto px-4">
    <h2 class="text-2xl font-bold text-slate-700 mb-4">Tambah Kegiatan Baru</h2>
    <form action="{{ route('kegiatan.store') }}" method="POST">
        @include('kegiatan.form', ['submit' => 'Simpan'])
    </form>
</div>
@endsection
