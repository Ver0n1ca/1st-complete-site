<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    @yield('css')
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
        var _hmt = _hmt || [];
        (function() {
            var hm = document.createElement("script");
            hm.src = "https://hm.baidu.com/hm.js?a9a13600f3985227b4e1f7591de7b1ea";
            var s = document.getElementsByTagName("script")[0]; 
            s.parentNode.insertBefore(hm, s);
        })();

    </script>
</head>
<body data-spy="scroll" data-target="#navbar-spy">

<nav class="navbar" role="navigation" style="z-index: 9999;">
    <div class="container-fluid opacity-9 navbar-fixed-top" style="box-shadow: 5px 5px 5px #aaa;border-color: #aaa; background-color: #fff;"> 
    
    <div id="navbar-spy">
        <!--向左对齐-->
        <ul class="nav navbar-nav navbar-left nav-pills" style="font-size: 130%;" id="main-nav">
            <li id="nav-home">
                <a  href="/">Home</a>
            </li>
            <li id="nav-home">
                <a  href="/blog">Blog</a>
            </li>
            
        </ul>
        @yield('motai')
        <!--向右对齐-->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-user" ></span> Sign up</a></li>
                <li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                     <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out" ></span> 
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li><a href="/account"><span class="glyphicon glyphicon-user" ></span> Account</a></a></li>
                    </ul>
                </li>
            @endif
        </ul>
        
    </div>
    </div>
</nav>
<div class="row">
    <div class="col-md-1 col-xs-4 opacity-9 radius" style="background-color: white; box-shadow: 5px 5px 5px #aaa; z-index: 9998;">
        <nav class="navbar" role="navigation" style="z-index: 9998;">
            <ul class=" nav navbar-nav nav-pills" style="font-size: 120%;margin-left: 0px;">
            @yield('nav')
            </ul>
        </nav>
    </div>
    <div class="col-md-9 col-md-offset-1 opacity-9 bgw radius">
        @yield('content')
    </div>
</div>




    


    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('js')
</body>
</html>
