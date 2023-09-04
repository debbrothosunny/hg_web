<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/Frontend/assets/css/style.css') }}" />

</head>

<body>
        <!-- header -->
        <header>
            <div class="container">
                <div class="header-container">
                    @foreach ($site as $postData)
                        <h1 class="logo">
                            <a href="{{ url('/') }}"><img src="{!! asset('assets/img/uploaded/site/' . $postData->logo) !!}" alt="logo" /></a>
                        </h1>
                    @endforeach
                    <ul class="nav">
                        <li><a href="{{ url('/') }}" class="nav-active">Home</a></li>
                        <li><a href="{{ url('/about') }}">About Us</a></li>
                        <li><a href="{{ url('/course') }}">Course</a></li>
                        <li><a href="{{ url('/team') }}">Team</a></li>
                        <li><a href="{{ url('/gallery') }}">Gallery</a></li>
                        <li><a href="{{ url('/certificate') }}">Certificate Verify</a></li>
                        @foreach ($site as $postData)
                        <li class="contact-mini"><a href="tel:{{ $postData->number ?? ''}}">Contact</a></li>
                        @endforeach
                    </ul>
                    @foreach ($site as $postData)
                        <a href="tel:{{ $postData->number ?? ''}}" class="contact">Contact</a>
                    @endforeach
                    <div id="menu"><i class="fa-solid fa-bars"></i></div>
                </div>
            </div>
        </header>
        <!-- header end -->
    @yield('website')

    <!-- footer  -->
    @foreach ($site as $postData)
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-logo">
                    <div class="logo">
                        <img src="{!! asset('assets/img/uploaded/site/' . $postData->logo) !!}" alt="logo" />
                    </div>
                    <p>{!! $postData->description !!}</p>

                    <div class="footer-social">
                        <a href="#"><img src="{{ asset('assets/Frontend/assets/img/footer-social.png') }}" alt="social" /></a>
                    </div>
                </div>

                <ul class="footer-item">
                    <h2>Get Our Link</h2>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/about') }}">About Us</a></li>
                    <li><a href="{{ url('/course') }}">Course</a></li>
                    <li><a href="{{ url('/team') }}">Team</a></li>
                </ul>
                <ul class="footer-item">
                    <h2>Get Our Link</h2>
                    <li>Unique places to stay</li>
                    <li>All destinations</li>
                    <li>Discover</li>
                    <li>Reviews</li>
                    <li>Unpacked: Travel articles</li>
                    <li>Travel Communities</li>
                    <li>Seasonal and holiday deals</li>
                </ul>

                <ul class="footer-item">
                    <h2>Customer Service help</h2>
                    <li>Coronavirus (COVID-19) FAQs</li>
                    <li>About Booking.com</li>
                    <li>Customer Service help</li>
                    <li>Partner help</li>
                    <li>Careers</li>
                    <li>Sustainability</li>
                    <li>Press centre</li>
                </ul>
            </div>
        </div>
        <div class="footer-end">
            <p>Developed by <a href="https://opstelit.com/">OpstelIt</a> <?php echo date("Y"); ?></p>
        </div>
    </footer>
    @endforeach
    <!-- footer  end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
    </script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js""></script>
    <script src="{{ asset('assets/Frontend/assets/js/app.js') }}"></script>
    <script>
        const control = document.querySelector(".arrow");

        var slider = tns({
            container: ".course-content",
            items: 3,
            slideBy: 1,
            autoplay: true,
            loop: true,

            autoplayResetOnVisibility: false,
            autoplayButtonOutput: false,
            autoplay: true,

            nav: false,
            gutter: 30,
            mouseDrag: true,

            controlsContainer: control,
            prevButton: ".arrow-left",
            nextButton: ".arrow-right",
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1200: {
                    items: 3,
                },
            },
        });

        const control2 = document.querySelector(".review-arrow");

        var slider = tns({
            container: ".review-content",
            items: 3,
            slideBy: 1,
            autoplay: true,
            loop: true,
            autoplayResetOnVisibility: false,
            autoplayButtonOutput: false,
            autoplay: true,
            nav: false,
            mouseDrag: true,
            controlsContainer: control2,
            prevButton: ".review-left",
            nextButton: ".review-right",
            gutter: 30,
            responsive: {
                0: {
                    items: 1,
                },
                768: {
                    items: 2,
                },
                1200: {
                    items: 3,
                },
            },
        });
    </script>
</body>

</html>
