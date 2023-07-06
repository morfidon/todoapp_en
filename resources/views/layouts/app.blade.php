<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <link rel="stylesheet" href="{{ asset("css/style.css")  }}">
    <script src="{{ asset("js/script.js") }}"></script>
</head>
<body>

    <h1>@yield("title")</h1>

    @yield("content")

    <nav>
        <a href="{{ route("todoapp.index") }}">To do app</a>
        <a href="{{ route("todoapp.settings.index") }}">Settings</a>
        <a href="{{ route("blog.index") }}">Blog</a>
        <a href="{{ route("home.index") }}">Home</a>
    </nav>
    <img src="{{ asset("images/cat.jpg") }}" alt="" srcset="">
</body>
</html>