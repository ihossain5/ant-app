<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Ant App Register</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    @include('admin.layouts.css')

</head>


<body class="fixed-left">

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!-- Begin page -->
    <div class="accountbg"></div>
    <div class="wrapper-page">
        <div class="card">
            <div class="card-body">

                <h3 class="text-center m-0">
                    <a href="{{ route('admin.home') }}" class="logo logo-admin"><img
                            src="{{ asset('backend/assets/images/logo_dark.png') }}" height="30" alt="logo"></a>
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Welcome Back !</h4>
                    <p class="text-muted text-center">Sign in to continue to Fonik.</p>

                    <form class="form-horizontal m-t-30 loginForm" method="POST" action="{{ route('login') }}">@csrf

                        <div class="form-group">
                            <label for="useremail">Email</label>
                            <input type="email" class="form-control" id="useremail" name="email"
                                placeholder="Enter email">
                        </div>



                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" name="password" id="userpassword"
                                placeholder="Enter password">
                        </div>




                        <div class="form-group row m-t-20">
                            <div class="col-sm-6">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Log
                                    In</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="m-t-40 text-center">
            <p>Don't have an account ? <a href="{{ route('register') }}"
                    class="font-500 font-14 text-primary font-secondary"> Signup Now </a> </p>
            {{-- <p>© 2018 Fonik. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p> --}}
        </div>
    </div>

    @include('admin.layouts.scripts')

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>

    <script>
        $(document).ready(function() {
            $(".loginForm").validate({
                rules: {
                    email: {
                        required: true,
                        email: true,
                    },
                    password: {
                        required: true,
                        minlength: 6,
                    },
                },
                messages: {
                    email: {
                        required: 'Please insert your email',
                        email: 'Email must be a valid email',
                    },
                    password: {
                        required: 'Please insert your password',
                        minlength: 'password must be at least 6 character long',
                    },
                },
                errorPlacement: function(label, element) {
                    label.addClass('mt-2 text-danger');
                    label.insertAfter(element);
                },
            });
        });

    </script>
</body>

</html>
