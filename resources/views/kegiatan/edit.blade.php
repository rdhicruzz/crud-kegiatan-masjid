@extends('layouts.app')

@section('title', 'Edit Kegiatan')

@section('content')
<div class="max-w-3xl mx-auto px-4">
    <h2 class="text-2xl font-bold text-slate-700 mb-4">Edit Kegiatan</h2>
    <form action="{{ route('kegiatan.update', $kegiatan) }}" method="POST">
        @method('PUT')
        @include('kegiatan.form', ['submit' => 'Update', 'kegiatan' => $kegiatan])
    </form>
</div>
@endsection
