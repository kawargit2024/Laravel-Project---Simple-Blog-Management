<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> My Web App </title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
  <body>
    <main>

      @session("success")
      <div  class="successMessage">
        {{ session("success") }}
      </div>
      @endsession

     {{ $slot }}
     
    </main>
  </body>
</html>