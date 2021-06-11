@extends('template.head')
@section('title', 'SIAKAD - Edit Data')
@section('heading', 'Edit Data Mata Kuliah')
@section('page', 'Edit Data Mata Kuliah')
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
    <form action="{{ url('/matkul/'.$matkul->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('patch')
        <div class="card-body">
        <div class="form-group">
                <label for="kode">Kode Mata Kuliah</label>
                <input type="number" id="kode" name="kode" class="form-control @error('kode') is-invalid @enderror" value="{{ $matkul->kode }}">
            </div>
            <div class="form-group">
                <label for="nama_matkul">Nama Mata Kuliah</label>
                <input type="text" id="nama_matkul" name="nama_matkul" class="form-control @error('nama_matkul') is-invalid @enderror" value="{{ $matkul->nama_matkul }}">
            </div>
            <div class="form-group">
                <label for="sks">SKS</label>
                <input type="number" id="sks" name="sks" class="form-control @error('sks') is-invalid @enderror" value="{{ $matkul->sks }}">
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="number" id="semester" name="semester" class="form-control @error('semester') is-invalid @enderror" value="{{ $matkul->semester }}">
            </div>
        
        </div>
        <!-- /.card-body -->

        <div class="card-footer justify-content-between">
            <a href="{{ url('/matkul') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary float-right">Update</button>
        </div>
    </form>
</div>
<!-- /.card -->
</div>



@endsection