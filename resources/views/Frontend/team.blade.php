@extends('Frontend.layouts.website')
@section('website')

    <!-- top banner  -->
    @foreach ($header as $postData)
        <div class="top-banner-team"
            style="
                background: linear-gradient(
                    89.92deg,
                    rgba(0, 25, 64, 0.9) 51.56%,
                    rgba(0, 0, 0, 0) 99.93%
                    ),
                    url(img/top-banner/banner-home.jpg);
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                ">
            <div class="container">
                <div class="top-banner-team-left">
                    <h1>{!! $postData->title !!}</h1>
                </div>
                <div class="top-banner-team-right">
                    <img src="{!! asset('assets/img/uploaded/team/' . $postData->image) !!}" alt="img" />
                </div>
            </div>
        </div>
    @endforeach
    <!-- top banner  ende -->

    <!-- team member -->

    <div class="team-member">
        <div class="container">
            <div class="team-member-content">
                @foreach ($team as $postData)
                    <div class="team-member-box">
                        <div class="team-member-img">
                            <img src="{!! asset('assets/img/uploaded/team/' . $postData->image) !!}" alt="person" />
                        </div>
                        <div class="team-member-text">
                            <h3>{{ $postData->name }}</h3>
                            <h5>{{ $postData->position }}</h5>
                            <p>{!! $postData->description !!}</p>
                            <div class="team-social">
                                @if ($postData->social_1 != '')
                                    <a href="{!! $postData->social_1 !!}">
                                        <div class="facebook">
                                            <img src="{{ asset('assets/Frontend/assets/img/fb.png') }}" alt="image" />
                                        </div>
                                    </a>
                                @endif
                                @if ($postData->social_2 != '')
                                    <a href="{!! $postData->social_2 !!}">
                                        <div class="whatsapp">
                                            <img src="{{ asset('assets/Frontend/assets/img/wb.png') }}" alt="image" />
                                        </div>
                                    </a>
                                @endif
                                @if ($postData->social_3 != '')
                                    <a href="{!! $postData->social_3 !!}">
                                        <div class="phone">
                                            <img src="{{ asset('assets/Frontend/assets/img/ph.png') }}" alt="image" />
                                        </div>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- team member end -->

    @endsection
