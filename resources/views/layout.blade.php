<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  </head>
  <body>
    <a href="/genres"> Genres</a> |
    <a href="/tracks"> Tracks</a>
    <div class="container-fluid">
      @yield('main')
    </div>
  </body>
</html>
