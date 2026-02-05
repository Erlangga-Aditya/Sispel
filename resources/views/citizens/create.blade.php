@extends('layouts.app')

@section('content')
<h2>Pendaftaran Pelatihan Warga</h2>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Gagal Menyimpan!</strong>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('citizens.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>NIK (Nomor Induk Kependudukan)</label>
        <input type="number" name="nik" required placeholder="Masukkan 16 digit NIK tanpa spasi" value="{{ old('nik') }}" style="font-family: monospace; letter-spacing: 1px;">
        <small style="color: var(--secondary); margin-top: 5px; display: block;">Input angka saja, tanpa karakter lain.</small>
    </div>
    <div class="form-group">
        <label>Nama Lengkap</label>
        <input type="text" name="name" required placeholder="Nama sesuai KTP" value="{{ old('name') }}">
    </div>
    <div class="form-group">
        <label>Pilih Pelatihan</label>
        <select name="training_id" required style="cursor: pointer;">
            <option value="">-- Pilih Pelatihan --</option>
            @foreach($trainings as $training)
            <option value="{{ $training->id }}" {{ old('training_id') == $training->id ? 'selected' : '' }}>
                {{ $training->name }}
            </option>
            @endforeach
        </select>
        <small style="color: var(--secondary); margin-top: 5px; display: block;">Pastikan warga belum pernah mengikuti pelatihan sebelumnya.</small>
    </div>
    <button type="submit" class="btn" style="background-color: #28a745;">Daftar Sekarang</button>
    <a href="{{ route('citizens.index') }}" style="margin-left: 10px;">Batal</a>
</form>
@endsection