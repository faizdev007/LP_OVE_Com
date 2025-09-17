@props(['seo'=>['metaTitle' => '','metaDescription'=>'']])
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="title" content="{{$seo['metaTitle']}}">
<meta name="description" content="{{$seo['metaDescription']}}">

<title>{{ $title ?? config('app.name') }}</title>

<link rel="icon" href="{{asset('/favicon.ico')}}" sizes="any">
<link rel="icon" href="{{asset('/favicon.svg')}}" type="image/svg+xml">
<link rel="apple-touch-icon" href="{{asset('/favicon.svg')}}">
<link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,400i,500,500i,600,600i&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300..700&family=Rampart+One&family=Vast+Shadow&family=Zain:ital,wght@0,400;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">

{{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
<link rel="stylesheet" href="{{ asset('build/assets/app-BVlGspZe.css') }}">
<script src="{{ asset('build/assets/app-l0sNRNKZ.js') }}" defer></script>
@fluxAppearance

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5K42N2M2');</script>
<!-- End Google Tag Manager -->
