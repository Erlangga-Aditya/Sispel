@extends('layouts.app')

@section('content')
<h2>Data Warga Terdaftar</h2>

<div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; flex-wrap: wrap; gap: 10px;">
    <a href="{{ route('citizens.create') }}" class="btn" style="background-color: #28a745;">+ Daftar Pelatihan</a>

    <form action="{{ route('citizens.index') }}" method="GET" style="display: flex; gap: 10px; flex: 1; max-width: 500px;">
        @if(request('training_id'))
        <input type="hidden" name="training_id" value="{{ request('training_id') }}">
        @endif
        <input type="text" name="search" placeholder="Cari Nama atau NIK..." value="{{ request('search') }}" style="flex: 1;">
        <button type="submit" class="btn">Cari</button>
        @if(request('search') || request('training_id'))
        <a href="{{ route('citizens.index') }}" class="btn btn-secondary">Reset</a>
        @endif
    </form>
</div>

@if(request('training_id'))
<div class="alert" style="background: #eff6ff; color: #1e40af; border: 1px solid #dbeafe; margin-bottom: 20px;">
    Menampilkan peserta untuk pelatihan terpilih. <a href="{{ route('citizens.index') }}">Lihat Semua</a>
</div>
@endif

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Mengikuti Pelatihan</th>
            <th>Tanggal Daftar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($citizens as $citizen)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $citizen->nik }}</td>
            <td>{{ $citizen->name }}</td>
            <td>{{ $citizen->training->name }}</td>
            <td>{{ $citizen->created_at->format('d M Y') }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection