<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News and Events</title>
    <link rel="icon" href="{{ asset('assets/image/image (6).png') }}">
    <link rel="stylesheet" href="{{ asset('assets/gof-css/news-event.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset('assets/gof-css/news.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/gof-css/responsive-blog.css') }}">
</head>

<body style="background-color: #FFF0F0; height: 200vh;">


    <x-header />
    <x-nav-bar />



    <section class="second-hero py-5">
        <div class="container  ">
            <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">Our News & Events</h3>
            <p class="lead">
                At GOF International Schools, we offer modern facilities that foster academic excellence and holistic
                growth.
            </p>
        </div>
    </section>

    <section class="blog-section"style="background-color: #FFF0F0; height: 200vh;">


        <!-- Featured Blog -->
        <div class="featured-blog">
            <img src="{{ asset('assets/image/news.png') }}" alt="Featured blog image">
            <div class="featured-content">
                <span class="date">26 June 2020</span>
                <h3>Announcement!!! Entrance Examination for Technician Programmes</h3>
                <p>
                    The entrance examination into the full-time Technician Programmes (2020/2021 Academic Session) of
                    the college holds as scheduled below:
                    <br><br>
                    <strong>Date:</strong> Saturday, 15th August, 2020<br>
                    <strong>Time:</strong> 10:00am prompt<br>
                    <strong>Venue:</strong> College of Health Sciences and Technology, Ijero-Ekiti
                    <br><br>
                    Candidates are expected to come with their writing materials only and comply with all COVID-19
                    safety protocols.
                    <br><br>
                    Candidates are advised to check the College website (www.choijero-edu.ng) for their application form
                    printout and examination slip.
                </p>
                <div class="blog-footer">
                    <span>Admin</span>
                    <span>👁 8</span>
                </div>
            </div>
        </div>

        <!-- Other Blog Cards -->

        <section class="container my-4">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/image/Group 19 (1).png') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Announcement!!! Entrance Examination for Technician Programmes</h5>
                            <p class="card-text">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.
                            </p>
                            <div class="mt-auto d-flex align-items-center">
                                <a href="#" class="btn btn-dark enroll me-3 p-1">
                                    Read Now <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 admin">Admin</span>
                                    <i class="bi bi-eye me-1"></i>
                                    <span>8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/image/Group 19 (2).png') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Announcement!!! Entrance Examination for Technician Programmes</h5>
                            <p class="card-text">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.
                            </p>
                            <div class="mt-auto d-flex align-items-center">
                                <a href="#" class="btn btn-dark enroll me-3 p-1">
                                    Read Now <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 admin">Admin</span>
                                    <i class="bi bi-eye me-1"></i>
                                    <span>8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->   
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('assets/image/Group 19 (5).png') }}" class="card-img-top" alt="...">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">Announcement!!! Entrance Examination for Technician Programmes</h5>
                            <p class="card-text">
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.
                                Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                                there live the blind texts.
                            </p>
                            <div class="mt-auto d-flex align-items-center">
                                <a href="#" class="btn btn-dark enroll me-3 p-1">
                                    Read Now <span><i class="bi bi-arrow-right"></i></span>
                                </a>
                                <div class="d-flex align-items-center">
                                    <span class="me-3 admin">Admin</span>
                                    <i class="bi bi-eye me-1"></i>
                                    <span>8</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <x-enroll-btn class="my-5" />

        <x-footer />













        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
        </script>

</body>

</html>
