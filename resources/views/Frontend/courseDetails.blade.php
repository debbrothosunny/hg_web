@extends('Frontend.layouts.website')
@section('website')

    <!-- top banner  -->
    @foreach ($header as $postData)
    <div
    class="top-banner-course"
    style="
      background: linear-gradient(
          89.92deg,
          rgba(0, 25, 64, 0.9) 51.56%,
          rgba(0, 0, 0, 0) 99.93%
        ),
        url({{ asset('assets/Frontend/assets/img/top-banner/banner-home.jpg') }});
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      height: 400px;
    "
  ></div>
    @endforeach
    <!-- top banner  ende -->

    <div class="course-details">
      <div class="container">
        <div class="course-left">
          <div class="course-img">
            <img src="{!! asset('assets/img/uploaded/course/' . $course->image) !!}" alt="course-img" />
          </div>
          <div class="course-details-header">
            <h2>{{ $course->title }}</h2>
            <div class="course-btn">
              <a style="color:#000;" href="#">Duration: {{ $course->time }}</a>
              <a style="background: #c6b5eb; margin-left:10px; color:#000;" href="#">Course Fee: {{ $course->fee }}</a>
            </div>
          </div>
        </div>
        <div class="course-right">
          <h3>{{ $course->title }}</h3>
          <p>{!! $course->description !!}</p>
        </div>
      </div>
    </div>
    @endsection
