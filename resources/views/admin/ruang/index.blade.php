@extends('template.head')
@section('title', 'SIAKAD - Data Ruang')
@section('heading', 'Data Ruang')
@section('page', 'Data Ruang')
@section('content')

        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">
                  <a href="{{ url('/ruangs/tambah') }}" class="btn btn-primary">Tambah Data</a>                
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="ruangs" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th>Nama Ruang</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($ruangs as $ruang)
                  <tr>
                    <td>{{ $ruang->nama_ruang }}</td>
                    <td>
                      <form action="#" method="post">
                            @csrf
                            @method('delete')
                           
                            <a href="#" class="btn btn-success btn-sm mt-2"><i class="nav-icon fas fa-edit"></i> &nbsp; Edit</a>
                            <button class="btn btn-danger btn-sm mt-2"><i class="nav-icon fas fa-trash-alt"></i> &nbsp; Hapus</button>
                      </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
                <tfoot>
                  <tr>
                    <th>Nama Ruang</th>
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
    $('#ruangs').DataTable({
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

