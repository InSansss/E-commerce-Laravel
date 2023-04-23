<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>shopRavel</title>
    <script src="https://kit.fontawesome.com/a2aef24f94.js" crossorigin="anonymous"></script>
    @yield('linkcss')
</head>

<body>
    @include('frame.navbar')
    <div class="container">
        @yield('container')
    </div>
    @yield('script')

</body>

</html>
