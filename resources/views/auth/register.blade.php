<!doctype html>
<html lang="en">

<head>
    <title>Flash School - Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{('assets/back/login/css/style.css')}}">

</head>

<body>
    <section class="ftco-section bg-dark">
        <div class="container" style="margin-top: -80px;">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Register</h3>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nama Lengkap">
                            </div>
                            <div class="form-group d-flex">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                            </div>
                            <div class="form-group d-flex">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                            </div>
                            <div class="form-group d-flex">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Konfirmasi Password">
                            </div>
                            <div class="form-group d-flex">
                                <select name="role" id="" class="form-control">
                                    <option>Hak Akes</option>
                                    <option value="admin">Admin</option>
                                    <option value="development">Development</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-primary rounded submit px-3">Daftar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('assets/back/loginjs/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/back/loginjs/popper.js')}}"></script>
    <script src="{{ asset('assets/back/loginjs/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/back/loginjs/main.js')}}"></script>

</body>

</html>
