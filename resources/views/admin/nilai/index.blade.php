@extends('template.head')
@section('title', 'SIAKAD - Data Nilai Ulangan')
@section('heading', 'Data Nilai Ulangan')
@section('page')
    <li class="breadcrumb-item active"><a href="#S">Nilai Ulangan</a></li>
    <li class="breadcrumb-item active">{{ $kelas->nama_kelas }}</li>
@endsection
@section('content')

<div class="col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target=".tambah-kelas">
                  Tambah Data 
              </button>
            </h3>
        </div>
        
        <!-- /.card-header TABEL KELAS-->
        <div class="card-body">
          <table id="kelas" class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Mata Kuliah</th>
                    <th>Nama Kelas</th>
                    <th>Dosen</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kelas as $data)
                  <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->matkul->nama_matkul }}</td>
                    <td>{{ $data->nama_kelas }}</td>
                    <td>{{ $data->dosen->nama }}  </td>
                    <td>                   
                    <form action="{{ url('/kelas/'. $data->id ) }}" method="post">
                            @csrf
                            @method('delete')
                           
                            <a href="{{ url('/kelas/'. $data->id .'/edit') }}" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>        
                        </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <a href="{{ url('/dashboard') }}" >Dasboard</a>
        </div><!-- /.card footer-->
    </div>
    <!-- /.card -->
</div>

<!-- Extra large modal UNTUK TAMBAH KELAS-->
<div class="modal fade bd-example-modal-lg tambah-kelas" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
      <div class="modal-header">
          <h4 class="modal-title">Tambah Data Kelas</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div class="modal-body">
          <form action="{{ url('/kelas') }}" method="post"> 
            @csrf
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="matkul_id">Mata Kuliah</label>
                  <select id="matkul_id" name="matkul_id" class="form-control @error('matkul_id') is-invalid @enderror select2bs4">
                      <option value="">-- Pilih Mata Kuliah --</option>
                      @foreach ($matkul as $data)
                          <option value="{{ $data->id }}">{{ $data->nama_matkul }}</option>
                      @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="nama_kelas">Nama Kelas</label>
                  <input type='text' id="nama_kelas" name='nama_kelas' class="form-control @error('nama_kelas') is-invalid @enderror nama_kelas" placeholder="Nama Kelas">
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
    $('#kelas').DataTable({
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





@endpush

