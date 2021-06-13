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
    <form action="{{ url('/jadwals/'.$jadwal->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="card-body">
            <div class="form-group">
                <label for="hari_id">Hari</label>
                <select id="hari_id" name="hari_id" class="form-control @error('hari_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Hari --</option>
                    @foreach ($hari as $data)
                        <option value="{{ $data->id }}"
                        @if ($jadwal->hari_id == $data->id)
                            selected
                        @endif>
                        {{ $data->nama_hari }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="kelas_id">Kelas</label>
                <select id="kelas_id" name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Kelas --</option>
                    @foreach ($kelas as $data)
                        <option value="{{ $data->id }}"
                        @if ($jadwal->kelas_id == $data->id)
                            selected
                            @endif>
                        {{ $data->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="dosen_id">Dosen</label>
                <select id="dosen_id" name="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Dosen --</option>
                    @foreach ($dosen as $data)
                        <option value="{{ $data->id }}"
                        @if ($jadwal->dosen_id == $data->id)
                            selected
                            @endif>
                        {{ $data->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="matkul_id">Kode Mapel</label>
                <select id="matkul_id" name="matkul_id" class="form-control @error('matkul_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Kode Mapel --</option>
                    @foreach ($matkul as $data)
                        <option value="{{ $data->id }}"
                        @if ($jadwal->matkul_id == $data->id)
                            selected
                            @endif>
                        {{ $data->nama_matkul }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="jam_mulai">Jam Mulai</label>
                <input type='text' id="jam_mulai" name='jam_mulai' class="form-control @error('jam_mulai') is-invalid @enderror jam_mulai" value="{{ $jadwal->jam_mulai }}">
            </div>
            <div class="form-group">
                <label for="jam_selesai">Jam Selesai</label>
                <input type='text' id="jam_selesai" name='jam_selesai' class="form-control @error('jam_selesai') is-invalid @enderror" value="{{ $jadwal->jam_selesai }}">
            </div>
            <div class="form-group">
                <label for="ruang_id">Ruang Kelas</label>
                <select id="ruang_id" name="ruang_id" class="form-control @error('ruang_id') is-invalid @enderror select2bs4">
                    <option value="">-- Pilih Ruang Kelas --</option>
                    @foreach ($ruang as $data)
                        <option value="{{ $data->id }}"
                        @if ($jadwal->ruang_id == $data->id)
                            selected
                            @endif>
                        {{ $data->nama_ruang }}</option>
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