@extends('admin.navbar')
@section('main')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Daftar Kegiatan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item">Kegiatan</li>
          <li class="breadcrumb-item active">Rumping</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-12">

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Kegiatan Rumping Kodok Ngorek</h5>
  
                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nama Kegiatan</th>
                      <th scope="col">Jumlah Peserta</th>
                      <th scope="col">Tempat Kegiatan</th>
                      <th scope="col">Tanggal Mulai</th>
                      <th scope="col">Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">1</th>
                      <td>Rumping Week</td>
                      <td>15</td>
                      <td>Aula Senayan</td>
                      <td>18-Agustus-2023</td>
                      <td><span class="badge bg-warning">Belum Terlaksana</span></td>
                    </tr>
                    <tr>
                      <th scope="row">2</th>
                      <td>Weekend Seru</td>
                      <td>20</td>
                      <td>Lapangan Simpang Lima</td>
                      <td>01-Juli-2023</td>
                      <td><span class="badge bg-success">Terlaksana</span></td>
                    </tr>
                    <tr>
                      <th scope="row">3</th>
                      <td>Cerdas Cermat</td>
                      <td>18</td>
                      <td>Workspace Nadya</td>
                      <td>25-Juli-2023</td>
                      <td><span class="badge bg-success">Terlaksana</span></td>
                    </tr>
                    <tr>
                      <th scope="row">4</th>
                      <td>Bincang Hangat</td>
                      <td>22</td>
                      <td>Aula Jusuf Anwar</td>
                      <td>30-Juli-2023</td>
                      <td><span class="badge bg-warning">Belum Terlaksana</span></td>
                    </tr>
                    <tr>
                      <th scope="row">5</th>
                      <td>Curhat Seru</td>
                      <td>16</td>
                      <td>Aula Ex-Ma</td>
                      <td>13-Juli-2023</td>
                      <td><span class="badge bg-success">Terlaksana</span></td>
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