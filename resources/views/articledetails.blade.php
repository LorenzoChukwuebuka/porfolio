<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" href="{{ asset('/images/Ebuka.jpg') }}" type="image/png">

    <!-- Primary Meta Tags -->
    <title>{{ $article->title }} | Lawrence Chukwuebuka Obi</title>
    <meta name="title" content="{{ $article->title }} | Lawrence Chukwuebuka Obi">
    <meta name="description" content="{{ $article->excerpt }}">
    <meta name="author" content="Lawrence Chukwuebuka Obi">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $article->title }} | Lawrence Chukwuebuka Obi">
    <meta property="og:description" content="{{ $article->excerpt }}">
    <meta property="og:image" content="{{ asset($article->image ?? '/images/default-article-png.avif') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="{{ $article->title }} | Lawrence Chukwuebuka Obi">
    <meta name="twitter:description" content="{{ $article->excerpt }}">
    <meta name="twitter:image" content="{{ asset($article->image ?? '/images/default-article-png.avif') }}">

    <!-- Keywords (Optional) -->
    <meta name="keywords"
        content="{{ $article->tags ?? 'software development, web development, DevOps, programming' }}">

    <!-- SEO Enhancements -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Article",
        "mainEntityOfPage": {
            "@type": "WebPage",
            "@id": "{{ url()->current() }}"
        },
        "headline": "{{ $article->title }}",
        "description": "{{ $article->excerpt }}",
        "image": "{{ asset($article->image ?? '/images/default-article.jpg') }}",
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
        "datePublished": "{{ $article->created_at->toIso8601String() }}",
        "dateModified": "{{ $article->updated_at->toIso8601String() }}"
    }
    </script>
</head>


<body>
    <div id="app">
        <article-details-component></article-details-component>
    </div>
</body>

</html>
