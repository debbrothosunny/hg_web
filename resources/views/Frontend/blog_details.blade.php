@extends('Frontend.layouts.website')
@section('website')
    <!-- top banner  -->

    <div
      class="top-banner-team height-360px"
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
      "
    >
      <div class="container">
        <div class="top-banner-team-left">
          <h1>Blog Ditels</h1>
        </div>
      </div>
    </div>

    <!-- top banner  ende -->

    <!-- blog details  -->
    <div class="blog-details">
      <div class="container">
        <div class="blog-details-box">
        @foreach ($Blog_post as $postData)
          <div class="blog-details-main-img">
            <img src="{!! asset('assets/img/uploaded/blog/' . $postData->image) !!}" alt="img" />
          </div>

          <div class="blog-details-main-text">
            <h2>{{ $postData->title }}</h2>

            <div class="blog-res">
              <div class="blog-res-box">
                <i class="fa-solid fa-earth-americas"></i>
                <small>{{ $postData->created_at }}</small>
              </div>
              <div class="blog-res-box">
                <i class="fa-brands fa-facebook-messenger"></i>
                <small>{{ $postData->created_at }}</small>
              </div>
              <div class="blog-res-box">
                <i class="fa-solid fa-thumbs-up"></i>
                <small>{{ $postData->created_at }}</small>
              </div>
            </div>
            <p>
            {!! Str::limit($postData->description_1, '300', '...') !!}
            </p>
            <p>
            {!! Str::limit($postData->description_2, '300', '...') !!}
            </p>

            <div class="q-text">
              <div class="q-left"><i class="fa-solid fa-quote-left"></i></div>
              <div class="q-right">
                <h4>
                {!! Str::limit($postData->description_3, '300', '...') !!}
                </h4>
              </div>
            </div>

            <div class="blog-tags">
              <h5>Tags:</h5>
              @foreach ($Blog_category as $postData)
              <a href="#">{{ $postData->name }}</a>
              @endforeach
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!-- blog details  end -->
  @endsection