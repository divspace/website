<!DOCTYPE html>
<html lang="en-us">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <title>{{ $pageTitle }}</title>
    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <nav class="navbar navbar-light bg-faded">
        <a class="navbar-brand" href="{{ route('home.index') }}" rel="home">
          <img class="logo" src="{{ asset('assets/img/logo-sm.png') }}" width="68" height="20">
        </a>
        <ul class="nav navbar-nav">
          @foreach($navbarLinks as $navbarLink)
            <li class="nav-item">
              <a class="nav-link{{ $navbarLink['active'] }}" href="{{ $navbarLink['url'] }}">{{ $navbarLink['title'] }}{!! $navbarLink['current'] !!}</a>
            </li>
          @endforeach
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#contact">Contact</a>
          </li>
        </ul>
        <ul class="nav navbar-nav pull-right">
          <li class="nav-item">
            <a class="nav-link" href="#" data-toggle="modal" data-target="#contact">
              <span class="fa fa-fw fa-envelope-o">
                <span class="sr-only">Email</span>
              </span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="tel:{{ obfuscate('+14803604373') }}">
              <span class="fa fa-fw fa-phone">
                <span class="sr-only">Call</span>
              </span>
            </a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="container">
      <div id="message"></div>
      @yield('content')
    </div>
    <div class="container">
      <footer>
        <p class="pull-left">&copy; {{ date('Y') }} <a href="#" data-toggle="modal" data-target="#contact">Kyle Anderson</a></p>
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
    @include('forms/contact')
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @yield('script')
  </body>
</html>
