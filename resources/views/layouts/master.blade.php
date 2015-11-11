<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Divspace</title>
        <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-light bg-faded">
                <a class="navbar-brand" href="{{ url('/') }}" rel="home">
                    <img class="logo" src="{{ asset('assets/img/logo-sm.png') }}" width="68" height="20">
                </a>
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link{{ ($path === '/') ? ' active' : '' }}" href="{{ url() }}">Home <span class="sr-only">(Current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ ($path === 'resume') ? ' active' : '' }}" href="{{ url('resume') }}">R&eacute;sum&eacute;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#contact">Contact</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="container">
            <div id="message"></div>
            @yield('content')
        </div>
        <div class="container">
            <footer class="text-muted">
                <hr>
                <p class="pull-left">&copy; {{ date('Y') }} <a href="#" data-toggle="modal" data-target="#contact">Kyle Anderson</a>.</p>
                <ul class="pull-right">
                    @foreach($socialLinks as $socialLink)
                        @if($socialLink['show'] === true)
                            <li>
                                <a href="{{ $socialLink['url'] }}" title="{{ $socialLink['title'] }}">
                                    <span class="fa fa-fw fa-{{ $socialLink['icon'] }}">
                                        <span class="sr-only">{{ $socialLink['title'] }}</span>
                                    </span>
                                </a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </footer>
        </div>
        @include('forms/_contact')
        <script src="{{ asset('assets/js/app.js') }}"></script>
        @yield('script')
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-WG2WPL');</script>
    </body>
</html>
