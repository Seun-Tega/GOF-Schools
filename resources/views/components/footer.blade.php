<section
      class="footer-section my-5 py-3 px-4 px-md-5 text-white justify-content-between"
    >
      <footer>
        <div class="container">
          <img
            src="{{ asset('assets/image/image (6).png') }}"
            alt=""
            class="img-fluid mb-3 d-block mx-auto pb-3"
          />
          <div
            class="row gy-4 text-center text-md-start d-flex justify-content-between flex-wrap px-3 px-md-4"
          >
            <!-- Contact Section -->
            <div class="col-12 col-md-6 col-lg-2">
              <p class="icon-social">
                <i class="bi bi-envelope-fill"></i> info@gofschools.net
              </p>
              <p class="icon-social">
                <i class="bi bi-telephone-fill"></i> +234 803 606 0560
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
                <li><a class="quick2 text-white" href="#">Home</a></li>
                <li><a class="quick2 text-white" href="#">About</a></li>
                <li><a class="quick2 text-white" href="#">Admission</a></li>
                <li><a class="quick2 text-white" href="#">Academics</a></li>
                <li><a class="quick2 text-white" href="#">Alumni</a></li>
              </ul>
            </div>

            <!-- Branches -->
            <div class="col-12 col-md-6 col-lg-2">
              <h5 class="quick2">Other Branches</h5>
              <p>Gof International (Côte d'Ivoire)</p>
              <p>Gof International (Nigeria)</p>
            </div>

            <!-- Duplicate Links (if needed) -->
            <div class="col-12 col-md-6 col-lg-2">
              <h5 class="quick2">Links</h5>
              <ul class="list-unstyled">
                <li><a class="quick2 text-white" href="#">Home</a></li>
                <li><a class="quick2 text-white" href="#">About</a></li>
                <li><a class="quick2 text-white" href="{{ route('application') }}">Admission</a></li>
                <li><a class="quick2 text-white" href="#">Academics</a></li>
                <li><a class="quick2 text-white" href="#">Alumni</a></li>
                <li><a class="quick2 text-white" href="{{ route('facilities')}}">Our Facilities</a></li>
              </ul>
            </div>
          </div>
        </div>
        <hr />
        <p class="foot text-center text-white mb-0">
          © 2025 | All rights reserved | GOF International Schools.
        </p>
      </footer>
    </section>