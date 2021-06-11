@extends('template.head')
@section('title', 'SIAKAD - Tambah Data')
@section('heading', 'Tambah Data Mahasiswa')
@section('page', 'Tambah Data Mahasiswa')
@section('content')

<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Tambah Data</h3>
    </div>
    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{ url('/data-mhs') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama Mahasiswa</label>
                <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Enter Nama">
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="number" id="nim" name="nim" class="form-control @error('nim') is-invalid @enderror" placeholder="Enter NIM">
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <input type="text" id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" placeholder="Enter Jenis Kelamin">
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" placeholder="Enter Alamat">
            </div>
            <div class="form-group">
                <label for="noHP">No. HP</label>
                <input type="text" id="noHP" name="noHP" class="form-control @error('noHP') is-invalid @enderror" placeholder="Enter No. HP">
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="text" id="semester" name="semester" class="form-control @error('semester') is-invalid @enderror" placeholder="Enter Semester">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi</label>
                <input type="text" id="prodi" name="prodi" class="form-control @error('prodi') is-invalid @enderror" placeholder="Enter Prodi">
            </div>
        
        </div>
        <!-- /.card-body -->

        <div class="card-footer justify-content-between">
            <a href="{{ url('/data-dosen') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->



@endsection