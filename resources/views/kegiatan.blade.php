@extends('admin.navbar')
@section('main')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Kegiatan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Data</li>
          <li class="breadcrumb-item active">Kegiatan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">

        <div class="col-lg-6">
            <a href="/dashboard/kegiatan/1" class="card kegiatan">
              <div class="card-body">
                <h5 class="card-title kegiatan-title">Rumping Kodok Ngorek</h5>
              </div>
            </a>
        </div>

        <div class="col-lg-6">
            <a href="/dashboard/kegiatan/1" class="card kegiatan">
              <div class="card-body">
                <h5 class="card-title kegiatan-title">Riubrik School</h5>
              </div>
            </a>
        </div>

      </div>
      <div class="row">

        <div class="col-lg-6">
            <a href="/dashboard/kegiatan/1" class="card kegiatan">
              <div class="card-body">
                <h5 class="card-title kegiatan-title">Satoe Atap</h5>
              </div>
            </a>
        </div>

        <div class="col-lg-6">
            <a href="/dashboard/kegiatan/1" class="card kegiatan">
              <div class="card-body">
                <h5 class="card-title kegiatan-title">Rumah Pintar Bangjo</h5>
              </div>
            </a>
        </div>

      </div>
    </section>

</main><!-- End #main -->

@endsection