@extends('template.head')
@section('title', 'SIAKAD - Data Dosen')
@section('heading', 'Data Dosen')
@section('page', 'Data Dosen')
@section('content')

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                  <a href="{{ url('/data-dosen/tambah') }}" class="btn btn-primary">Tambah Data</a>                
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="dosen" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Pengampu Matkul</th>
                    <th>Prodi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($dosens as $dosen)
                  <tr>
                    <td>{{ $dosen->nama }}</td>
                    <td>{{ $dosen->nip }}</td>
                    <td>{{ $dosen->gender }}</td>
                    <td>{{ $dosen->address }}</td>
                    <td>{{ $dosen->noHP }}</td>
                    <td>{{ $dosen->pengampu_matkul }}</td>
                    <td>{{ $dosen->prodi }}</td>
                    <td>
                      <form action="{{ url('/data-dosen/'. $dosen->id ) }}" method="post">
                            @csrf
                            @method('delete')
                           
                            <a href="{{ url('/data-dosen/'. $dosen->id .'/edit') }}" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Pengampu Matkul</th>
                    <th>Prodi</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
              </table>
            </div ><!-- /.card-body -->

              <div class="card-footer clearfix">
                <a href="{{ url('/dashboard') }}" >Dasboard</a>
              </div><!-- /.card footer-->

          </div>     <!-- /.card -->
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
    $('#dosen').DataTable({
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

