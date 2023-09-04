@extends('Frontend.layouts.website')
@section('website')
    <!-- top banner  -->
    @foreach ($header as $postData)
        <div class="top-banner"
            style="
        background: linear-gradient(
            89.51deg,
            rgba(0, 23, 41, 0.95) -0.48%,
            rgba(0, 21, 38, 0.9) 26.92%,
            rgba(0, 26, 46, 0.85) 52.03%,
            rgba(0, 0, 0, 0) 99.94%
        ),
        /* url({{ asset('assets/Frontend/assets/img/top-banner/banner-home.jpg') }}); */
        url({!! asset('assets/img/uploaded/home/' . $postData->image) !!});

        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        ">
            <div class="container">
                <h4>{{ $postData->title }}</h4>
                <h1>{{ $postData->sub_title }}</h1>
                <a href="#">Read More</a>
            </div>
        </div>
    @endforeach
    <!-- top banner  ende -->

    <!-- about  -->
    @foreach ($about as $postData)
        <div class="about-home">
            <div class="container">
                <div class="about-left">
                    <img src="{!! asset('assets/img/uploaded/home/' . $postData->image) !!}" alt="img" />
                </div>
                <div class="about-right">
                    <h4>{{ $postData->title }}</h4>
                    <h2>{{ $postData->sub_title }}</h2>
                    <p>{{ $postData->description }}</p>
                    <a href="{!! $postData->video !!}" class="about-video">
                        <div class="video-logo">
                            <img src="{{ asset('assets/Frontend/assets/img/video.png') }}" alt="video" />
                        </div>
                        <span>Know More</span>
                    </a>
                </div>
            </div>
        </div>
    @endforeach
    <!-- about  end -->

    <!-- offer  -->

    <div class="offer">
        <div class="container">
            @foreach ($offer_title as $postData)
                <h2>{{ $postData->title }}</h2>
                <p>{{ $postData->description }}</p>
            @endforeach
            <div class="offer-content">
                @foreach ($offer_content as $postData)
                    <div class="offer-card">
                        <i class="fa-solid fa-graduation-cap"></i>
                        <h3>{{ $postData->title }}</h3>
                        <p>{!! $postData->description !!}</p>
                        <a href="#">Read More</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- offer  end -->

    <!-- choose  -->
    @foreach ($choose as $postData)
        <div class="choose">
            <div class="container">
                <div class="chosse-left">
                    <img src="{!! asset('assets/img/uploaded/home/' . $postData->image) !!}" alt="img" />
                </div>
                <div class="chosse-right">
                    <h2>{{ $postData->title }}</h2>
                    <p>{{ $postData->description }}</p>

                    <div class="choose-icon">
                        {{-- <img src="img/icon-1.jpg" alt="i" /> --}}
                        <img src="{!! asset('assets/img/uploaded/home/' . $postData->icon) !!}" alt="i" />
                        <span>{{ $postData->icon_title }}</span>
                    </div>
                    <div class="choose-icon">
                        {{-- <img src="img/icon-2.jpg" alt="i" /> --}}
                        <img src="{!! asset('assets/img/uploaded/home/' . $postData->icon_1) !!}" alt="i" />
                        <span>{{ $postData->icon_title_1 }}</span>
                    </div>

                    <div class="choose-btn">
                        <a href="#">Read More</a>
                        <a href="#">Go About</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- choose  end -->

    <!-- course -->

    <div class="course">
        <div class="container">
            <div class="course-header">
                <h2>
                    Descover Our <br />
                    Popular Courses
                </h2>
                <div class="arrow">
                    <i class="fa-solid fa-angle-left arrow-left"></i>
                    <i class="fa-solid fa-angle-right arrow-right"></i>
                </div>
            </div>

            <div class="course-content">
                @foreach ($course as $postData)
                    <a href="{{url('/course/single')}}/{{$postData->id}}">
                        <div class="course-box">
                            <div class="course-img">
                                <img src="{!! asset('assets/img/uploaded/course/' . $postData->image) !!}" alt="img" />
                            </div>
                            <div class="course-text">
                                <div class="course-card-header">
                                    <img src="{!! asset('assets/img/uploaded/course/' . $postData->icon) !!}" alt="icon" />
                                    <span>{{ $postData->title }}</span>
                                </div>
                                <p>{!! Str::limit($postData->description, '120', '...') !!}</p>
                                <div class="class-time">
                                    <p>Time: {{ $postData->time }}</p>
                                    <p>Course Fee: {{ $postData->fee }}TK</p>
                                </div>
                                {{-- <div class="class-bg">
                                <div class="class-bg-mini" style="width: 60%"></div>
                            </div> --}}
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    <!-- course end -->

    <!-- our app  -->
    @foreach ($app as $postData)
        <div class="our-app">
            <div class="container">
                <div class="app-left">
                    <img src="{!! asset('assets/img/uploaded/home/' . $postData->image) !!}" alt="app" />
                </div>
                <div class="app-right">
                    <h4>{{ $postData->title }}</h4>
                    <h2>{{ $postData->sub_title }}</h2>
                    <p>{{ $postData->description }}</p>
                    <div class="download-app">
                        <img src="{{ asset('assets/Frontend/assets/img/download-apps-button-google-play-and-app-store-vector 1.jpg') }}"
                            alt="DOWNLAOD-APP" />
                        <img src="{{ asset('assets/Frontend/assets/img/download-apps-button-google-play-and-app-store-vector 2.jpg') }}"
                            alt="DOWNLAOD-APP" />
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- our app  emd -->

    <!-- trinner -->
    @foreach ($trainer as $postData)
        <div class="trainer">
            <div class="container">
                <div class="trainer-content">
                    <h2>{{ $postData->title }}</h2>
                    <p>{!! $postData->description !!} </p>
                    <a href="#" class="member-btn">See All Member</a>

                    <div class="trainer-mini">
                        <div class="trainer-mini-box">
                            <div class="trainer-card">
                                <div class="trainer-mini-img">
                                    <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_1) !!}" alt="img" />
                                </div>
                                <div class="trainer-mini-text">
                                    <h4>{{ $postData->name_1 }}</h4>
                                    <div class="trainer-social">
                                        <a href="{{ $postData->fb_1 }}"><img
                                                src="{{ asset('assets/Frontend/assets/img/Social Media icon 5.png') }}"
                                                alt="social" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-mini-box">
                            <div class="trainer-card">
                                <div class="trainer-mini-img">
                                    <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_2) !!}" alt="img" />
                                </div>
                                <div class="trainer-mini-text">
                                    <h4>{{ $postData->name_2 }}</h4>
                                    <div class="trainer-social">
                                        <a href="{{ $postData->fb_2 }}"><img
                                                src="{{ asset('assets/Frontend/assets/img/Social Media icon 5.png') }}"
                                                alt="social" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-mini-box">
                            <div class="trainer-card">
                                <div class="trainer-mini-img">
                                    <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_3) !!}" alt="img" />
                                </div>
                                <div class="trainer-mini-text">
                                    <h4>{{ $postData->name_3 }}</h4>
                                    <div class="trainer-social">
                                        <a href="{{ $postData->fb_3 }}"><img
                                                src="{{ asset('assets/Frontend/assets/img/Social Media icon 5.png') }}"
                                                alt="social" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-mini-box">
                            <div class="trainer-card">
                                <div class="trainer-mini-img">
                                    <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_4) !!}" alt="img" />
                                </div>
                                <div class="trainer-mini-text">
                                    <h4>{{ $postData->name_4 }}</h4>
                                    <div class="trainer-social">
                                        <a href="{{ $postData->fb_4 }}"><img
                                                src="{{ asset('assets/Frontend/assets/img/Social Media icon 5.png') }}"
                                                alt="social" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-mini-box">
                            <div class="trainer-card">
                                <div class="trainer-mini-img">
                                    <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_5) !!}" alt="img" />
                                </div>
                                <div class="trainer-mini-text">
                                    <h4>{{ $postData->name_5 }}</h4>
                                    <div class="trainer-social">
                                        <a href="{{ $postData->fb_5 }}"><img
                                                src="{{ asset('assets/Frontend/assets/img/Social Media icon 5.png') }}"
                                                alt="social" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="trainer-mini-box">
                            <div class="trainer-card">
                                <div class="trainer-mini-img">
                                    <img src="{!! asset('assets/img/uploaded/home/' . $postData->image_6) !!}" alt="img" />
                                </div>
                                <div class="trainer-mini-text">
                                    <h4>{{ $postData->name_6 }}</h4>
                                    <div class="trainer-social">
                                        <a href="{{ $postData->fb_6 }}"><img
                                                src="{{ asset('assets/Frontend/assets/img/Social Media icon 5.png') }}"
                                                alt="social" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- trinner end -->
    <!-- review -->
    <div class="review">
        <div class="container">
            <div class="course-header">
                @foreach ($testimonial_title as $postData)
                    <h2>{{ $postData->title }}</h2>
                @endforeach
                <div class="arrow review-arrow">
                    <i class="fa-solid fa-angle-left review-left"></i>
                    <i class="fa-solid fa-angle-right review-right"></i>
                </div>
            </div>
                <div class="review-content">
                    @foreach ($testimonial_content as $postData)
                        <div class="review-card">
                            <div class="review-box">
                                <div class="rating">
                                    <img src="{{ asset('assets/Frontend/assets/img/star.png') }}" alt="star" />
                                    <img src="{{ asset('assets/Frontend/assets/img/star.png') }}" alt="star" />
                                    <img src="{{ asset('assets/Frontend/assets/img/star.png') }}" alt="star" />
                                    <img src="{{ asset('assets/Frontend/assets/img/star.png') }}" alt="star" />
                                    <img src="{{ asset('assets/Frontend/assets/img/star.png') }}" alt="star" />
                                </div>
                                <p>{!! Str::limit($postData->description, '150', '...') !!}</p>

                                <div class="student-profile">
                                    <div class="student-img">
                                        <img src="{!! asset('assets/img/uploaded/home/' . $postData->image) !!}" alt="std" />
                                    </div>
                                    <div class="student-text">
                                        <h4>{{ $postData->name }}</h4>
                                        <h5>{!! $postData->position !!}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </div>
    </div>

    <!-- review ened -->
@endsection
