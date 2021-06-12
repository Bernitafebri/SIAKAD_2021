@extends('template.head')
@section('title', 'SIAKAD - Presensi Masuk')
@section('heading', 'Presensi Masuk')
@section('page', 'Presensi Masuk')

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
                Presensi Masuk                
            </h3>
        </div>
            <!-- /.card-header -->
        <div class="card-body">
            <form action="{{ url('/presensi-mhs') }}" method="post">
            {{ csrf_field() }}
                <div class="form-group">
                    <center>
                        <label id="clock" style="font-size:100px; color: #0A77DE; -webkit-text-stroke: 3px #00ACFE;
                        text-shadow: 4px 4px 10px #36D6FE,
                        4px 4px 20px #36D6FE,
                        4px 4px 30px #36D6FE,
                        4px 4px 40px #36D6FE;">
                    </center>
                </div>
                <div class="form-group">
                    <center>
                        <button type="submit" class="btn btn-primary">Klik untuk Presensi</button>
                    </center>
                </div>
                
            </form>      
        </div ><!-- /.card-body -->

    </div>     <!-- /.card -->
</div>

 
@endsection

@push('scripts')



@endpush

