<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Create List</title>
    <base href="../">
    <link rel="stylesheet" type="text/css" href="/css/fonts.css">
    <link rel="stylesheet" type="text/css" href="//vendor/fancybox/source/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="/css/common.css">
</head>
<body>
<div class="FullscreenLayout">
    
    <header class="FullscreenLayout-header">
        <div class="FullscreenLayout-headerLogo">
            <a href="./">
                        <span class="Icon Icon-ic_m">
                            <svg>
                               <use xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xlink:href="/svg/symbols.svg#ic_m"></use>
                            </svg>
                        </span>
            </a>
        </div>
        @yield('head_navigation')
    </header>
    
    <div class="FullscreenLayout-body">
        <div class="FullscreenLayout-center">
            <div class="Box">
                <div class="BoxContent">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
    
    @include('partial.footer')
</div>
@include('partial.script')
</body>
</html>
