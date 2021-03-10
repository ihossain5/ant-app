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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css"
        integrity="sha512-In/+MILhf6UMDJU4ZhDL0R0fEpsp4D3Le23m6+ujDWXwl3whwpucJG1PEmI3B07nyJx+875ccs+yX2CqQJUxUw=="
        crossorigin="anonymous" />

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
                    <a href="index.html" class="logo logo-admin"><img
                            src="{{ asset('backend/assets/images/logo_dark.png') }}" height="30" alt="logo"></a>
                </h3>

                <div class="p-3">
                    <h4 class="text-muted font-18 m-b-5 text-center">Register Here</h4>
                    <p class="text-muted text-center">Get your account now.</p>

                    {{-- <form class="form-horizontal m-t-30 registerForm" method="POST" action="{{ route('register') }}"
                        enctype="multipart/form-data">
                        @csrf --}}
                    {{-- <form class="form-horizontal m-t-30 " method="POST" action="{{ route('register') }}"
                        enctype="multipart/form-data">
                        @csrf --}}
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                            <label for="useremail">Email</label>
                            <input type="email" class="form-control" id="useremail" name="email"
                                placeholder="Enter email">
                        </div>

                        <div class="form-group">
                            <label for="username">User Name</label>
                            <input type="text" class="form-control" id="username" name="name"
                                placeholder="Enter username">
                        </div>

                        <div class="form-group">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Enter password">
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Password Confirmation</label>
                            <input type="password" class="form-control" name="password_confirmation"
                                id="password_confirmation" placeholder="Confirm password">
                        </div>
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" data-height="300" class="form-control dropify" name="photo" id="photo">
                        </div>


                        <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>

                        <div class="form-group m-t-10 mb-0 row">
                            <div class="col-12 m-t-20">
                                <p class="font-14 text-muted mb-0">By registering you agree to the company <a
                                        href="#">Terms of Use</a></p>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="m-t-40 text-center">
            <p>Already have an account ? <a href="{{ 'login' }}"
                    class="font-500 font-14 text-primary font-secondary"> Login </a> </p>
            {{-- <p>© 2018 Fonik. Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand</p> --}}
        </div>
    </div>

    @include('admin.layouts.scripts')
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.js"
        integrity="sha512-hJsxoiLoVRkwHNvA5alz/GVA+eWtVxdQ48iy4sFRQLpDrBPn6BFZeUcW4R4kU+Rj2ljM9wHwekwVtsb0RY/46Q=="
        crossorigin="anonymous"></script>

    <script>
        // dropify for image uploading
        $('.dropify').dropify();

        // $(document).ready(function() {
        //     $(".registerForm").validate({
        //         rules: {
        //             name: {
        //                 required: true,
        //             },
        //             email: {
        //                 required: true,
        //                 email: true,
        //             },
        //             password: {
        //                 required: true,
        //                 minlength: 6,
        //             },
        //             password_confirmation: {

        //                 equalTo: '[name="password"]'
        //             },
        //         },
        //         messages: {
        //             name: {
        //                 required: 'Please insert your name',
        //             },
        //             email: {
        //                 required: 'Please insert your email',
        //                 email: 'Email must be a valid email',
        //             },
        //             password: {
        //                 required: 'Please insert your password',
        //                 minlength: 'password must be at least 6 character long',
        //             },
        //             password_confirmation: {
        //                 equalTo: 'Password and confirm password does not match',
        //             }
        //         },
        //         errorPlacement: function(label, element) {
        //             label.addClass('mt-2 text-danger');
        //             label.insertAfter(element);
        //         },
        //     });
        // });

    </script>
</body>

</html>
