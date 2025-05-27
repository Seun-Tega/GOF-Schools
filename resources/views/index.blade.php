<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="icon" href="{{ asset('assets/image/image (6).png') }}" />
  <link rel="stylesheet" href="{{asset('assets/gof-css/index.css')}}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
  <!-- AOS CSS -->
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
  <!-- AOS JS -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</head>

<body style="background-color: #fff0f0">

  <x-header />
  <x-nav-bar />
  


  <section class="position-relative overflow-hidden">
    <!-- Carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ asset('assets/image/imageA.jpg') }}" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/image/IMAGEB.jpg') }}" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/image/IMAGEC.png') }}" class="d-block w-100" alt="..." />
        </div>
        <div class="carousel-item">
          <img src="{{ asset('assets/image/IMAGED.jpg') }}" class="d-block w-100" alt="..." />
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Hero Overlay -->
    <div class="position-absolute top-0 start-0 text-white p-4" style="z-index: 10; max-width: 600px">
      <div class="container gof">
        <h2 class="gof2">GOF INTERNATIONAL SCHOOL</h2>
        <p class="mb-2">
          Discover a school that goes beyond academics! At GOF International
          Schools,We offer a dynamic blend of innovation, creativity, and
          discipline,empowering students every facet of life.
        </p>
        <div class="d-flex flex-row flex-md-row gap-3">
          <a class="enroll" href="{{ route('application') }}">Enroll Now <i class="bi bi-arrow-right"></i></a>
          <a class="learn text-decoration-none text-center" href="{{ route('about') }}">Learn Now</a>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row align-items-center">
        <!-- Image Column -->
        <div class="col-12 col-md-6 mb-4 mb-md-0 text-center">
          <img src="{{ asset('assets/image/image (10).png') }}" alt="GOF Image" class="img-fluid w-100 section-create3"
            style="max-width: 500px" />
        </div>

        <!-- Text Column -->
        <div class="col-12 col-md-6">
          <h1 class="mb-4 section-create">
            We create and turn Dreams into reality
          </h1>
          <p class="section-create2">
            At GOF International Schools, we redefine education with an
            unwavering commitment to nurturing future leaders who excel
            globally. With state-of-the-art campuses strategically located
            across Nigeria and Côte d’Ivoire, we provide a world-class
            learning environment that inspires academic brilliance, character
            development, and lifelong success.
          </p>
          <p class="section-create2">
            At GOF International Schools, we redefine education with an
            unwavering commitment to nurturing future leaders who excel
            globally. With state-of-the-art campuses strategically located
            across Nigeria and Côte d’Ivoire, we provide a world-class
            learning environment that inspires academic brilliance, character
            development, and lifelong success.
          </p>
          <p class="section-create4">
            <a class="text-decoration-none text-light" href="{{ route('application') }}">Enroll Your Child Today</a>
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-1">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-8 col-md-10">
          <h3 class="mb-3">Our Facilities</h3>
          <p class="section-text">
            Our blog is a treasure trove of informative and engaging articles
            written by our team of nutritionists, dietitians, and wellness
            experts. Here's what you can expect from our blog.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container">
      <div class="row justify-content-center g-4">
        <!-- Card 1 -->
        <div class="col-md-6 col-lg-4">
          <div class="card facility-card h-100 shadow-sm border border-2 box-shadow">
            <img src="{{ asset('assets/image/image (11).png') }}" class="card-img-top" alt="Modern Classroom" />
            <div class="card-body">
              <p class="text-muted mb-1">Class</p>
              <h5 class="card-title">Modern Classroom</h5>
              <p class="card-text">
                Our classrooms are thoughtfully designed to create an
                inspiring learning environment. Each room is equipped with
                interactive smart boards, projectors, and ergonomic furniture,
                fostering active engagement and collaboration among students.
              </p>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 col-lg-4">
          <div class="card facility-card h-100 shadow-sm border border-2 box-shadow">
            <img src="{{ asset('assets/image/image (12).png') }}" class="card-img-top" alt="Science Labs" />
            <div class="card-body">
              <p class="text-muted mb-1">Laboratories</p>
              <h5 class="card-title">
                State-of-the-Art Science Laboratories
              </h5>
              <p class="card-text">
                Our science labs are equipped with modern tools and
                instruments, encouraging hands-on learning, critical thinking,
                and safe experimentation under expert guidance.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Centered Button -->
      <div class="text-center mt-5">
        <a class="d-inline-flex align-items-center gap-2 lab" href="{{ route('facilities')}}">
          Explore Our Facilities <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>
  </section>

  <section class="second-hero py-5">
    <div class="container">
      <div class="row align-items-center flex-column flex-md-row text-center text-md-start">
        <!-- Image Column -->
        <div class="col-md-6 mb-4 mb-md-0">
          <img src="{{ asset('assets/image/Card.png') }}" alt="Card Image"
            class="img-fluid w-75 w-md-100 mx-auto d-block" />
        </div>

        <!-- Text Content Column -->
        <div class="col-md-6">
          <h2 class="mb-3">We've been in business for over 3 decades</h2>
          <p class="mb-4">
            At GOF International Schools, our diverse range of curricular
            activities ensures that every student receives a well-rounded
            education.
          </p>

          <!-- Flex Stats Section -->
          <div class="row text-center gy-4">
            <div class="col-6 col-md-6">
              <h1 class="display-6 counter" data-target="5000">0</h1>
              <p class="mb-0">Enrolled Students</p>
            </div>
            <div class="col-6 col-md-6">
              <h1 class="display-6 counter" data-target="55">0</h1>
              <p class="mb-0">Certified Teachers</p>
            </div>
            <div class="col-6 col-md-6">
              <h1 class="display-6 counter" data-target="2000">0</h1>
              <p class="mb-0">Graduate Students</p>
            </div>
            <div class="col-6 col-md-6">
              <h1 class="display-6 counter" data-target="3">0</h1>
              <p class="mb-0">Campuses</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="py-5">
    <div class="container text-center">
      <h3 class="mb-3">NEWS & EVENTS</h3>
      <p class="event-text">
        Our blog is a treasure trove of informative and engaging articles
        written by our team of nutritionists, dietitians, and wellness
        experts. Here's what you can expect from our blog.
      </p>
    </div>
  </section>

  <section class="container my-5">
    <div class="d-flex justify-content-center gap-4 flex-wrap">
      @foreach ($newsEvents as  $newsEvent)

      <div class="card news-card mb-4" style="width: 18rem" data-delay="0s">
        <img src="{{  asset('uploads/'. $newsEvent->photo)}}" class="card-img-top" alt="News Image" />
        <div class="card-body">
          <h5 class="card-title">
            {{ Str::upper($newsEvent->title)}}
          </h5>
          <p class="card-text">
           {{ $newsEvent->news_content }}
          </p>
          <div class="d-flex align-items-center mt-2">
            <a href="{{ route('news', ['newsEvent' => $newsEvent->slug]) }}" class="enroll me-3 p-1">
              Read More<i class="bi bi-arrow-right"></i>
            </a>
            <div class="d-flex align-items-center">
              <span class="me-3 admin">Admin</span>
              <i class="bi bi-eye me-1"></i>
              @php
                $views = rand(10, 1000);
              @endphp
              <span>{{ $views }}</span>
            </div>
          </div>
        </div>
      </div>
        
      @endforeach
      {{-- <div class="card news-card mb-4" style="width: 18rem" data-delay="0s">
        <img src="{{ asset('assets/image/Group 19 (1).png') }}" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">
            Announcement!!! Entrance Examination for Technician Programmes
          </h5>
          <p class="card-text">
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Far far away,
            behind the word mountains, far from the countries Vokalia and
            Consonantia, there live the blind texts.
          </p>
          <div class="d-flex align-items-center mt-2">
            <a href="news.html" class="enroll me-3 p-1">
              Read More<i class="bi bi-arrow-right"></i>
            </a>
            <div class="d-flex align-items-center">
              <span class="me-3 admin">Admin</span>
              <i class="bi bi-eye me-1"></i>
              <span>8</span>
            </div>
          </div>
        </div>
      </div>

      <div class="card news-card mb-4" style="width: 18rem" data-delay="0.2s">
        <img src="{{ asset('assets/image/Group 19 (2).png') }}" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">
            Announcement!!! Entrance Examination for Technician Programmes
          </h5>
          <p class="card-text">
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Far far away,
            behind the word mountains, far from the countries Vokalia and
            Consonantia, there live the blind texts.
          </p>
          <div class="d-flex align-items-center mt-2">
            <a href="news.html" class="enroll me-3 p-1">
              Read More <span><i class="bi bi-arrow-right"></i></span>
            </a>
            <div class="d-flex align-items-center">
              <span class="me-3 admin">Admin</span>
              <i class="bi bi-eye me-1"></i>
              <span>8</span>
            </div>
          </div>
        </div>
      </div>

      <div class="card news-card mb-4" style="width: 18rem" data-delay="0.6s">
        <img src="{{ asset('assets/image/Group 19 (5).png') }}" class="card-img-top" alt="..." />
        <div class="card-body">
          <h5 class="card-title">
            Announcement!!! Entrance Examination for Technician Programmes
          </h5>
          <p class="card-text">
            Far far away, behind the word mountains, far from the countries
            Vokalia and Consonantia, there live the blind texts. Far far away,
            behind the word mountains, far from the countries Vokalia and
            Consonantia, there live the blind texts.
          </p>
          <div class="d-flex align-items-center mt-2">
            <a href="news.html" class="enroll me-3">
              Read More<span><i class="bi bi-arrow-right p-1"></i></span>
            </a>
            <div class="d-flex align-items-center">
              <span class="me-3 admin">Admin</span>
              <i class="bi bi-eye me-1"></i>
              <span>8</span>
            </div>
          </div>
        </div>
      </div> --}}
    </div>
    <p class="text-center mx-auto">
      <a class="post" href="{{ route('news.events') }}">more post <span><i class="bi bi-arrow-right"></i></span>
      </a>
    </p>
  </section>

  <section class="">
    <div class="container">
      <div class="text-center">
        <div class="py-4">
          <h3>OUR CIRCULAR ACTIVITIES</h3>
          <p class="gof-text">
            At GOF International Schools, our diverse range of curricular
            activities ensures that every student receives a well-rounded
            education. From a comprehensive academic program to STEM
            innovation, creative arts, and physical education, we cater to
            every aspect of intellectual and personal development.
          </p>
        </div>
      </div>
    </div>
  </section>

  <section style="overflow: hidden" class="container py-5">
    <div class="row g-4">
      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-card" data-aos="fade-up" data-aos-delay="0">
          <div class="card-body">
            <img src="{{ asset('assets/image/Icon Container (2).png') }}" alt="" class="img-fluid mb-3" />
            <h5 class="card-title">Comprehensive Academic Programs</h5>
            <p class="card-text">
              GOF International Schools offer a robust curriculum that
              integrates both local and international standards, ensuring
              students excel academically and are globally competitive.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-card" data-aos="zoom-in" data-aos-delay="100">
          <div class="card-body">
            <img src="{{ asset('assets/image/Icon Container (1).png') }}" alt="" class="img-fluid mb-3" />
            <h5 class="card-title">STEM Education</h5>
            <p class="card-text">
              Science, Technology, Engineering, and Mathematics are emphasized
              through practical lessons, innovation labs, and projects that
              develop critical thinking and problem-solving skills.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-card" data-aos="flip-left" data-aos-delay="200">
          <div class="card-body">
            <img src="{{ asset('assets/image/Icon Container (4).png') }}" alt="" class="img-fluid mb-3" />
            <h5 class="card-title">Positive Student Feedback</h5>
            <p class="card-text">
              We take pride in the positive feedback we receive from our
              students, who appreciate the practicality and relevance of our
              course materials.
            </p>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-3">
        <div class="card h-100 border-card" data-aos="fade-left" data-aos-delay="300">
          <div class="card-body">
            <img src="{{ asset('assets/image/Icon Container.png') }}" alt="" class="img-fluid mb-3 industry" />
            <h5 class="card-title">Industry Partnerships</h5>
            <p class="card-text">
              We have established strong partnerships with industry leaders,
              enabling us to provide our students with access to the latest
              tools and technologies
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="text-center">
        <div class="">
          <h3>OUR TESTIMONIAL</h3>
          <p>
            At GOF International Schools, our diverse range of curricular
            activities ensures that every student receives a well-rounded
            education. From a comprehensive academic program to STEM
            innovation, creative arts, and physical education, we cater to
            every aspect of intellectual and personal development.
          </p>
        </div>
      </div>
    </div>
  </section>

  <x-testimonial-card/>
   <x-enroll-btn />

  <x-footer />


  <script src="{{ asset('assets/scripts/index.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>

</body>

</html>