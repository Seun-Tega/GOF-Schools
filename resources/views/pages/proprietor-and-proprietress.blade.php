<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>propertior and propertress</title>
  <link rel="icon" href="{{ asset('assets/image/image (6).png') }}">
  <link rel="stylesheet" href="{{ asset('assets/gof-css/propertior-and-propertress.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style=" background-color: #FFF0F0;height: 200vh;">

  <x-header />

  <x-nav-bar />

  <section class="second-hero py-5">
    <div class="container text-center text-md-start">
      <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">
        Welcome to GOF International School
      </h3>
      <p class="lead">
        A brief, compelling introduction about the GOF Mission, vision and impact in the education sector.
      </p>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-12 col-md-6 mb-4 mb-md-0 text-center">
          <img src="{{ asset('assets/image/propertor.png') }}" alt="GOF Image" class="img-fluid w-100 section-create3"
            style="max-width: 500px;">
        </div>

        <!-- Text Column -->
        <div class="col-12 col-md-6">
          <h1 class="mb-4 section-create">A Word from the Proprietor</h1>
          <p class="section-create2">
            Welcome to GOF International Schools, where tradition meets innovation. At GOF International Schools, we are
            proud to offer a Blended Curriculum that harmoniously integrates both national and international educational
            standards. This approach empowers our students with a well-rounded academic foundation, global awareness,
            and the critical skills needed to thrive in an ever-evolving world. Our vision is to nurture confident,
            curious, and compassionate learners who are equipped not just with knowledge, but with character and
            competence. Through our commitment to academic excellence, modern teaching methods, and a safe, inclusive
            environment, we provide every student with the opportunity to discover and fulfill their unique potential.
            As the Proprietor, I invite you to explore our dynamic learning community. Together with our dedicated
            staff, supportive parents, and enthusiastic learners, we are building a future rooted in excellence and
            driven by purpose.
          </p>
          <p class="section-create2">
            Thank you for visiting our website.We look foward to welcoming you to our school family.
          </p>
          <p>Warm regards.</p>
          <p class="fw-bold">- Olugbenga Olowe, JP</p>
          <p>Proprietor, GOF International Schools, Nigeria & Cote D'Ivoire.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Image Column -->


        <!-- Text Column -->
        <div class="col-12 col-md-6 pb-4 text-center">
          <h1 class="section-create">A Message from the Proprietress</h1>
          <p class="section-create2">
            As an institution dedicated to academic excellence and character development, GOF International School is
            more than just a place of learning—it is a home where young minds are nurtured to reach their full
            potential. We are passionate about providing a holistic education that balances intellectual growth with
            moral values. Every child is unique, and our goal is to create a learning environment that encourages
            curiosity, confidence, and resilience. With a team of dedicated educators, modern facilities, and a strong
            community, we ensure that each student is well-prepared for the future. Whether in academics, sports,
            leadership, or innovation, we believe that every child has the potential to succeed, and we are here to
            guide them every step of the way.
          </p>
          <p class="section-create2">
            We welcome you to GOF International School, where dreams take flight, and excellence is our standard."*
          </p>
          <p class="fw-bold">-Oyefunke Olowe</p>
          <p>Proprietress, GOF International School</p>
        </div>
        <div class="col-12 col-md-6 mb-4 mb-md-0 text-center">
          {{-- <img src="{{ asset('assets/image/image (30).png') }}" alt="GOF Image" class="img-fluid w-100 section-create4"
            style="max-width: 500px;"> --}}
        </div>
      </div>
    </div>
  </section>

  <x-enroll-btn/>

  <x-footer />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>
</body>

</html>