<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title", "Hello Laravel World")</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.rtl.min.css" integrity="sha512-rXhL8a+X3wTosWn2Zgd/5L8rfWrpff7qdOnl7Wg1n2zHk8lHGhiSujoyxoKw1nf43kZAzJoe0Z0ymr2Kkku7lQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.header')
    
    @yield("content")

</body>
</html>