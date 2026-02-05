@extends('layouts.app')

@section('content')
<h2>Tambah Pelatihan Baru</h2>

<form action="{{ route('trainings.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Nama Pelatihan</label>
        <input type="text" name="name" required placeholder="Contoh: Pelatihan Memasak">
    </div>
    <div class="form-group">
        <label>Keterangan (Opsional)</label>
        <textarea name="description" rows="3"></textarea>
    </div>
    <button type="submit" class="btn">Simpan</button>
    <a href="{{ route('trainings.index') }}" style="margin-left: 10px;">Batal</a>
</form>
@endsection