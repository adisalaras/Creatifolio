<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('css/output.css') }}" rel="stylesheet">
  @stack('before-style')
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  @stack('after-style')
  <title>@yield('title')</title>
</head>
<body class="text-portto-black font-poppins">
    @yield('content')
    @stack('before-script')
    <script src="https://cdn.tailwindcss.com"></script>
    @stack('after-script')

</body>
</html>