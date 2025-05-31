@props(['class' => ''])
<section>
    <div id="ward"  {{ $attributes->merge(['class' => 'container py-5 ' . $class]) }}">
      <div class="row g-3 align-items-center">
        <!-- Text Content -->
        <div class="col-12 col-md-8">
          <h4 class="ward3">ENROLL YOUR WARDS WITH US</h4>
          <p>
            We are always on the lookout for talented individuals who are enthusiastic about making a difference.
            Explore our career opportunities and join us in our mission to help people achieve their health and wellness
            goals.
          </p>
        </div>

        <!-- Button -->
        <div class="col-12 col-md-4 text-md-end text-center">
          <a class="ward2" href="{{ route("application") }}">Apply Now</a>
        </div>
      </div>
    </div>
  </section>