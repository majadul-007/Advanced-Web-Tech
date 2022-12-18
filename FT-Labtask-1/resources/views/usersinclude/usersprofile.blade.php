@include('usersinclude.usersheader')


<body>

    @include('usersinclude.usersnavbar')
    @include('usersinclude.userscontainer')


    <div class="untree_co-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-3 ml-auto">
                    <h2 class="section-title text-justify">My Profile</h2>
                    <form action="{{route('myprofileedit', $traveluser->id)}}" class="contact-form" method="post" data-aos="fade-up" data-aos-delay="200">
                    <!-- {{method_field('post')}} -->
                    
                    
                    <!-- @method('PUT') -->
                    @csrf

                        <input type="text" name="id" value="{{$traveluser->id}}" class="form-control" readonly>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                
                                    <label class="text-black" for="fname">User Name</label>
                                    <input type="text" name="name" value="{{$traveluser->name}}" class="form-control" id="fname">
                                   
                                </div>
                            </div>

                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Email address</label>
                                    <input type="email" name="email" value="{{$traveluser->email}}" class="form-control" id="email">
                                
                                   
                                </div>
                            </div> 
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black">Password</label>
                                    <input type="password" name="password" value="{{$traveluser->password}}" class="form-control">
                                   
                                </div>
                            </div>
                            
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Address</label>
                                    <input name="address" value="{{$traveluser->address}}" class="form-control">
                                   
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Phone Number</label>
                                    <input name="phone" value="{{$traveluser->phone}}" class="form-control" id="phone">
                                   
                                </div>
                            </div>
                        </div>
                        
            

                        <input type="submit"  class="btn btn-success" value="EDIT">
                        
                    </form>
                </div>
                
            </div>
        </div>
    </div> 

    @include('usersinclude.usersfooter')
   
    

</body>

</html>
