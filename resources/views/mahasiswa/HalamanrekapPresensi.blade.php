@extends('template.head')
@section('title', 'SIAKAD - List Presensi Masuk')
@section('heading', 'List Presensi Masuk')
@section('page', 'List Presensi Masuk')


@section('content')

<div class="col-md-6">
    <div class="card center">
        <div class="card-header">
            <h3 class="card-title">
                List Presensi Masuk                
            </h3>
        </div>
            <!-- /.card-header -->
        <div class="card-body">
            <div class="form-group">
                <label for="label">Tanggal Awal</label>
                <input type="date" id="tglawal" name="tglawal" class="form-control">
            </div>
            <div class="form-group">
                <label for="label">Tanggal Akhir</label>
                <input type="date" id="tglakhir" name="tglakhir" class="form-control">
            </div>
            <div class="form-group">
               <a href="" onclick="this.href='/filter-data-mhs/'+document.getElementById('tglawal').value +
               '/' + document.getElementById('tglakhir').value " class="btn btn-primary col-md-12">
               Lihat <i class="fas fa-print"></i>
               </a>
            </div>

        </div ><!-- /.card-body -->
        <div class="card-footer clearfix">
            <a href="{{ url('/dashboard') }}" >Dasboard</a>
        </div><!-- /.card footer-->
    </div>     <!-- /.card -->
</div>

 
@endsection

