<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900' rel='stylesheet' type='text/css'>

    <!-- Page title -->
    <title>{{env('ORGANIZACION')}} | Admin</title>
    <!-- Vendor styles-->


    <link rel="icon" type="image/png" href="{{url('/ico.png')}}" />
    <link rel="stylesheet" href="{{url('/assets/vendor/fontawesome/css/font-awesome.css')}}"/>
    <link rel="stylesheet" href="{{url('/assets/vendor/animate.css/animate.css')}}"/>
    <link rel="stylesheet" href="{{url('/assets/vendor/bootstrap/css/bootstrap.css')}}"/>

    <!-- App styles -->
    <link rel="stylesheet" href="{{url('/assets/styles/pe-icons/css/pe-icon-7-stroke.css')}}"/>
    <link rel="stylesheet" href="{{url('/assets/styles/pe-icons/css/helper.css')}}"/>
    <link rel="stylesheet" href="{{url('/assets/styles/stroke-icons/css/style.css')}}"/>
    <link rel="stylesheet" href="{{url('/assets/styles/style.css')}}">
    <style>
        .panel-filled{
            padding: 10px 10px 10px 10px;
        }
    </style>

</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <div id="mobile-menu">
                <div class="left-nav-toggle">
                    <a href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
            </div>
            <a class="navbar-brand" href="{!! route('home') !!}">
                {{env('ORGANIZACION')}} 
            </a>
            </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <div class="left-nav-toggle">
                <a href="">
                    <i class="fa fa-bars"></i>
                </a>
            </div>

            <form class="navbar-form navbar-left" action="{{route('buscar')}}" method="GET">
                <input type="text" class="form-control" placeholder="Buscar por ... " style="width: 175px" name="texto">
            </form>

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#">{{env('ORGANIZACION')}}  | Versión
                        <span class="label label-warning pull-right" style="margin-top: 2px;">{{env('VERSION')}}</span>
                    </a>
                </li>

                <li class="nav-category">
                <li class=" profil-link" style="margin-top: 8px;">
                    <a href="{{route('gestion-admins.edit',Auth::user()->id)}}">
                        <span class="profile-address" >{!! Auth::user()->email !!}</span>
                        <!--  <img src="" class="img-circle" alt="">-->
                    </a>
                </li>

                </li>

            </ul>

        </div>
    </div>
</nav>
@include('layouts.sidebar')
<!-- End navigation-->
<div class="wrapper">
    <section class="content">
        <div class="container-fluid">

            @yield('content')

        </div>
    </section>
</div>

<!-- End header-->


<script src="{{url('/assets/vendor/pacejs/pace.min.js')}}"></script>
<script src="{{url('/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{url('/assets/vendor/toastr/toastr.min.js')}}"></script>
<script src="{{url('/assets/vendor/sparkline/index.js')}}"></script>
<script src="{{url('/assets/vendor/flot/jquery.flot.min.js')}}"></script>
<script src="{{url('/assets/vendor/flot/jquery.flot.resize.min.js')}}"></script>
<script src="{{url('/assets/vendor/flot/jquery.flot.spline.js')}}"></script>

<script src="{{url('/assets/vendor/select2/dist/js/select2.js')}}"></script>


<script src="{{url('/assets/scripts/luna.js')}}"></script>
<script>

</script>

</body>

</html>

