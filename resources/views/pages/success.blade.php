<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admission successful</title>
  <link rel="icon" href="{{ asset('assets/image/image (6).png') }}">
  <link rel="stylesheet" href="{{ asset('assets/gof-css/admission success.css') }}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body style="background-color: #FFF0F0; height:200px;">
  <x-header />
  <x-nav-bar />

  <section class="container my-5">
    <div class="row justify-content-center">
      <div class="col-12 text-start bg-light p-4 rounded shadow-sm">
        <h1 class="mb-4 text-dark application">Application Submitted Successfully</h1>
        <p class="application2">
          Thank you for completing the admission form.<br>
          We have received your application, and our admissions team will review it shortly.
          You will be contacted via phone or email within <strong>2–5 business days</strong> regarding the next steps.
        </p>

        <h4 class="mt-5 application3">What’s Next?</h4>
        <ul class="application2">
          <li>You may be invited for an entrance exam or interview.</li>
          <li>Please ensure your phone and email are reachable.</li>
          <li>For any inquiries, contact us at: [School Phone/Email]</li>
        </ul>

        <div class="text-center application4">
          <a class="application5" href="admission success.html">Submit Another Application</a>
        </div>
        <div class="text-center py-4">
          <a class="application6" href="{{ route('index') }}">Back to Homepage</a>
        </div>
      </div>
    </div>
  </section>


  <x-enroll-btn class="my-4" />

  <x-footer />


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
  </script>

</body>

</html>