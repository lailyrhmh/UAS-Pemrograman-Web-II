
@include('partials.css')
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>GOODIES | Login</title>

</head>
<div class="ibox-content">
    @if(session()->has('success'))
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        {{ session('success') }} <a class="alert-link" href="#">Please Login</a>.
    </div>
    @endif

    <div class="ibox-content">
        @if(session()->has('loginError'))
        <div class="alert alert-danger alert-dismissable">
            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
            {{ session('loginError') }} <a class="alert-link" href="#"></a>.
        </div>
        @endif

<body class="gray-bg">
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>

            <div>

                <h1 class="logo-name">GD+</h1>

            </div>
            <h3>Welcome to GOODIES</h3>
            <p>Perfectly designed and precisely prepared admin theme with over 50 pages with extra new web app views.
                <!--Continually expanded and constantly improved Inspinia Admin Them (IN+)-->
            </p>
            <p>Login in. To see it in action.</p>
            <form class="m-t" role="form" action="/login" method="POST">
                @csrf
                <div class="form-group">
                    <input type="email" name="email" class="form-control @error("email") is invalid @enderror" placeholder="email@example.com" id="email" autofocus required value="{{ old ('email')}}">
                </div>
                @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
                <button type="submit" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="/register">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>
