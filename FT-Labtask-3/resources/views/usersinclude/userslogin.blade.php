@include('usersinclude.usersheader')


<body>

  @include('usersinclude.usersnavbar')
  @include('usersinclude.userscontainer')


  <div class="untree_co-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 mb-3 ml-auto">
          <h2 class="section-title text-justify">User Login</h2>
          <form action="{{route('userlogin')}}" class="contact-form" method="post" data-aos="fade-up" data-aos-delay="100">
            {{ csrf_field() }}
            <div class="row">


              <div class="col-8">
                <div class="form-group">

                  <label class="text-black" for="email">Email address</label>
                  <input type="email" name="email" value="<?php if(isset($_COOKIE['remember'])) {echo $_COOKIE['remember'];} ?>" class="form-control" id="email">
                  @error("email")
                  <span class="text-denger">{{$message}}</span>
                  @enderror
                </div>
                <span>
						{{Cookie::get('name')}}
				</span>
              </div>
              <div class="col-8">
                <div class="form-group">

                  <label class="text-black">Password</label>
                  <input type="password" name="password" value="{{old('password')}}" class="form-control">
                  @error("password")
                  <span class="text-denger">{{$message}}</span>
                  @enderror
                </div>
              </div>
              

            </div>
            <div class="form-check mb-3 mt-3">
                <input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
              </div>
            <!-- 
            <div class="form-group">
              <label class="text-black" for="message">Message</label>
              <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
            </div> -->

            <button type="submit" class="btn btn-primary">Log In</button>
          </form>
        </div>
        <!-- <div class="col-lg-5 ml-auto">
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-house"></span>
            <address class="text">
              155 Market St #101, Paterson, NJ 07505, United States
            </address>
          </div>
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-phone-call"></span>
            <address class="text">
              +1 202 2020 200
            </address>
          </div>
          <div class="quick-contact-item d-flex align-items-center mb-4">
            <span class="flaticon-mail"></span>
            <address class="text">
              @info@mydomain.com
            </address>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  @include('usersinclude.usersfooter')

</body>

</html>