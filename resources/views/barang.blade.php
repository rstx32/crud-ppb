@extends('admin.master')
@section('content')
<!-- Sidebar -->
<div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
              <li class="nav-item">
                <a href="./home" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./barang" class="nav-link active">
                <i class="nav-icon fas fa-th"></i>
                  <p>Barang</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./pelanggan" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                  <p>Pelanggan</p>
                </a>
              </li>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="card mt-5">
                <div class="card-body">
                    <h1 class="text-center text-dark">Daftar Barang</h1>
                    <a href="/barang/tambah" class="btn btn-primary">Input Barang Baru</a>
                    <a href="/barang/cetak_pdf" class="btn btn-danger my-3" target="_blank">CETAK PDF</a>
                    <a href="/barang/export_excel" class="btn btn-success my-3" target="_blank">EXPORT EXCEL</a>
                    <br>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th class="text-center">Kode Barang</th>
                                <th class="text-center">Nama Barang</th>
                                <th class="text-center">Harga</th>
                                <th class="text-center">Gambar</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barang as $p)
                            <tr>
                                <td class="text-center">{{ $p->kd_brg }}</td>
                                <td class="text-center">{{ $p->nm_brg }}</td>
                                <td class="text-center">Rp. {{ $p->harga }}</td>
                                <td class="text-center"><img src="{{ $p->image }}" width="250" height="200"></td>
                                <td class="text-center">{{ $p->deskripsi }}</td>
                                <td class="text-center">
                                    <a href="/barang/edit/{{ $p->kd_brg }}" class="btn btn-warning">Edit</a>
                                    <a href="/barang/hapus/{{ $p->kd_brg }}" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection