@extends('template.head')
@section('title', 'SIAKAD - Dashboard')
@section('heading', 'Dashboard')
@section('page', 'Dashboard')
@section('content')


    @if (auth()->user()->level=="admin")
    <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>Jadwal</h3>
                <p>Kuliah</p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-alt nav-icon"></i>
            </div>
            <a href="{{ url('/jadwals') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-warning">
            <div class="inner" style="color: #FFFFFF;">
                <h3>{{ $dosen }}</h3>
                <p>Dosen</p>
            </div>
            <div class="icon">
                <i class="fas fa-id-card nav-icon"></i>
            </div>
            <a href="{{ url('/data-dosen') }}" style="color: #FFFFFF !important;" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $mahasiswa }}</h3>
                <p>Mahasiswa</p>
            </div>
            <div class="icon">
                <i class="fas fa-id-card nav-icon"></i>
            </div>
            <a href="{{ url('/data-mhs') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-4 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $ruang }}</h3>
                <p>Ruang</p>
            </div>
            <div class="icon">
                <i class="fas fa-home nav-icon"></i>
            </div>
            <a href="{{ url('/ruangs') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-4 col-6">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{ $matkul }}</h3>
                <p>Mata Kuliah</p>
            </div>
            <div class="icon">
                <i class="fas fa-book nav-icon"></i>
            </div>
            <a href="{{ url('/matkul') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>{{ $user }}</h3>
                <p>User Registrations</p>
            </div>
            <div class="icon">
                <i class="fas fa-user-plus nav-icon"></i>
            </div>
            <a href="{{ url('/users') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    @endif


    @if (auth()->user()->level=="dosen")
    <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h1>Jadwal</h1>
                <p></p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-alt nav-icon"></i>
            </div>
            <a href="{{ url('/jadwals-dosen') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endif


    @if (auth()->user()->level=="mahasiswa")
    <div class="col-lg-4 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h2>Jadwal</h2>
                <p></p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-alt nav-icon"></i>
            </div>
            <a href="{{ url('/jadwals-mhs') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    <div class="col-lg-4 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h2>Absensi</h2>
                <p></p>
            </div>
            <div class="icon">
                <i class="fas fa-calendar-check nav-icon"></i>
            </div>
            <a href="{{ url('/presensi-mhs') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>
    @endif
@endsection