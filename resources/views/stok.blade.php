@extends('admin.navbar')
@section('main')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Stok Buku</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active">Stok</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Jumlah Stok Buku berdasarkan Jenis</h5>

              <!-- Pie Chart -->
              <div id="pieChart"></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  new ApexCharts(document.querySelector("#pieChart"), {
                    series: [44, 55, 13, 43, 22],
                    chart: {
                      height: 350,
                      type: 'pie',
                      toolbar: {
                        show: true
                      }
                    },
                    labels: ['Akuntansi', 'Teknologi', 'Sains', 'Non Fiksi', 'Fiksi']
                  }).render();
                });
              </script>
              <!-- End Pie Chart -->

            </div>
          </div>
        </div>

        <div class="col-lg-6">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Daftar Jenis Buku</h5>
  
                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Jenis Buku</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Penyalur</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Akuntansi</td>
                      <td>40</td>
                      <td>Perpusnas</td>
                      <td>
                        <a class="button-edit"><i class="bx bx-right-arrow-alt"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Teknologi</td>
                      <td>58</td>
                      <td>Perpusnas</td>
                      <td>
                        <a class="button-edit"><i class="bx bx-right-arrow-alt"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Sains</td>
                      <td>18</td>
                      <td>Perpusnas</td>
                      <td>
                        <a class="button-edit"><i class="bx bx-right-arrow-alt"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Non Fiksi</td>
                      <td>28</td>
                      <td>Perpusnas</td>
                      <td>
                        <a class="button-edit"><i class="bx bx-right-arrow-alt"></i></a>
                      </td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Fiksi</td>
                      <td>25</td>
                      <td>Perpusnas</td>
                      <td>
                        <a class="button-edit"><i class="bx bx-right-arrow-alt"></i></a>
                      </td>
                    </tr>
                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>
  
          </div>

      </div>
    </section>

</main><!-- End #main -->

@endsection