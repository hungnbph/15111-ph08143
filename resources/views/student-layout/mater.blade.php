<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @yield('style')
</head>
<body>
 <header>
 <h1>@yield('header')</h1>
 </header>
@yield('content')

 <footer>@yield('footer')</footer>
 </body>
</html>