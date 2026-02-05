@extends('layouts.app')

@section('content')
<div style="text-align: center; padding: 50px;">
    <h1>Sistem Pendataan Pelatihan Warga</h1>
    <p>Selamat datang. Silakan pilih menu di bawah ini:</p>

    <div style="margin-top: 30px;">
        <a href="{{ route('trainings.index') }}" class="btn" style="padding: 15px 30px; margin: 10px; font-size: 1.2em;">Kelola Data Pelatihan</a>
        <a href="{{ route('citizens.index') }}" class="btn" style="padding: 15px 30px; margin: 10px; font-size: 1.2em; background-color: #28a745;">Pendaftaran Warga</a>
    </div>
</div>
@endsection