@extends('template.head')
@section('title', 'SIAKAD - Data Jadwal Kuliah')
@section('heading', 'Data Jadwal Kuliah')
@section('page', 'Data Jadwal Kuliah')
@section('content')

<div class="col-md-12">
    <div class="card">
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
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
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


@endpush

