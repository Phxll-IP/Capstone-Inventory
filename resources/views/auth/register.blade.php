<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Admin Register Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc."/>
        <meta name="author" content="Zoyothemes"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/svfc-icon-rotate.gif') }}">

        <!-- App css -->
        <link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="{{ asset('backend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

        <style>
    .account-page {
        background-image: url("{{ asset('backend/assets/images/BG 1.png') }}");
    }
</style>

    </head>

    <body>
        <!-- Begin page -->
<div class="account-page">

    <div class="container-fluid p-0">
        <div class="row align-items-center g-0">
            <div class="col-xl-5">
                <div class="row">
                    <div class="col-md-7 mx-auto">
                        <div class="mb-0 border-0 p-md-5 p-lg-0 p-4">
                            <div class="d-grid">     
                                <h3 class="text-center" style="font-family: 'Times New Roman', Times, serif; color: #ffffff"> Admin Account Registration </h3>
                            </div>

                            <div class="pt-0">
    <form method="POST" action="{{ route('register') }}" class="my-4">
        @csrf
        <div class="form-group mb-3">
            <label for="emailaddress" class="form-label" style="color: #ffffff">Name</label>
            <input class="form-control" type="text" id="name" name="name" required=""  placeholder="Enter your name" >
        </div>

        <div class="form-group mb-3">
            <label for="emailaddress" class="form-label" style="color: #ffffff">Email address</label>
            <input class="form-control" type="email" id="email" name="email" required=""  placeholder="Enter your email" >
        </div>

        <div class="form-group mb-3">
            <label for="emailaddress" class="form-label" style="color: #ffffff">Password</label>
            <input class="form-control" type="password" id="password" name="password" required=""  placeholder="Enter your password" >
        </div>

        <div class="form-group mb-3">
            <label for="password" class="form-label" style="color: #ffffff">Confirm Password</label>
            <input class="form-control" type="password" required="" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
        </div>

        <div class="form-group d-flex mb-3">
            <div class="col-sm-6">
                <div class="text-start">
                    <label class="form-check-label" for="checkbox-signin" style="color: #ffffff">or sign in with</label>
                </div>
            </div>
            <div class="col-sm-6 text-end">
                <a class="form-label" style="color: #ffffff">Don't have an account?</a>
                <a class="form-label" style="color: #0b55dd" href='auth-recoverpw.html' > Sign up</a>                             
            </div>
        </div>
        
        <div class="form-group mb-0 row">
            <div class="col-12">
                <div class="d-grid">
                    <button class="btn btn-primary" type="submit" style="color: #ffffff"> Register </button>
                </div>
            </div>
        </div>
    </form>

    

    

                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-7">
                <div class="account-page-bg p-md-5 p-4">
                    <div class="text-center">
                        <h3 class="text-dark mb-3 pera-title" style="font-family: 'Times New Roman', serif; font-size: 2.2rem; font-weight: 400;">
                            SVFC-INVENTORY.
                        </h3>
                        <div class="auth-image">
                            <img src="{{ asset('backend/assets/images/svfc-icon-rotate.gif') }}" class="mx-auto img-fluid"  alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<link href="{{ asset('backend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="app-style" />

        

    <style>

    .account-page {
        background-image: url("{{ asset('backend/assets/images/BG 1.png') }}") !important;
        background-size: cover !important;
        background-position: center !important;
        min-height: 100vh;
        width: 100%;
    }

    .account-page-bg {
        background: transparent !important;
    }

    .pera-title {
        color: #ffffff !important;
    }
</style>


        <!-- Vendor -->
        <script src="{{ asset('backend/assets/libs/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/simplebar/simplebar.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/node-waves/waves.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/waypoints/lib/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/jquery.counterup/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('backend/assets/libs/feather-icons/feather.min.js') }}"></script>

        <!-- App js-->
        <script src="{{ asset('backend/assets/js/app.js') }}"></script>
        
    </body>
</html>