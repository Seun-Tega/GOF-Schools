<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="icon" href="{{ asset('assets/image/image (6).png') }}">
  <link rel="stylesheet" href="{{ asset('assets/gof-css/contact.css') }}">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="height: 200vh; background-color: #FFF0F0;">

  
  <x-header />
  <x-nav-bar />
  
  
  <section class="second-hero py-5">
    <div class="container">
      <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">Contact Us</h3>
      <p class="lead">
        At GOF International School, our curriculum fosters excellence, creativity, and critical thinking for future
        success.
      </p>
    </div>
  </section>


  <section class="bg-white">
    <div class="container py-4">
      <div class="row">

        <!-- Contact Info Column -->
        <div class="col-12 col-md-6 mb-4">

          <div class="mt-3 contact">
            <div class="d-flex justify-content-between">
              <div>
                <p class="mb-1"><strong>You can email us here</strong></p>
                <span class="justify-content-start">info@gofschools.net</span>
              </div>
              <i class="bi bi-arrow-right-square-fill arrow2"></i>
            </div>
          </div>

          <div class="mt-3 contact">
            <div class="d-flex justify-content-between">
              <div>
                <p class="mb-1"><strong>Call us on</strong></p>
                <span class="justify-content-start">+234 803 606 0560</span>
              </div>
              <i class="bi bi-arrow-right-square-fill arrow2"></i>
            </div>
          </div>

          <div class="mt-3 contact">
            <div class="d-flex justify-content-between">
              <div>
                <p class="mb-1"><strong>Location</strong></p>
                <span class="justify-content-start">Somewhere in the World</span>
              </div>
              <i class="bi bi-arrow-right-square-fill arrow2"></i>
            </div>
          </div>

          <div class="mt-4">
            <p><strong>Social Profile</strong></p>
            <a href=""><i class="bi bi-facebook me-2 arrow3 btn btn-primary"></i></a>
            <a href=""><i class="bi bi-twitter-x me-2 btn btn-dark arrow3"></i></a>
            <a href=""><i class="bi bi-linkedin btn btn-primary arrow3"></i></a>
          </div>

        </div>

        <!-- Form Column -->
        <!-- Form Column -->
        <div class="col-12 col-md-6">
          <form class="FORM1">
            <div class="mb-3 d-flex flex-column flex-md-row gap-2">
              <input type="text" id="form2" class="form-control" placeholder="First Name">
              <input type="text" id="form2" class="form-control" placeholder="Last Name">
            </div>
            <div class="mb-3 d-flex flex-column flex-md-row gap-2">
              <input type="email" id="form2" class="form-control" placeholder="Email">
              <input type="tel" id="form2" class="form-control form5" placeholder="Phone Number">
            </div>
            <div class="mb-3">
              <input type="text" id="form2" class="form-control mb-2" placeholder="Subject">
              <textarea class="form-control" id="form2" placeholder="Your Message Here" rows="4"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="submit">Submit</button>
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>

  <section class="container text-center pb-4  py-5">
    <img src="{{ asset('assets/image/Mask group (1).png') }}" alt="Responsive image"
      class="img-fluid">
  </section>


   <x-enroll-btn class="my-4" />

  <x-footer />





  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>


</body>

</html>