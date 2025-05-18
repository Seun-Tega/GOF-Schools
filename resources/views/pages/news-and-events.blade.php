<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>News and Events</title>
  <link rel="icon" href="{{ asset('assets/image/image (6).png') }}">
  <link rel="stylesheet" href="{{ asset('assets/gof-css/news-event.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body style="background-color: #FFF0F0; height: 200vh;">


  <x-header />
  <x-nav-bar />

  <section class="second-hero py-5">
    <div class="container  ">
      <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">Our News & Events</h3>
      <p class="lead">
        At GOF International Schools, we offer modern facilities that foster academic excellence and holistic growth.
      </p>
    </div>
  </section>
  <section class="latest-posts container my-5">
    <div class="row align-items-center gy-3">
      <!-- Heading -->
      <div class="col-12 col-md-auto">
        <h4 class="latest">Latest posts</h4>
      </div>

      <!-- Buttons -->
      <div class="col-12 col-md d-flex flex-wrap justify-content-md-end gap-2">
        <a class=" button5 filter filtered" href="#" data-type="all">All</a>
        <a class=" button6 filter" href="#" data-type='nigeria'>Nigeria</a>
        <a class=" button7 filter" href="#" data-type="cote">Côte d'Ivoire</a>
      </div>
    </div>
  </section>


  <section class="container my-4">
    <div class="row row-cols-1 row-cols-md-3 g-4 card-wrapper">


  </section>




  <section>
    <div class="container d-flex justify-content-between align-items-center py-4 flex-wrap">
      <p class="mb-2 mb-md-0 pagination-info">1/5</p>


      {{-- <div class="d-flex gap-2 ms-auto">
        <p class=" button-class"> <span> <i class="bi bi-arrow-left"></i></span>Prev</p>
        <p class=" button-class2">Next <span><i class="bi bi-arrow-right"></i></span></p>
      </div>
    </div> --}}

    <div class="d-flex gap-2 ms-auto">
      <button class="btn btn-outline-dark button-class">
        <i class="bi bi-arrow-left me-1"></i> Prev
      </button>
      <button class="btn btn-dark button-class2">
        Next <i class="bi bi-arrow-right ms-1"></i>
      </button>
    </div>

  </section>

  <x-enroll-btn />

  <x-footer />



  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init({
          duration: 800, // duration of animation in ms
          once: true     // only animate once
        });
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>
  <script src="{{ asset('assets/scripts/news.js') }}"></script>

</body>

</html>