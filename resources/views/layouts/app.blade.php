<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="public/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="public/css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


    <title>Onestarko</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                   Onestarko
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
               <ul class="nav navbar-nav">
                    <li><a href="{{url('/')}}">首页</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">文章</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{url('readarticle')}}">查看文章</a>
                            </li>
                            <li>
                                <a href="{{url('writearticle')}}">写文章</a>
                            </li>
                        </ul>
                    </li>
                   <li><a href="{{url('music')}}">音乐</a></li>
                    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">留言板</a>
                        <ul class="dropdown-menu">
                           <li>
                           <a href="{{url('showmessage')}}">查看留言</a>
                           </li>
                           <li>
                           <a href="{{url('message')}}">写留言</a>
                           </li>
                        </ul>
                    </li>
                    <li><a href="{{url('info')}}">onestarko信息</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->

                    <li><H5>THE  EARTH  IS  ROUND ... ... ...</H5></li>
                    <li><img src="images/image_5.jpg" width="40px;" height="40px;"></li>

                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
