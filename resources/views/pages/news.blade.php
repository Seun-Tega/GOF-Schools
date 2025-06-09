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
    <style>
        .clearfix {
            overflow: auto;
        }
    </style>
</head>

<body style="background-color: #FFF0F0; height: 200vh;">


    <x-header />
    <x-nav-bar />



    <section class="py-5 second-hero">
        <div class="container ">
            <h3 class="fs-1 fs-md-2 fs-lg-1 fw-400">Our News & Events</h3>
            <p class="lead">
                At GOF International Schools, we offer modern facilities that foster academic excellence and holistic
                growth.
            </p>
        </div>
    </section>

    <section class="blog-section" style="background-color: #FFF0F0; height: 200vh;">
       
        <div class="featured">
            <div class="featured-content">
                <img src="{{ asset('uploads/' . $newsEvent->photo) }}" alt="Featured blog image">

                @php
                    $today = date('l, jS F, Y');
                @endphp
                <span class="date">{{ $today }}</span>
                <h3>{{ $newsEvent->title }}</h3>
                <p>

                    {!! nl2br(e($newsEvent->news_content)) !!}
                    <br><br>
                    @isset($newsEvent->event_date)
                        <strong>Date:</strong> {{ $newsEvent->event_date->format('l, jS F, Y') }} <br>
                        <strong>Time:</strong> {{ $newsEvent->event_time->format('h:i:A') }}<br>
                        <strong>Venue:</strong> {{ $newsEvent->event_venue }}
                    @endisset
                </p>
                <div class="blog-footer">
                    <span>Admin</span>
                    <span id="views"></span>
                </div>
            </div>
        </div>


        <!-- Featured Blog -->
        {{-- <div class="featured-blog">
            
            <img src="{{ asset('uploads/' . $newsEvent->photo) }}" alt="Featured blog image ">
            
            <div class="featured-content">
                @php
                $today = date('l, jS F, Y');
                @endphp
                <span class="date">{{ $today }}</span>
                <h3>{{ $newsEvent->title }}</h3>
                <p>
                    {!! nl2br(e($newsEvent->news_content)) !!}
                    <br><br>
                    @isset($newsEvent->event_date)
                    <strong>Date:</strong> {{ $newsEvent->event_date->format('l, jS F, Y') }} <br>
                    <strong>Time:</strong> {{ $newsEvent->event_time->format('h:i:A') }}<br>
                    <strong>Venue:</strong> {{ $newsEvent->event_venue }}
                    @endisset

                    <br><br>

                </p>
                <div class="blog-footer">
                    <span>Admin</span>
                    <span id="views"></span>
                </div>
            </div>
        </div> --}}

        <!-- Other Blog Cards -->

        <section class="container my-5">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                @forelse ($otherNews as $newsEvent)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('uploads/' . $newsEvent->photo) }}" class="card-img-top" alt="...">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $newsEvent->title }}</h5>
                                <p class="card-text">
                                    {!! nl2br(e($newsEvent->news_content)) !!}
                                </p>
                                <div class="mt-auto d-flex align-items-center">
                                </div>
                            </div>
                        </div>
                    </div>

                @empty

                    <p>No News Available yet!!</p>
                @endforelse

        </section>


        <x-enroll-btn class="my-5" />

        <x-footer />













        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous">
        </script>
        <script>
            function genrateViews() {
                const views = Math.floor(Math.random() * 200) + 1;
                document.getElementById('views').innerHTML = `👁 ${views}`
            }

            genrateViews();
        </script>

</body>

</html>
