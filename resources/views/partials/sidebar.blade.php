<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ route('Home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <!-- General Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#general-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-front"></i><span>General</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="general-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('ticket') }}">
              <i class="bi bi-circle"></i><span>List Tiket</span>
            </a>
          </li>
          <li>
            <a href="{{ route('task') }}">
              <i class="bi bi-circle"></i><span>Perintah Kerja</span>
            </a>
          </li>
        </ul>
      </li><!-- End General Nav -->

      <!-- ict Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#ict-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-slack"></i><span>I C T</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="ict-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('solving') }}">
              <i class="bi bi-circle"></i><span>Penanganan Kendala</span>
            </a>
          </li>
          <li>
            <a href="{{ route('reqaset') }}">
              <i class="bi bi-circle"></i><span>Permintaan Aset</span>
            </a>
          </li>
        </ul>
      </li><!-- End ict Nav -->

      <!-- Operational Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people"></i><span>Operational</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Menu & BOM</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Program Promo</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Discount</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Selisi Harga</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Void</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>List Outlet</span>
            </a>
          </li>
        </ul>
      </li><!-- End Operational Nav -->

      <!-- F A T Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bx bx-dollar-circle"></i><span>F A T</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>COA</span>
            </a>
          </li>
        </ul>
      </li><!-- End FAT Nav -->

      <!-- Purchasing Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-basket2"></i><span>Purchasing</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Product</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Supplier</span>
            </a>
          </li>
        </ul>
      </li><!-- End Purchasing Nav -->

      <!-- Data master Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#master-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-stack"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="master-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Bisnis Unit</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Divis</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Karyawan</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Aset</span>
            </a>
          </li>
        </ul>
      </li><!-- End Purchasing Nav -->

      <!-- Data pengaturan Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pengaturan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-gear"></i><span>Pengaturan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pengaturan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Tiket Kategori</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Aset Kategori</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Akun Role</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>List Akun</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>FaQ</span>
            </a>
          </li>
        </ul>
      </li><!-- End Purchasing Nav -->

    </ul>

  </aside><!-- End Sidebar-->
