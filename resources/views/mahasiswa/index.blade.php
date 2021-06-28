@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Mahasiswa
                    <a href="{{route('mahasiswa_create')}}" class="btn btn-md btn-primary float-right">Tambah Data</a>
                </div>

                <div class="body-header">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <th>No.</th>
                                <th>NAMA LENGKAP</th>
                                <th>TEMPAT, TANGGAL LAHIR</th>
                                <th>TELEPON</th>
                                <th>ALAMAT</th>
                                <th>JENIS KELAMIN</th>
                                <th>PHOTO</th>
                                <th>AKSI</th>
                            </tr>
                                @foreach ($mahasiswa as $mhs)
                            <tr>
                                <td>{{ $mhs->id }}</td>
                                <td>{{ $mhs->user->name }}</td>
                                <td>{{ $mhs->tempat_lahir.','.$mhs->tgl_lahir }}</td>
                                <td>{{ $mhs->telepon }}</td>
                                <td>{{ $mhs->alamat }}</td>
                                <td>{{ $mhs->gender }}</td>
                                <td></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-warning">Edit</a>
                                    <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                                </td>
                            </tr>

                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection