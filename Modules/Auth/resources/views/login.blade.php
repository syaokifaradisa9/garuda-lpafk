<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="f{{ asset('assets/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">

        <title>
            Halaman Login SI-GARUDA
        </title>
    </head>
    <body>
        <div class="content d-inline-block w-100">
            <div class="container">
                <div class="row mt-1">
                    <div class="col-md-6">
                        <img src="{{ asset('assets/svg/undraw_remotely_2j6y.svg') }}" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-6 contents">
                        <div class="row justify-content-center pt-5">
                            <div class="col-md-8">
                                <div class="mb-4">
                                    <h3>
                                        SI - GARUDA
                                    </h3>
                                    <p class="mb-4">
                                        Sistem Informasi Gasan Gerak Cepat, Unggul dan Amanah Dalam Data
                                    </p>
                                </div>
                                <form action="#" method="post">
                                    @csrf

                                    <div class="form-group first">
                                        <label for="email">Email</label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                    <div class="form-group last mb-4 mt-2">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password">
                                    </div>

                                    <button class="btn btn-block btn-primary" type="submit">
                                        Login
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
        <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/auth.js') }}"></script>
    </body>
</html>