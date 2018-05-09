<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="Greefi Technologies">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="/css/neat.min.css?v=1.0">
  </head>
  <body>
    <div class="o-page">
      @include ('layouts.nav')
      <main class="o-page__content">
        @include ('layouts.user_info')
        @yield('main_content')
      </main>
    </div>
    <script src="/js/neat.min.js?v=1.0"></script>
  </body>
</html>