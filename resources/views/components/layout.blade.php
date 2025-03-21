 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     @vite('resources/js/app.js')
     @vite('resources/css/app.css')

     <link rel="icon" href="{{ asset('/images/Ebuka.jpg') }}" type="image/png">

     <!-- Primary Meta Tags -->
     <title>{{ $title ?? 'Lawrence Chukwuebuka Obi - Software Engineer' }}</title>
     <meta name="title" content="{{ $title ?? 'Lawrence Chukwuebuka Obi - Software Engineer' }}">
     <meta name="description"
         content="{{ $metaDescription ?? 'Experienced software engineer specializing in web development, DevOps, and modern technologies.' }}">
     <meta name="author" content="Lawrence Chukwuebuka Obi">

     <!-- Canonical URL -->
     <link rel="canonical" href="{{ $metaUrl ?? 'https://lorenzochukwuebuka.com.ng' }}">

     <!-- Open Graph / Facebook -->
     <meta property="og:type" content="article">
     <meta property="og:url" content="{{ $metaUrl ?? 'https://lorenzochukwuebuka.com.ng' }}">
     <meta property="og:title" content="{{ $title ?? 'Lawrence Chukwuebuka Obi - Software Engineer' }}">
     <meta property="og:description"
         content="{{ $metaDescription ?? 'Experienced software engineer specializing in web development, DevOps, and modern technologies.' }}">
     <meta property="og:image" content="{{ asset('/images/Ebuka.jpg') }}">
     <meta property="og:image:width" content="1200">
     <meta property="og:image:height" content="630">

     <!-- Twitter -->
     <meta name="twitter:card" content="summary_large_image">
     <meta name="twitter:url" content="{{ $metaUrl ?? 'https://lorenzochukwuebuka.com.ng' }}">
     <meta name="twitter:title" content="{{ $title ?? 'Lawrence Chukwuebuka Obi - Software Engineer' }}">
     <meta name="twitter:description"
         content="{{ $metaDescription ?? 'Experienced software engineer specializing in web development, DevOps, and modern technologies.' }}">
     <meta name="twitter:image" content="{{ asset('/images/Ebuka.jpg') }}">

     <!-- Keywords (Optional) -->
     <meta name="keywords"
         content="{{ $keywords ?? 'software engineer, web developer, DevOps, Lawrence Chukwuebuka Obi, Nigeria, modern technologies' }}">

     <!-- Additional SEO Enhancements -->
     <meta name="robots" content="index, follow">
     <meta name="googlebot" content="index, follow">

     <!-- Structured Data (JSON-LD) -->
     <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ $metaUrl ?? 'https://lorenzochukwuebuka.com.ng' }}"
        },
        "headline": "{{ $title ?? 'Lawrence Chukwuebuka Obi - Software Engineer' }}",
        "description": "{{ $metaDescription ?? 'Experienced software engineer specializing in web development, DevOps, and modern technologies.' }}",
        "image": "{{ asset('/images/Ebuka.jpg') }}",
        "author": {
            "@type": "Person",
            "name": "Lawrence Chukwuebuka Obi"
        },
        "publisher": {
            "@type": "Organization",
            "name": "Lorenzo Chukwuebuka",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('/images/Ebuka.jpg') }}"
            }
        },
        "datePublished": "{{ $publishedDate ?? now()->toIso8601String() }}",
        "dateModified": "{{ $updatedDate ?? now()->toIso8601String() }}"
    }
    </script>
 </head>



 <body class="antialiased">
     <div id="app">
         {{ $slot }}
     </div>
 </body>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
 </script>
