@extends('template.head')
@section('title', 'SIAKAD - Edit Data')
@section('heading', 'Edit Data Kelas')
@section('page', 'Edit Data Kelas')
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
    <form action="{{ url('/kelas/'.$kelas->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="form-group">
                <label for="matkul_id">Mata Kuliah</label>
                <select id="matkul_id" name="matkul_id" class="form-control @error('matkul_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Mata Kuliah --</option>
                        @foreach ($matkul as $data)
                            <option value="{{ $data->id }}" 
                            @if ($kelas->matkul_id == $data->id)
                                selected
                            @endif>
                            {{ $data->nama_matkul }}</option>
                        @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                    <input type='text' id="nama_kelas" name='nama_kelas' class="form-control @error('nama_kelas') is-invalid @enderror" value="{{ $kelas->nama_kelas }}">
            </div>
            <div class="form-group">
                <label for="dosen_id">Dosen</label>
                <select id="dosen_id" name="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Dosen --</option>
                        @foreach ($dosen as $data)
                        <option value="{{ $data->id }}"
                        @if ($kelas->dosen_id == $data->id)
                            selected
                        @endif
                        >{{ $data->nama }}</option>
                        @endforeach
                  </select>
            </div>
            
        </div>
        <!-- /.card-body -->

        <div class="card-footer justify-content-between">
            <a href="{{ url('/kelas') }}" class="btn btn-default">Cancel</a>
            <button type="submit" class="btn btn-primary float-right">Update</button>
        </div>
    </form>
    </div>
</div>
<!-- /.card -->





@endsection