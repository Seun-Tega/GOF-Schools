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
  
    {!! ToastMagic::styles() !!}

</head>

<body style="background-color: #FFF0F0; height: 200vh;">

  <x-header />
  <x-nav-bar />

  <section class="py-5 second-hero">
    <div class="container">
      <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">Admission</h3>
      <p class="lead">
        At GOF International School, our curriculum fosters excellence, creativity, and critical thinking for
        future
        success.
      </p>
    </div>
  </section>

  <section class="container my-4 FORM1 lead">
    <h2 class="mb-4 Student">Student Information</h2>

    <form action="{{ route('application.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label for="studentName" class="form-label"> <strong>Full Name:</strong></label>
        <input type="text" id="form2" class="form-control" name="student_name" placeholder="Enter Student Name"
          value="{{ old('student_name') }}">
        <span class="text-danger">
          @error('student_name')
          {{ $message }}
          @enderror
        </span>
      </div>

      <div class="mb-3 row">
        <div class="mb-2 col-md-6 mb-md-0">
          <label for="gender" class="form-label"><strong>Gender:</strong></label>
          <select id="form2" class="form-select" name="gender">
            <option value="">Select Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
          <span class="text-danger">
            @error('gender')
            {{ $message }}
            @enderror
          </span>
        </div>
        <div class="col-md-6">
          <label for="dob" class="form-label"><strong>DOB:</strong></label>
          <input type="date" id="form2" class="form-control" placeholder="DD/MM/YYYY" name="dob"
            value="{{ old('dob') }}">
          <span class="text-danger">
            @error('dob')
            {{ $message }}
            @enderror
          </span>
        </div>
      </div>

      <div class="mb-3">
        <label for="studentAddress" class="form-label"><strong>Home Address:</strong></label>
        <input type="text" id="form2" class="form-control" placeholder="Enter Home Address" name="address"
          value="{{ old('address') }}">
        <span class="text-danger">
          @error('address')
          {{ $message }}
          @enderror
        </span>
      </div>

      <h4 class="mt-4">Guardian Information</h4>

      <div class="mb-3">
        <label for="guardianName" class="form-label"><strong>Full Name:</strong></label>
        <input type="text" id="form2" class="form-control" placeholder="Enter Full Name" name="guardian_name"
          value="{{ old('guardian_name') }}">
        <span class="text-danger">
          @error('guardian_name')
          {{ $message }}
          @enderror
        </span>
      </div>

      <div class="mb-3 row">
        <div class="mb-2 col-md-6 mb-md-0">
          <label for="guardianEmail" class="form-label"><strong>Email:</strong></label>
          <input type="email" id="form2" class="form-control" placeholder="Enter Email Address" name="email"
            value="{{ old('email') }}">
          <span class="text-danger">
            @error('email')
            {{ $message }}
            @enderror
          </span>
        </div>
        <div class="col-md-6">
          <label for="guardianPhone" class="form-label"><strong>Mobile Number:</strong></label>
          <input type="tel" id="form2" class="form-control" placeholder="Enter Mobile Number" name="phone"
            value="{{ old('phone') }}">
          <span class="text-danger">
            @error('phone')
            {{ $message }}
            @enderror
          </span>
        </div>
      </div>

      <div class="mb-3 row">
        <div class="mb-2 col-md-6 mb-md-0">
          <label for="relationship" class="form-label"><strong>Relationship to Student:</strong></label>
          <input type="text" id="form2" class="form-control" placeholder="Enter Relationship"
            name="relationship_to_student" value="{{ old('relationship_to_student') }}">
        </div>
        <div class="col-md-6">
          <label for="altAddress" class="form-label"> <strong>Home Address (if different)</strong>:</label>
          <input type="text" id="form2" class="form-control" placeholder="Enter Home Address" name="guardian_address"
            value="{{ old('guardian_address') }}">
          <span class="text-danger">
            @error('guardian_address')
            {{ $message }}
            @enderror
          </span>
        </div>
      </div>

      <h4 class="mt-4">Enrollment Details</h4>

      <div class="mb-3 row">
        <div class="mb-2 col-md-6 mb-md-0">
          <label for="classApplying" class="form-label"><strong>Class Applying For:</strong></label>
          <select id="form2" class="form-select" name="student_class">

            @foreach (\App\Enums\ClassEnum::cases() as $class )
             <option value="{{ $class->value }}" @selected(old('student_class') === $class->value)>{{ Str::replace('_', '-',$class->name)}}</option>
              
            @endforeach
      
          </select>

          <span class="text-danger">
            @error('student_class')
            {{ $message }}
            @enderror
          </span>
        </div>

        <div class="mb-2 col-md-6 mb-md-0">
          <label for="boardingType" class="form-label"> <strong>Day/Boarding:</strong></label>
          <select id="form2" class="form-select" name="student_type">
            <option value="DAY">DAY</option>
            <option value="BOARDING">BOARDING</option>
          </select>

          <span class="text-danger">
            @error('student_type')
            {{ $message }}
            @enderror
          </span>
        </div>
         <div class="my-2 col-md-6 mb-md-0">
          <label for="location" class="form-label"> <strong>School Location:</strong></label>
          <select id="form2" class="form-select" name="location">

            @foreach (\App\Enums\Location::cases() as $location )
             <option value="{{ $location->value }}" @selected(old('location') === $location->value)>{{Str::replace('_', ',', $location->value )}}</option>
              
            @endforeach
           
          </select>

          <span class="text-danger">
            @error('location')
            {{ $message }}
            @enderror
          </span>
        </div>
      </div>


      <div class="mb-3">
        <label for="medicalConditions" class="form-label"> <strong>Medical Conditions or Allergies
          </strong>:</label>
        <textarea class="form-control" placeholder="Your Message Here" id="form2" rows="4"
          name="condition">{{ old('condition') }}</textarea>
        <span class="text-danger">
          @error('condition')
          {{ $message }}
          @enderror
        </span>
      </div>

      <div class="py-3 form-check">
        <input class="form-check-input" type="checkbox" id="confirmation" name="terms" value="1" {{ old('terms')
          ? 'checked' : '' }}>
        <label class="form-check-label" for="confirmation">
          <strong>I confirm that the information provided is accurate and I agree to the school's terms and
            conditions.</strong>
        </label>

        <span class="text-danger">
          @error('terms')
          {{ $message }}
          @enderror
        </span>
      </div>


      <div class="text-center submit">
        <button type="submit" class="px-5 py-2 submit">Submit</button>
      </div>


    </form>

  </section>


  <section class="">
    <div id="ward" class="container">
      <div class="row align-items-center d-flex flex-column flex-md-row justify-content-between">
        <div class="mb-3 col-md-8 mb-md-0">
          <h4 class="ward3">ENROLL YOUR WARDS WITH US</h4>
          <p>
            We are always on the lookout for talented individuals who are enthusiastic about making a
            difference.
            Explore our career opportunities and join us in our mission to help people achieve their health
            and wellness
            goals.
          </p>
        </div>
        <div class="text-center col-md-3 text-md-end">
          <a class="ward2" href="#">Apply Now</a>
        </div>
      </div>
    </div>
  </section>

  <x-footer />
   {!! ToastMagic::scripts() !!}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>
</body>

</html>