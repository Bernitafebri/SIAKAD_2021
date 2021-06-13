<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('Images/school.png')}}" alt="SIAKAD Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIAKAD</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        @if (auth()->user()->level=="admin")
          <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fas fa-edit"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-4">
              <li class="nav-item">
                <a href="{{ url('/jadwals') }}" class="nav-link ">
                  <i class="fas fa-calendar-alt nav-icon"></i>
                  <p>Data Jadwal</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/data-dosen') }}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                  <p>Data Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/data-mhs') }}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                    <p>Data Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/matkul') }}" class="nav-link">
                  <i class="fas fa-book nav-icon"></i>
                    <p>Data Mata Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/kelas') }}" class="nav-link">
                  <i class="fas fa-file-signature nav-icon"></i>
                    <p>Data Kelas</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/ruangs') }}" class="nav-link">
                  <i class="fab fa-buromobelexperte nav-icon"></i>
                    <p>Data Ruang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/users') }}" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                    <p>Data User</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-signature"></i>
              <p>
                  Nilai
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-4">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                    <p>Nilai Harian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                    <p>Nilai UTS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                    <p>Nilai UAS</p>
                </a>
              </li>
            </ul>
          </li>
          @endif

           @if (auth()->user()->level=="dosen")

          <li class="nav-item">
            <a href="{{ url('/data-mhs') }}" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
                  Data Mahasiswa
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-file-signature"></i>
              <p>
                  Nilai
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-4">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                    <p>Nilai Harian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                    <p>Nilai UTS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-file-alt nav-icon"></i>
                    <p>Nilai UAS</p>
                </a>
              </li>
            </ul>
          </li>
          @endif    

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-check"></i>
              <p>
                  Presensi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview ml-4">
              @if (auth()->user()->level=="dosen")
              <li class="nav-item">
                <a href="{{ url('/presensi-masuk-dosen')}}" class="nav-link">
                  <i class="fas fa-sign-in-alt nav-icon"></i>
                    <p>Masuk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/presensi-keluar-dosen')}}" class="nav-link">
                  <i class="fas fa-sign-out-alt nav-icon"></i>
                    <p>Keluar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('filter-data-dosen') }}" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                    <p>Rekap Presensi Dosen</p>
                </a>
              </li>
              @endif
              @if (auth()->user()->level=="admin")
              <li class="nav-item">
                <a href="{{ route('admin-data-dosen') }}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                    <p>Rekap Presensi Dosen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin-data-mhs') }}" class="nav-link">
                  <i class="fas fa-users nav-icon"></i>
                    <p>Rekap Presensi Mahasiswa</p>
                </a>
              </li>
              @endif


              @if (auth()->user()->level=="mahasiswa")
              <li class="nav-item">
                <a href="{{ url('/presensi-mhs') }}" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                    <p>Presensi Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('filter-data-mhs') }}" class="nav-link">
                  <i class="fas fa-user nav-icon"></i>
                    <p>Rekap Presensi Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{ url('/jadwals') }}" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
              <p>
                  Jadwal
              </p>
            </a>
          </li>      
          @endif


          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>

