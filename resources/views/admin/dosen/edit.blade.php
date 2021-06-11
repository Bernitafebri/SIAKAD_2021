@extends('template.head')
@section('title', 'SIAKAD - Edit Data')
@section('heading', 'Edit Data Dosen')
@section('page', 'Edit Data Dosen')
@section('content')

<!-- left column -->
<div class="col-md-12">
<!-- general form elements -->
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Data</h3>
    </div>
    <!-- /.card-header -->

    <!-- form start -->
    <form action="{{ url('/data-dosen/'.$dosen->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama Dosen</label>
                <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $dosen->nama }}">
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="number" id="nip" name="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ $dosen->nip }}">
            </div>
            <div class="form-group">
                <label for="gender">Jenis Kelamin</label>
                <input type="text" id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ $dosen->gender }}">
            </div>
            <div class="form-group">
                <label for="address">Alamat</label>
                <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $dosen->address }}">
            </div>
            <div class="form-group">
                <label for="noHP">No. HP</label>
                <input type="number" id="noHP" name="noHP" class="form-control @error('noHP') is-invalid @enderror" value="{{ $dosen->noHP }}">
            </div>
            <div class="form-group">
                <label for="pengampu_matkul">Mata Kuliah yg Diampu</label>
                <input type="text" id="pengampu_matkul" name="pengampu_matkul" class="form-control @error('pengampu_matkul') is-invalid @enderror" value="{{ $dosen->pengampu_matkul }}">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi</label>
                <input type="text" id="prodi" name="prodi" class="form-control @error('prodi') is-invalid @enderror" value="{{ $dosen->prodi }}">
            </div>
        
        </div>
        <!-- /.card-body -->

        <div class="card-footer justify-content-between">
            <a href="{{ url('/data-dosen') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary float-right">Update</button>
        </div>
    </form>
</div>
<!-- /.card -->



@endsection