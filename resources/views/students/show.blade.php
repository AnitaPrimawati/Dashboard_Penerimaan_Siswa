@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Siswa</h1>
    <div class="card">
        <div class="card-header">
            Detail Siswa
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $student->name }}</h5>
            <p class="card-text"><strong>Email: </strong>{{ $student->email }}</p>
            <p class="card-text"><strong>Telepon: </strong>{{ $student->phone }}</p>
            <p class="card-text"><strong>Alamat: </strong>{{ $student->address }}</p>
            <a href="{{ route('dashboard') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection