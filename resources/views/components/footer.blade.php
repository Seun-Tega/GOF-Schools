<section
      class="px-4 py-3 my-5 text-white footer-section px-md-5 justify-content-between"
    >
      <footer>
        <div class="container">
          <img
            src="{{ asset('assets/image/image (6).png') }}"
            alt=""
            class="pb-3 mx-auto mb-3 img-fluid d-block"
          />
          <div
            class="flex-wrap px-3 text-center row gy-4 text-md-start d-flex justify-content-between px-md-4"
          >
            <!-- Contact Section -->
            <div class="col-12 col-md-6 col-lg-2">
              <p class="icon-social">
                <i class="bi bi-envelope-fill"></i> gofschooledu@gmail.com
              </p>
              <p class="icon-social">
                <i class="bi bi-telephone-fill"></i> +234 8081555652
              </p>
              <p class="icon-social">
                <i class="bi bi-geo-alt-fill"></i> Onward Estate, Off
                Gbongan-Ibadan Expressway, Osogbo, Osun State, Nigeria
              </p>
              <p class="icon-social2">Social profile:</p>
              <div
                class="d-flex justify-content-center justify-content-md-start"
              >
                <a
                  class="icon-social3 me-3 text-dark"
                  href="https://www.facebook.com/share/17jfghH33v/"
                  target="_blank"
                  ><i class="bi bi-facebook"></i
                ></a>
                <a class="icon-social3 me-3 text-dark" href="#"
                  ><i class="bi bi-twitter"></i
                ></a>
                <a class="icon-social3 text-dark" href="#"
                  ><i class="bi bi-linkedin"></i
                ></a>
              </div>
            </div>
            <!-- Quick Links -->
            <div class="col-12 col-md-6 col-lg-2">
              <h5 class="quick2">Quick Links</h5>
              <ul class="list-unstyled">
                <li><a class="text-white quick2" href="{{ route('index') }}">Home</a></li>
                <li><a class="text-white quick2" href="{{ route('about') }}">About</a></li>
                <li><a class="text-white quick2" href="{{ route('application') }}">Admission</a></li>
                <li><a class="text-white quick2" href="{{ route('curriculum') }}">Academics</a></li>
                <li><a class="text-white quick2" href="#">Alumni</a></li>
              </ul>
            </div>

            <!-- Branches -->
            <div class="col-12 col-md-6 col-lg-2">
              <h5 class="quick2">Other Branches</h5>
              <p>GOF International (Côte d'Ivoire)</p>
              <p>GOF International (Nigeria)</p>
            </div>

            <!-- Duplicate Links (if needed) -->
            <div class="col-12 col-md-6 col-lg-2">
              <h5 class="quick2">Links</h5>
              <ul class="list-unstyled">
               <li><a class="text-white quick2" href="{{ route('index') }}">Home</a></li>
                <li><a class="text-white quick2" href="{{ route('about') }}">About</a></li>
                <li><a class="text-white quick2" href="{{ route('application') }}">Admission</a></li>
                <li><a class="text-white quick2" href="{{ route('curriculum') }}">Academics</a></li>
                <li><a class="text-white quick2" href="#">Alumni</a></li>
                <li><a class="text-white quick2" href="{{ route('facilities')}}">Our Facilities</a></li>
              </ul>
            </div>
          </div>
        </div>
        <hr />
        <p class="mb-0 text-center text-white foot">
          © 2025 | All rights reserved | GOF International Schools.
        </p>
      </footer>
    </section>