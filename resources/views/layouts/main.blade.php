<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>GOODIES - {{ $title }}</title>

    @include('partials.css')
    
</head>
<body id="page-top">

<section class="landing-page no-skin-config">
    @include('partials.navbar')

    @yield('container')
</section>

@include('partials.javascript')

</body>
</html>
