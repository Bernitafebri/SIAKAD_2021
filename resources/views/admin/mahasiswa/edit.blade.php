@extends('template.head')
@section('title', 'SIAKAD - Edit Data')
@section('heading', 'Edit Data Mahasiswa')
@section('page', 'Edit Data Mahasiswa')
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
        <form action="{{ url('/data-mhs/'.$mhs->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('patch')
            <div class="card-body">
                <div class="form-group">
                    <label for="nama">Nama Mahasiswa</label>
                    <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $mhs->nama }}">
                </div>
                <div class="form-group">
                    <label for="nim">NIM</label>
                    <input type="number" id="nim" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ $mhs->nim }}">
                </div>
                <div class="form-group">
                    <label for="gender">Jenis Kelamin</label>
                    <input type="text" id="gender" name="gender" class="form-control @error('gender') is-invalid @enderror" value="{{ $mhs->gender }}">
                </div>
                <div class="form-group">
                    <label for="address">Alamat</label>
                    <input type="text" id="address" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $mhs->address }}">
                </div>
                <div class="form-group">
                    <label for="noHP">No. HP</label>
                    <input type="number" id="noHP" name="noHP" class="form-control @error('noHP') is-invalid @enderror" value="{{ $mhs->noHP }}">
                </div>
                <div class="form-group">
                    <label for="semester">Semester</label>
                    <input type="number" id="semester" name="semester" class="form-control @error('semester') is-invalid @enderror" value="{{ $mhs->semester }}">
                </div>
                <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <input type="text" id="prodi" name="prodi" class="form-control @error('prodi') is-invalid @enderror" value="{{ $mhs->prodi }}">
                </div>
            
            </div>
            <!-- /.card-body -->

            <div class="card-footer justify-content-between">
                <a href="{{ url('/data-mhs') }}" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-primary float-right">Update</button>
            </div>
        </form>
    </div>
<!-- /.card -->
</div>



@endsection