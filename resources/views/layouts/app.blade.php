<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=@, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
    @yield('content')
    @include('inc.aside')
</body>
</html>