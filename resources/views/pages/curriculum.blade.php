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

  <section class="py-5 second-hero">
    <div class="container">
      <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">Our Curriculum</h3>
      <p class="text-center lead">
        At GOF International School, our curriculum fosters excellence, creativity, and critical thinking for future
        success.
      </p>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="">
        <div class="py-2">
          <h2 class="text-center ">Our Curricular Activities</h2>
          <p class="mx-auto">
            At GOF International Schools, our diverse range of curricular activities ensures that every student receives
            a well-rounded education. From a comprehensive academic program to STEAM innovation, creative arts, and
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
            <img src="{{ asset('assets/image/Icon Container (2).png') }}" alt="IGCSE" class="mb-3 img-fluid">
            <h5 class="card-title">IGCSE</h5>
            <p class="card-text">
            At GOF International Schools, the IGCSE (International General Certificate of Secondary Education) 
            curriculum offers a comprehensive and internationally recognized academic program. Students build a 
            strong foundation in subjects such as English Language & Literature, Mathematics, Physics, Chemistry, 
            Biology, ICT & Digital Literacy, and Humanities. The program encourages 
            analytical thinking, creativity, and global awareness, preparing students for further education and 
            future success.
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100 border-card">
          <div class="bg-white card-body">
            <img src="{{ asset('assets/image/Icon Container (1).png') }}" alt="IB" class="mb-3 img-fluid">
            <h5 class="card-title">IB</h5>
            <p class="card-text">
            At GOF International Schools, the International Baccalaureate (IB) programme 
            offers a rigorous and balanced education that prepares students for success at 
            university and life beyond. The curriculum promotes critical thinking, intercultural understanding, 
            and exposure to a variety of academic disciplines including Languages, Sciences, 
            Mathematics, Humanities, and the Arts. Students are encouraged to become lifelong learners and global citizens.
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100 border-card">
          <div class="bg-white card-body">
            <img src="{{ asset('assets/image/Icon Container (1).png') }}" alt="WAEC/NECO" class="mb-3 img-fluid">
            <h5 class="card-title">WAEC/NECO</h5>
            <p class="card-text">
            At GOF International Schools, the WAEC and NECO curriculum provides students 
            with a strong academic foundation in core subjects such as English Language, 
            Mathematics, Sciences, Social Studies, and Vocational Studies. The program prepares 
            students for national examinations while also 
            nurturing discipline, critical thinking, and leadership through character education
             and extracurricular activities.
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