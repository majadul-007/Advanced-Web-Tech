@include('usersinclude.usersheader')


<body>

    @include('usersinclude.usersnavbar')
    @include('usersinclude.userscontainer')
    @include('bookinglayout.panelsidebar')


    @foreach ($userorders as $userorder)
    <div class="untree_co-section orders-panel">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 order-list ml-auto">
                    <h2 class="section-title text-justify">Orders</h2>
                    <form action="" class="contact-form" method="" data-aos="fade-up" data-aos-delay="200">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-9">
                                <div class="form-group">
                                    <label class="text-black" for="fname">User Name</label>
                                    <input type="text" name="" value="{{$userorder->name}}" class="form-control" id="fname">
                                    @error("name")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Email address</label>
                                    <input type="email" name="email" value="{{$userorder->email}}" class="form-control" id="email">
                                    @error("email")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="col-9">
                                <div class="form-group">

                                    <label class="text-black" for="email">Phone Number</label>
                                    <input name="phone" value="{{$userorder->phone}}" class="form-control" id="phone">
                                    @error("phone")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-9">
                                <div class="form-group">
                                    <label class="text-black" for="destination">Destination</label>
                                    <input type="text" name="destination" value="{{$userorder->destination}}" class="form-control" id="fname">
                                    @error("destination")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror



                                </div>
                            </div>

                            <div class="col-9">
                                <div class="form-group">
                                    <label class="text-black" for="members">Total Members</label>
                                    <input type="text" name="members" value="{{$userorder->members}}" class="form-control" id="fname">
                                    @error("members")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror



                                </div>
                            </div>
                            <div class="col-9">
                                <div class="form-group">
                                    <label class="text-black" for="days">Total Days</label>
                                    <input type="text" name="days" value="{{$userorder->days}}" class="form-control" id="fname">
                                    @error("days")
                                    <span class="text-denger">{{$message}}</span>
                                    @enderror


                                </div>
                            </div>
                        </div>


                        <button class="btn order-btn mr-3"><a href="/myorderupdate/{{$userorder->id}}">Update Order</a></button>
                        <button class="btn cancel-btn"><a href="/myordercancel/{{$userorder->id}}">Cancel Order</a></button>
                    </form>
                </div>

            </div>
        </div>
    </div>

    @endforeach



    @include('usersinclude.usersfooter')

</body>

</html>