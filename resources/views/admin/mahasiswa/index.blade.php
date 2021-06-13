@extends('template.head')
@section('title', 'SIAKAD - Data Mahasiswa')
@section('heading', 'Data Mahasiswa')
@section('page', 'Data Mahasiswa')
@section('content')

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                  <a href="{{ url('/data-mhs/tambah') }}" class="btn btn-primary">Tambah Mahasiswa</a>                
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="mhs1" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Semester</th>
                    <th>Prodi</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($mahasiswa as $mhs)
                  <tr>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->gender }}</td>
                    <td>{{ $mhs->address }}</td>
                    <td>{{ $mhs->noHP }}</td>
                    <td>{{ $mhs->semester }}</td>
                    <td>{{ $mhs->prodi }}</td>
                    <td>
                      <form action="{{ url('/data-mhs/'. $mhs->id ) }}" method="post">
                            @csrf
                            @method('delete')
                           
                            <a href="{{ url('/data-mhs/'. $mhs->id .'/edit') }}" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. HP</th>
                    <th>Semester</th>
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
    $('#mhs1').DataTable({
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

