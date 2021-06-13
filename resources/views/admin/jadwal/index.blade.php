@extends('template.head')
@section('title', 'SIAKAD - Data Jadwal Kuliah')
@section('heading', 'Data Jadwal Kuliah')
@section('page', 'Data Jadwal Kuliah')
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-jadwal">
                  Tambah Data 
              </button>
            </h3>
        </div>
        
        <!-- /.card-header -->
        <div class="card-body">
          <table id="jadwal" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Mata Kuliah</th>
                    <th>Kelas</th>
                    <th>Nama Dosen</th>
                    <th>Hari</th>
                    <th>Ruang</th>
                    <th>Jam Mulai</th>
                    <th>Jam Selesai</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($jadwal as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->matkul->nama_matkul }}</td>
                    <td>{{ $data->kelas->nama_kelas }}</td>
                    <td>{{ $data->dosen->nama }}</td>
                    <td>{{ $data->hari->nama_hari }}</td>
                    <td>{{ $data->ruang->nama_ruang }}</td>
                    <td>{{ $data->jam_mulai }}</td>
                    <td>{{ $data->jam_selesai }}</td>
                    <td>
                    <form action="{{ url('/jadwals/'. $data->id ) }}" method="post">
                            @csrf
                            @method('delete')
                           
                            <a href="{{ url('/jadwals/'. $data->id .'/edit') }}" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>        
                    </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
</div>

<!-- Extra large modal -->
<div class="modal fade bd-example-modal-lg tambah-jadwal" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambah Data Jadwal</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form action="{{ url('/jadwals')}}" method="post"> 
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="hari_id">Hari</label>
                  <select id="hari_id" name="hari_id" class="form-control @error('hari_id') is-invalid @enderror select2bs4">
                      <option value="">-- Pilih Hari --</option>
                      @foreach ($hari as $data)
                          <option value="{{ $data->id }}">{{ $data->nama_hari }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="kelas_id">Kelas</label>
                  <select id="kelas_id" name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror select2bs4">
                      <option value="">-- Pilih Kelas --</option>
                      @foreach ($kelas as $data)
                          <option value="{{ $data->id }}">{{ $data->nama_kelas }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="dosen_id">Dosen</label>
                  <select id="dosen_id" name="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror select2bs4">
                      <option value="">-- Pilih Dosen --</option>
                      @foreach ($dosen as $data)
                          <option value="{{ $data->id }}">{{ $data->nama }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="matkul_id">Kode Mapel</label>
                  <select id="matkul_id" name="matkul_id" class="form-control @error('matkul_id') is-invalid @enderror select2bs4">
                      <option value="">-- Pilih Kode Mapel --</option>
                      @foreach ($matkul as $data)
                          <option value="{{ $data->id }}">{{ $data->nama_matkul }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="jam_mulai">Jam Mulai</label>
                  <input type='text' id="jam_mulai" name='jam_mulai' class="form-control @error('jam_mulai') is-invalid @enderror jam_mulai" placeholder="{{ Date('H:i') }}">
                </div>
                <div class="form-group">
                  <label for="jam_selesai">Jam Selesai</label>
                  <input type='text' id="jam_selesai" name='jam_selesai' class="form-control @error('jam_selesai') is-invalid @enderror" placeholder="{{ Date('H:i') }}">
                </div>
                <div class="form-group">
                  <label for="ruang_id">Ruang Kelas</label>
                  <select id="ruang_id" name="ruang_id" class="form-control @error('ruang_id') is-invalid @enderror select2bs4">
                      <option value="">-- Pilih Ruang Kelas --</option>
                      @foreach ($ruang as $data)
                          <option value="{{ $data->id }}">{{ $data->nama_ruang }}</option>
                      @endforeach
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal"><i class='nav-icon fas fa-arrow-left'></i> &nbsp; Kembali</button>
              <button type="submit" class="btn btn-primary"><i class="nav-icon fas fa-save"></i> &nbsp; Tambahkan</button>
          </form>
      </div>
      </div>
    </div>
  </div>

 
@endsection

@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{asset('AdminLTE/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('AdminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>

<!-- Page specific script -->
<script>
  $(function () {
    $('#jadwal').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<script>
  $("#jam_mulai,#jam_selesai").timepicker({
    timeFormat: 'HH:mm'
    });
</script>



@endpush

