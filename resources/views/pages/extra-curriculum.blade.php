<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Extra curriculum</title>
  <link rel="icon" href="{{ asset('assets/image/image (6).png') }}">
  <link rel="stylesheet" href="{{ asset('assets/gof-css/extra-curriculum.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: #FFF0F0;height:150vh;">
  <x-header />
  <x-nav-bar />

  <section class="second-hero py-5">
    <div class="container">
      <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">Our Cirriculum</h3>
      <p class="lead">
        At GOF International School, our curriculum fosters excellence, creativity, and critical thinking for future
        success.
      </p>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="">
        <div class="py-2">
          <h2 class="mb-4 text-center">Our Curriculum Overview</h2>
          <p class="mx-auto">
            At GOF International Schools, Osogbo, Nigeria & Cote D'Ivoire we offer a Blended Curriculum that integrates
            the best of both traditional classroom learning and digital instruction. Our curriculum is designed to cater
            to diverse learning styles, encourage critical thinking, and prepare students for the dynamic world ahead.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="container py-3">
    <div class="row justify-content-center g-4">
      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100 border-card">
          <div class="card-body">
            <img src="{{ asset('assets/image/Icon Container (2).png') }}" alt="IGCSE" class="img-fluid mb-3">
            <h5 class="card-title">Core Academic Subjects</h5>
            <p class="card-text">
             <p><b>English Language & Literature</b> : Emphasis on reading comprehension, writing, 
             speaking, and critical
             analysis.</p>
              <p><b>Mathematics: </b>Focused on problem-solving, logical reasoning, and real-life application.</p>
             <p><b>Science:</b>Inquiry-based learning across Biology, Chemistry, Physics, and Environmental Science.</p> 
             <p><b>Social Studies:</b>Exploring History, Geography, Civics, and Global Perspectives.</p> 
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100 border-card">
          <div class="card-body bg-white">
            <img src="{{ asset('assets/image/Icon Container.png') }}" alt="IB" class="img-fluid mb-3">
            <h5 class="card-title">Extra-Curricular Activities</h5>
            <p class="card-text">
              <p><b>Clubs: </b>Debate, Robotics, Gardening, Languages, Chess, and more.</p>
              <p><b>Competitions:</b> Inter-school and national-level events to challenge and inspire.</p>
              <p>Character & Global Citizenship: Values education promoting empathy, integrity, and leadership. Community
              service and sustainability projects to foster civic responsibilities.</p>
            </p>
          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-lg-4">
        <div class="card h-100 border-card">
          <div class="card-body bg-white">
            <img src="{{ asset('assets/image/Icon Container (1).png') }}" alt="WAEC/NECO" class="img-fluid mb-3">
            <h5 class="card-title">Digital Literacy & Technology</h5>
            <p class="card-text">
              Coding and computational thinking from an early stage. Use of Learning Management Systems (LMS) for
              assignments and resources. Cyber safety and responsible online behavior.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row justify-content-center g-4">
        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100 border-card">
            <div class="card-body ">
              <img src="{{ asset('assets/image/Icon Container.png') }}" alt="IGCSE" class="img-fluid mb-3">
              <h5 class="card-title">Creative Arts & Expression</h5>
              <p class="card-text">
                Visual Arts, Music, Drama, and Dance to nurture creativity and emotional intelligence. Opportunities to
                showcase talents through exhibitions and performances.
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100 border-card">
            <div class="card-body bg-white">
              <img src="{{ asset('assets/image/Icon Container (4).png') }}" alt="IB" class="img-fluid mb-3">
              <h5 class="card-title">Physical Education & Wellbeing</h5>
              <p class="card-text">
                Sports, fitness routines, and health education for physical development. Mindfulness, life skills, and
                mental health awareness embedded in the curriculum.
              </p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-4">
          <div class="card h-100 border-card">
            <div class="card-body bg-white">
              <img src="{{ asset('assets/image/Icon Container (1).png') }}" alt="WAEC/NECO" class="img-fluid mb-3">
              <h5 class="card-title">Blended Learning Approach</h5>
              <p class="card-text">
                In-class instruction complemented by interactive online platforms. Personalized learning paths supported
                by digital tools. Regular assessments and feedback loops for growth tracking. Teacher-guided projects
                and virtual collaboration opportunities.</p>
  </section>



  <x-enroll-btn class="mt-5" />

  <x-footer />





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>














</body>

</html>