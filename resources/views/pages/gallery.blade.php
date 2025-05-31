<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery</title>
  <link rel="icon" href="{{ asset('assets/image/image (6).png') }}">
  <link rel="stylesheet" href="{{ asset('assets/gof-css/gallery.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style=" background-color: #FFF0F0; height:150vh;">
  <x-header />
  <x-nav-bar />



  <section class="second-hero py-5">
    <div class="container">
      <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">Our Gallery</h3>
      <p class="lead">
        At GOF International Schools, we offer modern facilities that foster academic excellence and holistic growth.
      </p>
    </div>
  </section>

  <section class="py-5">
    <div class="container text-center">
      <h3 class="mb-3 text-center">Our Gallery</h3>
      <p class="event-text">
        Our blog is a treasure trove of informative and engaging articles written by our team of nutritionists,
        dietitians, and wellness experts. Here's what you can expect from our blog.
      </p>
    </div>
  </section>

  <section class="container py-4">
    <div class="row justify-content-center g-3">
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (20).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (17).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (18).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (19).png') }}" alt="" class="img-fluid rounded">
      </div>

      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (21).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (22).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (23).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (24).png') }}" alt="" class="img-fluid rounded">
      </div>

      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (22).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (27).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (28).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (23).png') }}" alt="" class="img-fluid rounded">
      </div>

      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (22).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (27).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (28).png') }}" alt="" class="img-fluid rounded">
      </div>
      <div class="col-6 col-sm-4 col-md-3 text-center">
        <img src="{{ asset('assets/image/Image (23).png') }}" alt="" class="img-fluid rounded">
      </div>
    </div>
  </section>

  <section>
    <div class="container d-flex justify-content-between align-items-center py-3 flex-wrap">
      <p class="mb-2 mb-md-0 fw-bold">1/5</p>

      <div class="d-flex gap-2 ms-auto">
        <p class="button-class"> <span> <i class="bi bi-arrow-left"></i></span>Prev</p>
        <p class="button-class2">Next <span><i class="bi bi-arrow-right"></i></span></p>
      </div>
    </div>
  </section>

  <x-enroll-btn />

  <x-footer />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>
</body>

</html>