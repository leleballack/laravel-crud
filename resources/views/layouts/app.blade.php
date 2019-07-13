<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield("page_title", "BoolShop Homepage")</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
    <script src="{{ asset("js/app.js") }}" charset="utf-8"></script>
  </head>
  <body>
    @include('layouts.nav')

    <div class="container">
      @yield("content")
    </div>

  </body>
</html>
