 <section class="w-100">
      <nav class="navbar navbar-expand-xl navbar-light nav-section w-100">
        <div class="container-fluid">
          <!-- Toggler for small screens -->
          <button
            class="navbar-toggler ms-auto"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>

          <!-- Nav Links -->
          <div
            class="collapse navbar-collapse justify-content-center text-center"
            id="navbarNavDropdown"
          >
            <ul class="navbar-nav w-100 d-flex justify-content-between">
              <li class="nav-item">
                <a
                  class="nav-link active text-light nav-border2 text-center"
                  href="{{ route('index') }}"
                  >HOME</a
                >
              </li>

              <!-- EXPLORE Dropdown -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle nav-border text-light"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  EXPLORE
                </a>
                <ul class="dropdown-menu text-white">
                  <li>
                    <a class="dropdown-item explore" href="{{ route('about') }}"
                      >Who we are</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item explore"
                      href="{{ route('message') }}"
                      >Proprietor and Proprietress Message</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item explore"
                      href="https://elearning.gofschools.net/"
                      target="_blank"
                      >E-learning/CBT Platform
                    </a>
                  </li>
                  <li>
                    <a class="dropdown-item explore" href="{{ route('team') }}"
                      >GOF Team</a
                    >
                  </li>
                </ul>
              </li>

              <!-- ACADEMICS Dropdown -->
              <li class="nav-item dropdown text-white">
                <a
                  class="nav-link dropdown-toggle nav-border text-light nav-border2 text-center"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  ACADEMICS
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a
                      class="dropdown-item explore"
                      href="{{ route('curriculum') }}"
                      >Curriculum Overview</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item explore"
                      href="{{ route('extra.curriculum') }}"
                      >Extra Curricular</a
                    >
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a class="nav-link nav-border text-light" href="{{ route('news.events') }}"
                  >NEWS & EVENTS</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link nav-border text-light" href="{{ route('gallery') }}"
                  >GALLERY</a
                >
              </li>
              <li class="nav-item">
                <a class="nav-link nav-border text-light" href="#">ALUMNI</a>
              </li>
              <li class="nav-item">
                <a class="nav-link nav-border text-light" href="{{ route('contact') }}"
                  >CONTACT</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>