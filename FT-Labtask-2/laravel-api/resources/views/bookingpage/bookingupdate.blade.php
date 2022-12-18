@include('usersinclude.usersheader')


<body>

    @include('usersinclude.usersnavbar')
    @include('usersinclude.userscontainer')
    @include('bookinglayout.panelsidebar')


    <div class="untree_co-section orders-panel">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-3 order-list ml-auto">
                    <h2 class="section-title text-justify">My Order</h2>
                    <form action="{{route('myorderupdate', $userorder->id)}}" class="contact-form" method="post" data-aos="fade-up" data-aos-delay="200">
                    <!-- {{method_field('post')}} -->
                    
                    
                    <!-- @method('PUT') -->
                    @csrf

                        <input type="text" name="id" value="{{$userorder->id}}" class="form-control" readonly>
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                
                                    <label class="text-black" for="fname">Name</label>
                                    <input type="text" name="name" value="{{$userorder->name}}" class="form-control" id="fname">
                                   
                                </div>
                            </div>

                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Email address</label>
                                    <input type="email" name="email" value="{{$userorder->email}}" class="form-control" id="email">
                                
                                   
                                </div>
                            </div> 
                            
                            
                            
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Phone Number</label>
                                    <input name="phone" value="{{$userorder->phone}}" class="form-control" id="phone">
                                   
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Destination</label>
                                    <input name="destination" value="{{$userorder->destination}}" class="form-control" id="phone">
                                   
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Total Members</label>
                                    <input name="members" value="{{$userorder->members}}" class="form-control" id="phone">
                                   
                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Total Days</label>
                                    <input name="days" value="{{$userorder->days}}" class="form-control" id="phone">
                                   
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
