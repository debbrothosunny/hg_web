@extends('Frontend.layouts.website')
@section('website')

    <!-- top banner  -->

    @foreach($Blog_header as $postData)
      <div
        class="top-banner-team height-360px"
        style="
          background: linear-gradient(
              89.92deg,
              rgba(0, 25, 64, 0.9) 51.56%,
              rgba(0, 0, 0, 0) 99.93%
            ),
            url({!! asset('assets/img/uploaded/gallery/' . $postData->image) !!});
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
        "
      >
        <div class="container">
          <div class="top-banner-team-left">
            <h1>{{ $postData->title }}</h1>
          </div>
        </div>
      </div>
    @endforeach


    <!-- top banner  ende -->

    <!-- our course  -->

    <div class="our-course-page">
      <div class="container">
        <div class="our-course-content">
          <div class="our-course-box">
           @foreach ($Blog_post as $postData)
            <div class="our-course-img">
              <img src="{!! asset('assets/img/uploaded/blog/' . $postData->image) !!}" alt="course" />
            </div>
            <div class="our-course-text">
            <a href="#"> {{$postData->title}}</a>
              <h3>{{ $postData->CatName->name }}</h3>  

              <div class="our-course-btn">
                <a href="#">{{ $postData->created_at }}</a>
                <a href="#">{{ $postData->created_at }}</a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <!-- our course  end -->
    @endsection
