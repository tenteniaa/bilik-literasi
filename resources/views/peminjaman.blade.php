@extends('admin.navbar')
@section('main')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Peminjaman Buku</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active">Buku</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Daftar Peminjaman Buku</h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Judul Buku</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Status</th>
                    <th scope="col">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Tenia Febrianti</td>
                    <td>Teknik Dasar HTML & CSS</td>
                    <td>02-Juli-2023</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                    <td>
                      <a href="/dashboard/peminjaman/edit" class="button-edit"><i class="bx bx-pencil"></i></a>
                      <a class="button-delete"><i class="bx bx-x"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Bridie Kessler</td>
                    <td>Little Women</td>
                    <td>22-Juli-2023</td>
                    <td><span class="badge bg-warning">Dipinjam</span></td>
                    <td>
                      <a href="/dashboard/peminjaman/edit" class="button-edit"><i class="bx bx-pencil"></i></a>
                      <a class="button-delete"><i class="bx bx-x"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Ashleigh Langosh</td>
                    <td>Akuntansi Dasar</td>
                    <td>19-Juli-2023</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                    <td>
                      <a href="/dashboard/peminjaman/edit" class="button-edit"><i class="bx bx-pencil"></i></a>
                      <a class="button-delete"><i class="bx bx-x"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">4</th>
                    <td>Raheem Lehner</td>
                    <td>Sejarah Dunia</td>
                    <td>24-Juli-2023</td>
                    <td><span class="badge bg-warning">Dipinjam</span></td>
                    <td>
                      <a href="/dashboard/peminjaman/edit" class="button-edit"><i class="bx bx-pencil"></i></a>
                      <a class="button-delete"><i class="bx bx-x"></i></a>
                    </td>
                  </tr>
                  <tr>
                    <th scope="row">5</th>
                    <td>Brandon Jacob</td>
                    <td>Percy Jackson</td>
                    <td>10-Juli-2023</td>
                    <td><span class="badge bg-success">Selesai</span></td>
                    <td>
                      <a href="/dashboard/peminjaman/edit" class="button-edit"><i class="bx bx-pencil"></i></a>
                      <a class="button-delete"><i class="bx bx-x"></i></a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

</main><!-- End #main -->

@endsection