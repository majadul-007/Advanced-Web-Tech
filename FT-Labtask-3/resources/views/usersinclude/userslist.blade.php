@include('usersinclude.usersheader')


<body>

    @include('usersinclude.usersnavbar')
    @include('usersinclude.userscontainer')


@foreach ($travelusers as $traveluser)
    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-3 ml-auto">
                    <h2 class="section-title text-justify">My Profile</h2>
                    <form action="" class="contact-form" method="" data-aos="fade-up" data-aos-delay="200">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-9">
                                <div class="form-group">
                                    <label class="text-black" for="fname">User Id</label>
                                    <input type="text" name="name" value="{{$traveluser->id}}" class="form-control" readonly>
                                    
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <label class="text-black" for="fname">User Name</label>
                                    <input type="text" name="name" value="{{$traveluser->name}}" class="form-control" id="fname">
                                    @error("name")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Email address</label>
                                    <input type="email" name="email" value="{{$traveluser->email}}" class="form-control" id="email">
                                    @error("email")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black">Password</label>
                                    <input type="password" name="password" value="{{$traveluser->password}}" class="form-control">
                                    @error("password")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Address</label>
                                    <input name="address" value="{{$traveluser->address}}" class="form-control">
                                    @error("address")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Phone Number</label>
                                    <input name="phone" value="{{$traveluser->phone}}" class="form-control" id="phone">
                                    @error("phone")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                       

                        <button  class="btn btn-success"><a href="/myprofileedit/{{$traveluser->id}}">Update Account</a></button>
                        <button  class="btn btn-danger"><a href="/myprofiledelete/{{$traveluser->id}}">Delete Account</a></button>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    @endforeach



@include('usersinclude.usersfooter')

</body>

</html>



