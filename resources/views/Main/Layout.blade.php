<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css')}}">
</head>
<body>
    @include("Share.ads")
    <div class="container">
         @yield("content") 
    </div>
         @yield("sidebar")
</body>
</html>