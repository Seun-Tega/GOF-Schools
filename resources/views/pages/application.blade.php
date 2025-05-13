<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="icon" href="{{ asset('assets/image/image (6).png') }}">
  <link rel="stylesheet" href="{{ asset('assets/gof-css/admission.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: #FFF0F0; height: 200vh;">

  <x-header />
  <x-nav-bar />

  <section class="second-hero py-5">
    <div class="container">
      <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">Admission</h3>
      <p class="lead">
        At GOF International School, our curriculum fosters excellence, creativity, and critical thinking for future
        success.
      </p>
    </div>
  </section>

  <section class="container my-4 FORM1 lead">
    <h2 class="mb-4 Student">Student Information</h2>

    <div class="mb-3">
      <label for="studentName" class="form-label"> <strong>Full Name:</strong></label>
      <input type="text" id="form2" class="form-control" placeholder="Enter Student Name">
    </div>

    <div class="row mb-3">
      <div class="col-md-6 mb-2 mb-md-0">
        <label for="gender" class="form-label"><strong>Gender:</strong></label>
        <select id="form2" class="form-select">
          <option value="">Select Gender</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>
      </div>
      <div class="col-md-6">
        <label for="dob" class="form-label"><strong>DOB:</strong></label>
        <input type="text" id="form2" class="form-control" placeholder="DD/MM/YYYY">
      </div>
    </div>

    <div class="mb-3">
      <label for="studentAddress" class="form-label"><strong>Home Address:</strong></label>
      <input type="text" id="form2" class="form-control" placeholder="Enter Home Address">
    </div>

    <h4 class="mt-4">Guardian Information</h4>

    <div class="mb-3">
      <label for="guardianName" class="form-label"><strong>Full Name:</strong></label>
      <input type="text" id="form2" class="form-control" placeholder="Enter Full Name">
    </div>

    <div class="row mb-3">
      <div class="col-md-6 mb-2 mb-md-0">
        <label for="guardianEmail" class="form-label"><strong>Email:</strong></label>
        <input type="email" id="form2" class="form-control" placeholder="Enter Email Address">
      </div>
      <div class="col-md-6">
        <label for="guardianPhone" class="form-label"><strong>Mobile Number:</strong></label>
        <input type="tel" id="form2" class="form-control" placeholder="Enter Mobile Number">
      </div>
    </div>

    <div class="row mb-3">
      <div class="col-md-6 mb-2 mb-md-0">
        <label for="relationship" class="form-label"><strong>Relationship to Student:</strong></label>
        <input type="text" id="form2" class="form-control" placeholder="Enter Relationship">
      </div>
      <div class="col-md-6">
        <label for="altAddress" class="form-label"> <strong>Home Address (if different)</strong>:</label>
        <input type="text" id="form2" class="form-control" placeholder="Enter Home Address">
      </div>
    </div>

    <h4 class="mt-4">Enrollment Details</h4>

    <div class="row mb-3">
      <div class="col-md-6 mb-2 mb-md-0">
        <label for="classApplying" class="form-label"><strong>Class Applying For:</strong></label>
        <select id="form2" class="form-select">
          <option value="JSS1">JSS1</option>
          <option value="JSS2">JSS2</option>
          <option value="JSS3">JSS3</option>
          <option value="SS1">SS1</option>
          <option value="SS2">SS2</option>
          <option value="SS3">SS3</option>
        </select>
      </div>

      <div class="col-md-6 mb-2 mb-md-0">
        <label for="boardingType" class="form-label"> <strong>Day/Boarding:</strong></label>
        <select id="form2" class="form-select">
          <option value=""></option>
          <option value="DAY">DAY</option>
          <option value="BOARDING">BOARDING</option>
        </select>
      </div>
    </div>


    <div class="mb-3">
      <label for="medicalConditions" class="form-label"> <strong>Medical Conditions or Allergies </strong>:</label>
      <input type="text" id="form2" class="form-control mb-2" placeholder="Specify if any">
      <textarea class="form-control" placeholder="Your Message Here" id="form2" rows="4"></textarea>
    </div>

    <div class="form-check py-3">
      <input class="form-check-input" type="checkbox" id="confirmation">
      <label class="form-check-label" for="confirmation">
        <strong>I confirm that the information provided is accurate and I agree to the school's terms and
          conditions.</strong>
      </label>
    </div>


    <div class="text-center  submit">
      <a href="admission success.html">
        <button type="submit" class=" px-5 py-2 submit">Submit</button>
      </a>
    </div>

  </section>


  <section class="py-5">
    <div id="ward" class="container">
      <div class="row align-items-center d-flex flex-column flex-md-row justify-content-between">
        <div class="col-md-8 mb-3 mb-md-0">
          <h4 class="ward3">ENROLL YOUR WARDS WITH US</h4>
          <p>
            We are always on the lookout for talented individuals who are enthusiastic about making a difference.
            Explore our career opportunities and join us in our mission to help people achieve their health and wellness
            goals.
          </p>
        </div>
        <div class="col-md-3 text-md-end text-center">
          <a class="ward2" href="Admission.html">Apply Now</a>
        </div>
      </div>
    </div>
  </section>

  <x-footer />

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>
</body>

</html>