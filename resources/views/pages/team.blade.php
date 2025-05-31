<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>meet our team</title>
  <link rel="icon" href="{{ asset('assets/image/image (6).png') }}">
  <link rel="stylesheet" href="{{ asset('assets/gof-css/meet-our-team.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: #FFF0F0;height:200vh;">
  <x-header />

  <x-nav-bar />

  <section class="second-hero py-5">
    <div class="container">
      <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">Meet Our Team</h3>
      <p class="lead">
        At GOF International School, our dedicated team fosters academic excellence and student success, creating an
        environment where learners thrive.
      </p>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-12 col-md-6 mb-4 mb-md-0 text-center">
          <img src="{{ asset('assets/image/pricipal.png') }}" alt="GOF Image" class="img-fluid w-100 section-create3"
            style="max-width: 500px;">
        </div>

        <!-- Text Column -->
        <div class="col-12 col-md-6">
          <h1 class="mb-4 section-create">Message from the Principal</h1>
          <p class="section-create2">
            Dear Parents, Students, and Staff,
            Welcome to GOF International School, where excellence, innovation, and character development are at the
            heart of our mission. Our goal is to nurture well-rounded individuals who excel academically, think
            critically, and contribute meaningfully to society. At GOF International School, we provide a supportive
            learning environment where students are encouraged to explore, question, and grow. With a dedicated team of
            educators and a strong academic foundation, we equip our students with the skills needed to succeed in an
            ever-changing world.We believe that education is a partnership between the school, parents, and the
            community. Together, we can inspire and empower the next generation of leaders.
          </p>
          <p class="section-create2">
            thank you for being part of the GOF International School family. Let’s continue to strive for excellence!
          </p>
          <p class="fw-bold">- [Principal Name]</p>
          <p>Principal GOF International School</p>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto text-center py-2 px-4">
    <h4 class="text-2xl font-semibold mb-6">Leadership Team</h4>
  </section>

  <section class="container">
    <div class="row justify-content-center  position-relative">

      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center py-5">
        <div class="card team" style="width: 18rem;">
          <img src="{{ asset('assets/image/Image (31).png') }}" class="card-img-top" alt="Proprietor">
          <div class="card-body text-center team-name">
            <h5 class="card-title name">[Proprietor’s Name]</h5>
            <p class="card-text name2">Proprietor</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center py-5 ">
        <div class="card team" style="width: 18rem;">
          <img src="{{ asset('assets/image/Image (32).png') }}" class="card-img-top" alt="Proprietress">
          <div class="card-body text-center team-name">
            <h5 class="card-title name">[Proprietress’s Name]</h5>
            <p class="card-text name2">Proprietress</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center py-5">
        <div class="card team" style="width: 18rem;">
          <img src="{{ asset('assets/image/Image (33).png') }}" class="card-img-top" alt="Principal">
          <div class="card-body text-center team-name">
            <h5 class="card-title name">[Principal’s Name]</h5>
            <p class="card-text name2">Principal</p>
          </div>
        </div>
      </div>

    </div>
  </section>


  <section class="max-w-7xl mx-auto pb-4 text-center py-5 ">
    <h4 class="text-2xl font-semibold mb-6">Academic & Administrative Team</h4>
  </section>
  <section class="container py-3">
    <div class="row justify-content-center gy-4 position-relative">

      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center py-4">
        <div class="card team" style="width: 18rem;">
          <img src="{{ asset('assets/image/Image (32).png') }}" class="card-img-top" alt="Proprietor">
          <div class="card-body text-center team-name">
            <h5 class="card-title name">[[Vice Principal Name]]</h5>
            <p class="card-text name2">Vice Principal (Academics)</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center py-4">
        <div class="card team" style="width: 18rem;">
          <img src="{{ asset('assets/image/Image (34).png') }}" class="card-img-top" alt="Proprietress">
          <div class="card-body text-center team-name">
            <h5 class="card-title name">[Registrar Name]</h5>
            <p class="card-text name2">[Registrar]</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center py-4">
        <div class="card team" style="width: 18rem;">
          <img src="{{ asset('assets/image/Image (35).png') }}" class="card-img-top" alt="Principal">
          <div class="card-body text-center team-name">
            <h5 class="card-title name">[HOD Science Name]</h5>
            <p class="card-text name2">HOD Science Department</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="container py-4">
    <div class="row justify-content-center gy-4 position-relative">

      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center py-4">
        <div class="card team" style="width: 18rem;">
          <img src="{{ asset('assets/image/Image (32).png') }}" class="card-img-top" alt="Proprietor">
          <div class="card-body text-center team-name">
            <h5 class="card-title name">[HOD Commercial] </h5>
            <p class="card-text name2">HOD Commercial Department</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center py-4">
        <div class="card team" style="width: 18rem;">
          <img src="{{ asset('assets/image/Image (33).png') }}" class="card-img-top" alt="Proprietress">
          <div class="card-body text-center team-name">
            <h5 class="card-title name">[Name]</h5>
            <p class="card-text name2">Sports Director</p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-4 d-flex justify-content-center py-4">
        <div class="card team" style="width: 18rem;">
          <img src="{{ asset('assets/image/Image (34).png') }}" class="card-img-top" alt="Principal">
          <div class="card-body text-center team-name">
            <h5 class="card-title name">[Name]</h5>
            <p class="card-text name2">Coordinator</p>
          </div>
        </div>
      </div>
    </div>
  </section>



  <x-enroll-btn class="mt-5" />
  <x-footer />






  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>
</body>

</html>