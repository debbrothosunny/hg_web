@extends('Frontend.layouts.website')
@section('website')

<!-- top banner  ende -->

    <!-- certificate -->  

    <div class="certificate">
      <div class="container">
        <div class="certificate-content">
          <div class="certificate-left">
            <form action="#">
              <h3>Verify Your Certificate</h3>
              <div class="certificate-input">
                <input
                  type="text" name="enter"id="enter"placeholder="Enter Your Student ID"/>
              </div>

              <div class="certificate-input">
                <input type="text"name="enter" id="enter" placeholder="Enter Certificate S/N" />
              </div>

              <div class="certificate-input">
                <input type="date" name="date" id="date" placeholder="Issue Date"/>
              </div>

              <div class="certificate-input">
                <input type="text" name="enter"id="enter" placeholder="Enter Your Name"/>
              </div>

              <button type="submit">Verify</button>
            </form>
          </div>
          <div class="certificate-right">
            <img src="img/top-banner/Rectangle 221.png" alt="img" />
          </div>
        </div>
      </div>
    </div>

    <!-- certificate -->
 @endsection