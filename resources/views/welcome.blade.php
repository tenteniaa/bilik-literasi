<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Bilik Literasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/buku/logo.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  {{ asset('assets/img/global/cover2.svg') }}
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Vesperr
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/vesperr-free-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="/">
            <img
              src="{{ asset('assets/img/buku/logo.png') }}"
              alt="Bilik Literasi"
              class="img-fluid"
              />
        </a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#services">Baca Online</a></li>
          <li><a class="nav-link scrollto" href="#pinjam">Pinjam Buku</a></li>
          <li><a class="nav-link scrollto" href="#donasi">Donasi Buku</a></li>
          {{-- <li><a class="nav-link scrollto " href="#program">Program</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li> --}}
          <li class="dropdown"><a href="#"><span>Program</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li><a class="getstarted scrollto" href="#login">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-8 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up" style="font-family: 'Frank Ruhl Libre';">Find the Best Reading</h1>
          <h2 data-aos="fade-up" data-aos-delay="400" class="col-lg-7 mt-3" style="font-family: 'Inter';
           font-size: 20px;">membaca sejak dini dapat memperkaya kosa kata, 
              meningkatkan kecepatan membaca, meningkatkan pemahaman mengenai makna, struktur kata, 
              dan lain sebagainya</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#baca" class="btn-get-started scrollto">Cari Buku</a>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/buku/Buku-Bacaan-Seri-Anak-Hebat.png" class="animated" 
          height="380"
          alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Book Section ======= -->
    <section id="services" class="services">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>BUKU TERBARU</h2>
          </div>
  
          <div class="row">
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="cerita-anak icon-box" data-aos="fade-up" data-aos-delay="100">
                {{-- <div class="icon"><i class="bx bxl-dribbble"></i></div> --}}
                <h4 class="title"><a href="">CERITA ANAK</a></h4>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="anak-berbakti icon-box" data-aos="fade-up" data-aos-delay="200">
                {{-- <div class="icon"><i class="bx bx-file"></i></div> --}}
                <h4 class="title"><a href="">ANAK-ANAK YANG BERBAKTI</a></h4>
              </div>
            </div>
  
            <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="mainan-dika icon-box" data-aos="fade-up" data-aos-delay="300">
                {{-- <div class="icon"><i class="bx bx-tachometer"></i></div> --}}
                <h4 class="title"><a href="">MAINAN BARU DIKA</a></h4>
              </div>
            </div>
          </div>
  
        </div>
    </section><!-- End Book Section -->

    <!-- ======= Profile Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>PROFIL LAYANAN</h2>
        </div>

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/buku/profil-layanan.png" alt="" class="img-fluid">
          </div>

          <div class="col-xl-6 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
                <div class="count-box">
                  <i class="bi bi-emoji-smile"></i>
                  <p><strong>Bilik Literasi</strong> merupakan sebuah website layanan publik yang ditujukan untuk 
                   komunitas anak anak di Kota Semarang yang terintegrasi oleh dinas arsip dan perpustakaan Kota Semarang, 
                   perpustakaan Kota Semarang dan para donatur buku</p>
                </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Profile Section -->

    <!-- ======= Community Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
            <h2>OUR COMMUNITY</h2>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/buku/rumping-kodok.png");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">RUMPING KODOK NGOREK</a></h5>
                {{-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div> --}}
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("assets/img/buku/riubrik-school.png");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">RIUBRIK SCHOOL</a></h5>
                {{-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div> --}}
              </div>
            </div>

          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/buku/satoe-atap.png");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">SATOE ATAP</a></h5>
                {{-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div> --}}
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/buku/rumah-pintar-bangjo.png");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">RUMAH PINTAR BANGJO</a></h5>
                {{-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div> --}}
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Community Section -->

    <!-- ======= Program Section ======= -->
    <section id="team" class="team">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Program</h2>
          </div>

          <div class="card p-5">
            <div class="row">
              <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Program Terbaru</h1>
                <h3 data-aos="fade-up" data-aos-delay="400">Bedah buku anak bersama komunitas anak se-Kota Semarang </h3>
                <div class="col-lg-12">
                    <div data-aos="fade-up" data-aos-delay="800">
                        <div class="col-lg-3 times scrollto fw-bold text-center">08
                            <p>Days</p>
                        </div>
                        <div class="col-lg-3 times scrollto fw-bold text-center">09
                            <p>Hours</p>
                        </div>
                        <div class="col-lg-3 times scrollto fw-bold text-center">14
                            <p>Min</p>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-up" data-aos-delay="800">
                  <a href="#about" class="btn-get-started scrollto">DAFTAR</a>
                </div>
              </div>
              <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="assets/img/buku/bedah-buku.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
  
        </div>
    </section><!-- End Program Section -->

    <!-- ======= People's Say Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>What People Say</h2>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/buku/maudy-ayunda.jpg" class="testimonial-img" alt="">
                  <h3>Maudy Ayunda</h3>
                  <h4>Penyanyi</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Membaca buku akan memiliki pengetahuan yang sangat luas dibandingkan hal lainnya.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/buku/sherina-munaf.jpg" class="testimonial-img" alt="">
                  <h3>Sherina Munaf</h3>
                  <h4>Penyanyi</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Saya suka membaca buku sebab membaca buku itu tidak ada ruginya bagi kita.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/buku/tatjana-saphira.jpg" class="testimonial-img" alt="">
                  <h3>Tatjana Shapira</h3>
                  <h4>Aktris</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Membaca buku merupakan kegiatan yang sangat mengasyikkan sebab membaca buku dapat memberi efek relaksasi dan menghilangkan penat.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End People's Say Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>Atina Uswati</h3>
              <p>Purpose in my life is making positive impact for environment and inspire people, 
                  i feel that purpose comes alive every time i work on an insightful campaign and deliver it 
                  to the people around me. That's why. I'm passionate into public speaking and 
                  lead the organization.</p>
              <div class="social-links">
                {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a> --}}
                <a href="mailto:atinauww@gmail.com" class="envelope"><i class="bi bi-envelope"></i></a>
                <a href="https://www.linkedin.com/in/atinauswati/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                <a href="https://www.instagram.com/atiiinaaaa/" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="https://wa.me/083838891947" class="whatsapp"><i class="bi bi-whatsapp"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>PRP II Sriwulan<br>Jawa Tengah, 59563</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p>atinauww@gmail.com</p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p>+62 838-3889-1947</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            &copy; Copyright <strong>2023</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/vesperr-free-bootstrap-template/ -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">Home</a>
            <a href="#about" class="scrollto">About</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Use</a>
          </nav>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ ('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ ('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ ('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ ('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ ('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ ('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ ('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ ('assets/js/main.js') }}"></script>

</body>

</html>