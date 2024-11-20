<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ragistration</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <style>
        .card {
            height: 100vh !important;
        }

        .rounded-t-5 {
            border-top-left-radius: 0.5rem;
            border-top-right-radius: 0.5rem;
        }

        .form-check-input:checked {
            background-color: #b0c364 !important;
            border-color: #b0c364 !important;
        }

        a {
            color: #b0c364 !important;
        }

        @media (min-width: 992px) {
            .rounded-tr-lg-0 {
                border-top-right-radius: 0;
            }

            .rounded-bl-lg-5 {
                border-bottom-left-radius: 0.5rem;
            }
        }
    </style>
</head>

<body>
    <!-- Section: Design Block -->
    <section class="text-center text-lg-start">
        <div class="card mb-3">
            <div class="row g-0 d-flex align-items-center">
                <div class="col-4"></div>
                <div class="col-lg-4 justify-content-center border mt-5 shadow-sm">
                    <div class="col-12 text-center">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('common/image/logo.png') }}" alt="" />
                        </a>
                    </div>
                    @if (session()->has('error'))
                        <div class="alert alert-success py-3">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="card-body py-5 px-md-5">
                        <form method="post" action="{{ route('login') }}">
                            @csrf
                            <!-- Email input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">User Name</label>
                                <input type="text" name="user_name" id="form2Example1" class="form-control" />
                                @if ($errors->has('user_name'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('user_name') }}
                                    </div>
                                @endif
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Email address</label>
                                <input type="email" name="email" id="form2Example1" class="form-control" />
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example1">Phone</label>
                                <input type="email" name="email" id="form2Example1" class="form-control" />
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <label class="form-label" for="form2Example2">Password</label>
                                <input type="password" name="password" id="form2Example2" class="form-control" />
                                @if ($errors->has('email'))
                                    <div class="alert alert-danger">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>

                            <!-- 2 column grid layout for inline styling -->
                            <div class="row mb-4">
                                <div class="col d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="form2Example31"
                                            checked />
                                        <label class="form-check-label" for="form2Example31">
                                            Remember me
                                        </label>
                                    </div>
                                </div>

                                <div class="col">
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <input type="submit" data-mdb-button-init data-mdb-ripple-init
                                class="btn btn-block text-white" style="background-color: #b0c364" value="Sign in">
                        </form>
                    </div>
                    <div class="col-12 text-center mb-5">
                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-facebook-f" style="color: black;"></i>
                        </button>

                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-google" style="color: black;"></i>
                        </button>

                        <!-- <button type="button" data-mdb-button-init data-mdb-ripple-init
                                                    class="btn btn-link btn-floating mx-1">
                                                    <i class="fab fa-twitter"></i>
                                                </button> -->

                        <button type="button" data-mdb-button-init data-mdb-ripple-init
                            class="btn btn-link btn-floating mx-1">
                            <i class="fab fa-github" style="color: black;"></i>
                        </button>
                    </div>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->
</body>

</html>