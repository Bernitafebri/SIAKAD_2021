@extends('template.head')
@section('title', 'SIAKAD - Presensi Keluar')
@section('heading', 'Presensi Keluar')
@section('page', 'Presensi Keluar')

@push('link')
<script src="{{asset('Js/Jam.js')}}"></script>
<style>
    #watch {
        color: rgb(252, 150, 65);
        position: absolute;
        z-index: 1;
        height: 48px;
        width: 708px;
        overflow: show;
        margin: auto;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        font-size: 10vw;
        -webkit-text-stroke: 3px rgb(210, 65, 36);
        text-shadow: 4px 4px 10px rgb(218, 26, 0, 4),
        4px 4px 20px rgb(218, 26, 0, 4),
        4px 4px 30px rgb(218, 26, 0, 4),
        4px 4px 40px rgb(218, 26, 0, 4);
    }
</style>
@endpush

@section('content')

<div class="col-md-6">
    <div class="card center">
        <div class="card-header">
            <h3 class="card-title">
                Presensi Keluar                
            </h3>
        </div>
            <!-- /.card-header -->
        <div class="card-body">
            <form action="{{url('/presensi-keluar-dosen')}}" method="post">
            {{ csrf_field() }}
                <div class="form-group">
                    <center>
                        <label id="clock" style="font-size:100px; color: #659980; -webkit-text-stroke: 3px #02c39a;
                        text-shadow: 4px 4px 10px #ebba34,
                        4px 4px 20px #ebba34,
                        4px 4px 30px #ebba34,
                        4px 4px 40px #ebba34;">
                    </center>
                </div>
                <div class="form-group">
                    <center>
                        <button type="submit" class="btn btn-primary">Klik untuk Presensi Keluar</button>
                    </center>
                </div>
                
            </form>      
        </div ><!-- /.card-body -->
        <div class="card-footer clearfix">
            <a href="{{ url('/dashboard') }}" >Dasboard</a>
        </div><!-- /.card footer-->

    </div>     <!-- /.card -->
</div>

 
@endsection

