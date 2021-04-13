<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>App Name - @yield('title')</title>
        @include('layouts.meta')
        @include('layouts.css')
        <link rel="stylesheet" type="text/css" href="/css/app.css">
        <script src="https://cdn.jsdelivr.net/npm/js-cookie@rc/dist/js.cookie.min.js"></script>
        <script src="/js/app.js"></script>
</head>
<body>
   @include('layouts.nav')
   
   <div class="container">
       @yield('content')
   </div>
   
   @include('layouts.footer')
   @include('layouts.js')
</body>
</html>