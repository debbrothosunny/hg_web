@extends('Frontend.layouts.website')
@section('website')

    <!-- top banner  -->
    @foreach ($header as $postData)
        <div class="top-banner-center"
            style="
                background: linear-gradient(
                    89.92deg,
                    rgba(0, 25, 64, 0.9) 51.56%,
                    rgba(0, 0, 0, 0) 99.93%
                ),
                url({!! asset('assets/img/uploaded/about/' . $postData->image) !!});
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                ">
            <div class="container">
                <h1>{!! $postData->title !!}</h1>

                <p>{!! $postData->sub_title !!}</p>

                <div class="top-banner-center-btn">
                    <a href="#">Book Now</a>
                    <a href="#">Contact us</a>
                </div>
            </div>
        </div>
    @endforeach
    <!-- top banner  ende -->

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

    <!-- service -->
    @foreach ($service as $postData)
        <div class="service">
            <div class="container">
                <div class="service-header">
                    <h2>{{ $postData->title }}</h2>
                    <p>{!! $postData->description !!}</p>
                </div>
                <div class="service-content">
                    <div class="service-box">
                        <div class="service-img">
                            <img src="{!! asset('assets/img/uploaded/about/' . $postData->image_1) !!}" alt="service" />
                        </div>
                        <div class="service-text">
                            <h3>{!! $postData->title_1 !!}</h3>
                            <p>{!! $postData->description_1 !!}</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-text">
                            <h3>{!! $postData->title_2 !!}</h3>
                            <p>{!! $postData->description_2 !!}</p>
                            <a href="#">Read More</a>
                        </div>
                        <div class="service-img">
                            <img src="{!! asset('assets/img/uploaded/about/' . $postData->image_2) !!}" alt="service" />
                        </div>
                    </div>
                    <div class="service-box">
                        <div class="service-img">
                            <img src="{!! asset('assets/img/uploaded/about/' . $postData->image_3) !!}" alt="service" />
                        </div>
                        <div class="service-text">
                            <h3>{!! $postData->title_3 !!}</h3>
                            <p>{!! $postData->description_3 !!}</p>
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <!-- service end -->

    <!-- success -->
        <div class="success"
            style="
                background: linear-gradient(rgba(0, 0, 0, 0.668), rgba(0, 0, 0, 0.702)),
                url(./img/success.png);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            ">
            <div class="container">
                @foreach ($progress as $postData)
                <div class="success-box">
                    <h2>{{ $postData->value }}+</h2>
                    <h4>{{ $postData->title }}</h4>
                </div>
                @endforeach
            </div>
        </div>
    <!-- success end -->

    <!-- happy student -->

    <div class="happy-student">
        <div class="container">
                @foreach ($testimonial_title as $postData)
                    <h2>{{ $postData->title }}</h2>
                @endforeach
            <div class="happy-student-content">
                @foreach ($testimonial_content as $postData)
                <div class="happy-student-box">
                    <div class="happy-student-img">
                        <img src="{!! asset('assets/img/uploaded/home/' . $postData->image) !!}" alt="person" />
                    </div>
                    <div class="happy-student-text">
                        <h3>{{ $postData->name }}</h3>
                        <a href="">{{ $postData->position }}</a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="happy-student-content-show">
                <a href="">See all</a>
            </div>
        </div>
    </div>

    <!-- happy student end -->

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

    @endsectio
