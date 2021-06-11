@extends('template.head')
@section('title', 'SIAKAD - Tambah Data')
@section('heading', 'Tambah Data Dosen')
@section('page', 'Tambah Data Dosen')
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
    <form action="{{ url('/data-dosen') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="nama">Nama Dosen</label>
                <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" placeholder="Enter Nama">
            </div>
            <div class="form-group">
                <label for="nip">NIP</label>
                <input type="number" id="nip" name="nip" class="form-control @error('nip') is-invalid @enderror" placeholder="Enter NIP">
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
                <input type="number" id="noHP" name="noHP" class="form-control @error('noHP') is-invalid @enderror" placeholder="Enter No. HP">
            </div>
            <div class="form-group">
                <label for="pengampu_matkul">Mata Kuliah yg Diampu</label>
                <input type="text" id="pengampu_matkul" name="pengampu_matkul" class="form-control @error('pengampu_matkul') is-invalid @enderror" placeholder="Enter Mata Kuliah">
            </div>
            <div class="form-group">
                <label for="prodi">Prodi</label>
                <input type="text" id="prodi" name="prodi" class="form-control @error('prodi') is-invalid @enderror" placeholder="Enter Prodi">
            </div>
        
        </div>
        <!-- /.card-body -->

        <div class="card-footer justify-content-between">
            <a href="{{ url('/data-mhs') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->
</div>



@endsection