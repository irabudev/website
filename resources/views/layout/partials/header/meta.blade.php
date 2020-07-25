<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover">

<!-- yandex-verification Meta Tags -->
<meta name = "yandex-verification" content = "e6e0e4dba2580186" />

<!-- Primary Meta Tags -->
<title>{{ $title ?? '' }} | Irabu</title>
<meta name="title" content="{{ $title ?? '' }}">
<meta name="description" content="{{ $description ?? '' }}">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website" />
<meta property="og:url" content="{{ request()->getUri() }}"/>
<meta property="og:title" content="{{ $ogTitle ?? $title ?? '' }}"/>
<meta property="og:description" content="{{ $ogDescription ?? $description ?? '' }}"/>
<meta property="og:image" content="{{ $ogImage ?? url('/images/social.png') }}"/>

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ request()->getUri() }}">
<meta property="twitter:title" content="{{ $ogTitle ?? $title ?? '' }}">
<meta property="twitter:description" content="{{ $ogDescription ?? $description ?? '' }}">
<meta property="twitter:image" content="{{ $ogImage ?? url('/images/social.png') }}">
