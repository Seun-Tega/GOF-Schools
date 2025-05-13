<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>curriculum</title>
  <link rel="icon" href="{{ asset('assets/image/image (6).png') }}">
  <link rel="stylesheet" href="{{ asset('assets/gof-css/curriculum.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: #FFF0F0; height: 200vh;">
  <x-header />
  <x-nav-bar />

  <section class="second-hero py-5">
    <div class="container">
      <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">Our Curriculum</h3>
      <p class="lead text-center">
        At GOF International School, our curriculum fosters excellence, creativity, and critical thinking for future
        success.
      </p>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="">
        <div class="py-2">
          <h2 class=" text-center">Our Curricular Activities</h2>
          <p class="mx-auto">
            At GOF International Schools, our diverse range of curricular activities ensures that every student receives
            a well-rounded education. From a comprehensive academic program to STEM innovation, creative arts, and
            physical education, we cater to every aspect of intellectual and personal development.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="container">
    <div class="row g-4">
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100 border-card">
          <div class="card-body">
            <img src="{{ asset('assets/image/Icon Container (2).png') }}" alt="IGCSE" class="img-fluid mb-3">
            <h5 class="card-title">IGCSE</h5>
            <p class="card-text">
              We provide a strong academic foundation through English Language & Literature, Mathematics, Science
              (Physics, Chemistry, Biology), Social Studies & History, and ICT & Digital Literacy, ensuring a
              well-rounded education.
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100 border-card">
          <div class="card-body bg-white">
            <img src="{{ asset('assets/image/Icon Container (1).png') }}" alt="IB" class="img-fluid mb-3">
            <h5 class="card-title">IB</h5>
            <p class="card-text">
              At GOF International Schools our physical development involves Sports & Physical Education – Promoting
              fitness, teamwork, and discipline. Character & Leadership Training – Instilling strong values and
              leadership skills.
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100 border-card">
          <div class="card-body bg-white">
            <img src="{{ asset('assets/image/Icon Container (1).png') }}" alt="WAEC/NECO" class="img-fluid mb-3">
            <h5 class="card-title">WAEC/NECO</h5>
            <p class="card-text">
              At GOF International Schools our physical development involves Sports & Physical Education – Promoting
              fitness, teamwork, and discipline. Character & Leadership Training – Instilling strong values and
              leadership skills.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <x-enroll-btn  class="mt-5"/>

  <x-footer />





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>
  <script src="circulum.js"></script>


</body>

</html>