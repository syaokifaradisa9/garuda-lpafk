<!doctype html>
<html lang="en">
    <head>
        <title>SI GALUH | Halaman Login</title>
        <link rel="icon" type="image/png" href="{{ asset('assets/img/logo/logo.png') }}" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.5.1/css/all.css">
        <link rel="stylesheet" href="{{ asset('assets/css/auth/style.css') }}">
        <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
        <style>
            input:focus {
                border-color: #4987C7 !important;
            }
            body {
                font-family: 'Poppins' !important;
            }
            #btn-submit {
                background-color: #4987C7 !important;
            }
            #btn-submit:hover {
                background-color: #3a6c9f !important;
            }
            #login-container {
                display: flex;
                justify-content: center;
                align-items: center;
                height: 90vh;
            }
        </style>
	</head>
	<body>
        <section class="ftco-section pt-0 m-0 vh-100">
            <div class="container vh-100">
                <div id="login-container">
                    <div class="row justify-content-center w-100">
                        <div class="row justify-content-center w-100">
                            <div class="col-md-6 text-center">
                                <img src="{{ asset("assets/img/logo/logo.png") }}" alt="" style="height: 70px">
                                <span style="display: inline-block; width: 10px"></span>
                                <img src="{{ asset("assets/img/logo/logo-kemenkes.png") }}" alt="" style="height: 70px">
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-11 p-2 mt-4">
                            <div class="wrap d-md-flex">
                                <div class="img" style="background-image: url({{ asset("assets/img/background/auth-bg.jpg") }});">
                            </div>
                            <div class="login-wrap p-4 p-md-5">
                                <div class="d-flex">
                                    <div class="w-100 text-center">
                                        <h3 style="color: #4987C7" class="font-weight-bold mb-0">
                                            Nama Aplikasi
                                        </h3>
                                        <p style="font-size: 11pt">
                                            Kepanjangan Aplikasi
                                        </p>
                                    </div>
                                </div>
                                <form action="{{ route("auth.verify") }}" class="signin-form mt-4" method="POST">
                                    @csrf
                                    
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">Email</label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Email" name="email" value="{{ old("email") ?? "" }}">
                                        @error('email')
                                            <span class="invalid-feedback mt-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Password" name="password">
                                        @error('password')
                                            <span class="invalid-feedback mt-2" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control submit px-3 text-white" id="btn-submit">
                                            <i class="fas fa-sign-in-alt mr-2"></i>Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

        <script src="{{ asset("assets/js/auth/jquery.min.js") }}"></script>
        <script src="{{ asset("assets/js/auth/popper.js") }}"></script>
        <script src="{{ asset("assets/js/auth/popper.js") }}"></script>
        <script src="{{ asset("assets/js/auth/main.js") }}"></script>
	</body>
</html>