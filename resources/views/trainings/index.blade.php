@extends('layouts.app')

@section('content')
<h2>Daftar Pelatihan</h2>
<a href="{{ route('trainings.create') }}" class="btn" style="margin-bottom: 20px;">+ Tambah Pelatihan</a>

<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Pelatihan</th>
            <th>Keterangan</th>
            <th>Jumlah Peserta</th>
        </tr>
    </thead>
    <tbody>
        @foreach($trainings as $training)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $training->name }}</td>
            <td>{{ $training->description }}</td>
            <td>
                <div style="display: flex; align-items: center; gap: 10px;">
                    <span>{{ $training->citizens->count() }} orang</span>
                    <a href="{{ route('citizens.index', ['training_id' => $training->id]) }}" class="btn btn-secondary" style="padding: 5px 10px; font-size: 0.8rem;">
                        Lihat Peserta
                    </a>
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection