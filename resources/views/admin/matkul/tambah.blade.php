@extends('template.head')
@section('title', 'SIAKAD - Tambah Data')
@section('heading', 'Tambah Data Mata Kuliah')
@section('page', 'Tambah Data Mata Kuliah')
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
    <form action="{{ url('/matkul') }}" method="post" enctype="multipart/form-data">
            @csrf
        <div class="card-body">
            <div class="form-group">
                <label for="kode">Kode Mata Kuliah</label>
                <input type="number" id="kode" name="kode" class="form-control @error('kode') is-invalid @enderror" placeholder="Enter Kode">
            </div>
            <div class="form-group">
                <label for="nama_matkul">Nama Mata Kuliah</label>
                <input type="text" id="nama_matkul" name="nama_matkul" class="form-control @error('nama_matkul') is-invalid @enderror" placeholder="Enter Nama Mata Kuliah">
            </div>
            <div class="form-group">
                <label for="sks">SKS</label>
                <input type="number" id="sks" name="sks" class="form-control @error('sks') is-invalid @enderror" placeholder="Enter SKS">
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="number" id="semester" name="semester" class="form-control @error('semester') is-invalid @enderror" placeholder="Enter Semester">
            </div>
            
        
        </div>
        <!-- /.card-body -->

        <div class="card-footer justify-content-between">
            <a href="{{ url('/matkul') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
        </div>
    </form>
</div>
<!-- /.card -->



@endsection