<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Yellow-Sub') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    @yield('css')
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
            <li id="nav-ho">
                <a class="scrollme" href="/">Home</a>
            </li>
            <li id="nav-home" class="active">
                <a class="scrollme" href="/blog">Blog</a>
            </li>
            <li id="nav-about">
                <a class="scrollme" href="/blog/topic1">Topic I</a>
            </li>
            <li id="nav-blog">
                <a class="scrollme" href="/blog/topic2">Topic II</a>
            </li>
            <li id="nav-contact">
                <a class="scrollme" href="/blog/topic3">Topic III</a>
            </li>
        </ul>
        
        <!--向右对齐-->
        <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li><a data-toggle="modal" data-target="#signup"><span class="glyphicon glyphicon-log-in" ></span> Login</a></li>
                <li><a data-toggle="modal" data-target="#login"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
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
        <!--  sign up begin -->
        <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title family-center">Wanna Signup?</h4>
                    </div>
                    <!--
                    <form method="post" enctype="multipart/form-data" action="#" id="loginForm" name="loginForm">
                        <div class="modal-body">
                          
                            <input class="form-control" type="text" required id="username" name="username" placeholder="Username"><br>
                            <input class="form-control" type="text" required id="email" name="email" placeholder="Email"><br>
                            <input class="form-control" type="password" required id="password" name="password" placeholder="Password"><br>
                            <input class="form-control" type="password" required id="password" name="password" placeholder="Password Confirm"><br>
                            
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Sign up</button>
                        </div>
                    </form> -->
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}" id="loginForm" name="loginForm">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--  signup end -->
        <!--  login begin -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title family-center">Already a member</h4>
                    </div>
                    <div class="modal-body">
                    <!--
                    <form method="post" enctype="multipart/form-data" action="#" id="loginForm" name="loginForm">
                        <div class="modal-body">
                          
                            <input class="form-control" type="text" required id="username" name="username" placeholder="Username"><br>
                            <input class="form-control" type="password" required id="password" name="password" placeholder="Password"><br>
                            <select class="form-control" name="usertype" id="aa" form="loginForm">
                                <option value="mem">Member</option>
                                <option value="admin">Administrator</option>
                            </select> 
                            
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form> -->
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}" id="loginForm" name="loginForm">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- log in end -->
        
    </div>
    </div>
</nav>
<div class="container">
    @yield('content')
</div>
    
    

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('footer')
</body>
</html>
