<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/dc.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>{{ env('APP_NAME')}} | @yield ('title')</title>

  @yield ('cdns')

  @vite('resources/js/app.js')
</head>

<body>
@include ('includes.header')
<main>
@yield ('content')
</main>

@include ('includes.footer')

@yield ('scripts')
</body>

</html>