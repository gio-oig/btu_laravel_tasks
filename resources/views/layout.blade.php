<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/app.css">
    <title>@yield('title','No Title')</title>
</head>

<body class="{{$theme}}">
    @include('components.header')

    @yield('content')

    @if($footer)
     @include('components.footer')
    @endif 
</body>
</html>