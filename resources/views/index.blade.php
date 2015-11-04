@extends('layouts.master')
@section('content')
    <div id="terminal">
        <div id="toolbar">
            <div class="top">
                <div id="lights">
                    <div class="light red">
                        <span class="shine"></span>
                        <span class="glow"></span>
                    </div>
                    <div class="light yellow">
                        <span class="shine"></span>
                        <span class="glow"></span>
                    </div>
                    <div class="light green">
                        <span class="shine"></span>
                        <span class="glow"></span>
                    </div>
                </div>
                <div id="title">divspace.com</div>
            </div>
        </div>
        <div id="screen">
            <p>
                Last login: {{ $terminal['date'] }} on ttys001
                <br>
                {{ $terminal['prompt'] }} <span class="command">cd &#47;home&#47;divspace</span>
                <br>
                {{ $terminal['prompt'] }} <span class="command">git clone git&#64;github.com&#58;divspace&#47;website.git</span>
                <br>
                {{ $terminal['prompt'] }} <span class="command">composer install</span>
                <br>
                {{ $terminal['prompt'] }} <span class="command">npm install</span>
                <br>
                {{ $terminal['prompt'] }} <span class="command">bower install</span>
                <br>
                {{ $terminal['prompt'] }} <span class="command">gulp --production</span>
                <br>
                {{ $terminal['prompt'] }} <span class="command output"></span><span class="cursor"></div>
            </p>
        </div>
    </div>
@stop
@section('script')
    <script>
        $(function() {
            $('.output').typed({
                contentType: 'html',
                showCursor: false,
                startDelay: 500,
                strings: [
                    'php artisan serve --port=80'
                ],
                typeSpeed: 0
            });
        });
    </script>
@append
