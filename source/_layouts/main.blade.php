<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}" class="min-h-full scroll-smooth">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="canonical" href="{{ $page->getUrl() }}">
  <meta name="description" content="{{ $page->description }}">
  <meta name="keywords" content="{{ $page->keywords }}">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">
  <title>{{ $page->title }}</title>
  <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
  <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
</head>

<body class="text-gray-900 font-sans antialiased min-h-full">
  @yield('body')
</body>

</html>
