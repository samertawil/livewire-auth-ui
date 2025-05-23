 


 
@php
if (app()->getLocale() == 'ar') {
    $dir = 'rtl';
} else {
    $dir = 'ltr';
}
@endphp


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir={{ $dir }}>

<head>
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">


@if (app()->getLocale() == 'ar')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
@else
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
@endif

<style>
    @font-face {
        font-family: 'Droid';

        src: url({{ asset('uilogin-assets/fonts/ar/Droid.Arabic.Kufi_DownloadSoftware.iR_.ttf') }});

    }


    @font-face {
        font-family: 'NotoSans';

        src: url({{ asset('uilogin-assets/fonts/en/NotoSans-Regular.ttf') }});
    }


    body {

        margin: 0;
        font-family: 'Droid', 'NotoKufiArabic', 'NotoSans', 'Courier New', Courier, monospace !important;

    }
</style>
{{-- @include('layouts.head') --}}
<title>{{ $title ?? 'Page Title' }}</title>
</head>
<style>
#global-loader {
    position: fixed;
    z-index: 50000;
    background: #fff;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    height: 100%;
    width: 100%;
    margin: 0 auto;
    text-align: center;
}

.loader-img {
    position: absolute;
    right: 0;
    bottom: 0;
    top: 43%;
    left: 0;
    margin: 0 auto;
    text-align: center;
}
</style>

<body>

<div class="container mt-5">


    {{__('customTrans.welcome')}}  {{ Auth::user()->name ??  __('customTrans.guest') }}

    @auth

       <a class="dropdown-item " href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit()">
            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
           <span class="text-primary text-bolder text-decoration-underline"> {{ __('customTrans.Logout') }}</span>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
        </form>

    @endauth

    <br>
 
    @guest()
        <a href="{{route('login')}}">{{__('customTrans.login')}}</a>
    @endguest
    

</div>

</body>

</html>
