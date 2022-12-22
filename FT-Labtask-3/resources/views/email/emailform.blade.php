<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <title>Document</title> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset ('css/email.css') }}"rel="stylesheet">
</head>
<body>
    
    <div class="form-body">
        <div class="row">
            
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h1 class="text-center">Send Us A Message</h1>
                        {{-- <p>Fill in the data below.</p> --}}
                        <form action="{{route('contact')}}" class="requires-validation"   method="post">

                            {{ csrf_field() }}

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                               
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                 
                            </div>

                           


                           <div class="col-md-12">
                              <input class="form-control" type="text" name="phone" placeholder="Phone Number" required>
                               {{-- <div class="valid-feedback">Password field is valid!</div> --}}
                               {{-- <div class="invalid-feedback">Password field cannot be blank!</div> --}}
                           </div>

                           <div class="col-md-12">
                            <input class="form-control" type="text" name="message" placeholder="Message" required>
                            
                         </div>


                           

                        
                  

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-success">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>