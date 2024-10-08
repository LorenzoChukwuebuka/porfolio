 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     @vite('resources/js/app.js')
     @vite('resources/css/app.css')
     <link rel="icon" href="{{ asset('/images/Ebuka.jpeg') }}" type="image/png">
     <!-- Meta Tags for Search Engines -->
     <meta name="description" content="Lawrence Chukwuebuka Obi - Software Engineer">
     <meta name="author" content="Lawrence Chukwuebuka Obi - Software Engineer">
     <meta property="og:title" content="Lawrence Chukwuebuka Obi - Software Engineer">
     <meta property="og:description" content="Lawrence Chukwuebuka Obi - Software Engineer">
     <meta property="og:image" content="{{ asset('/images/Ebuka.jpeg') }}">
    <meta property="og:url" content="{{ $metaUrl ?? 'https://lorenzochukwuebuka.com.ng' }}">
     <meta property="og:type" content="website">
     <title> {{ $title ?? "Lawrence Chukwuebuka Obi" }}</title>

 </head>

 <body class="antialiased">
     <div id="app">
         {{ $slot }}
     </div>
 </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
 </script>
