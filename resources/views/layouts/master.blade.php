<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="hot/style/images/icon_small.png">
    <title>@yield('title', 'Lydia')</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('hot/style/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('hot/style/css/plugins.css') }}" rel="stylesheet">
    <link href="{{ asset('hot/style.css') }}" rel="stylesheet">
    <link href="{{ asset('hot/style/css/color/blue.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href="{{ asset('hot/style/type/icons.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader"><div class="textload">Loading</div><div id="status"><div class="spinner"></div></div></div>
<main class="body-wrapper">
@include('partial.navbar')
<!-- /.navbar -->

    <div class="offset"></div>

    <div class="dark-wrapper">
        <div class="container inner2">
            <div class="blog grid-view col2 row">
                @yield('content')
                <!-- /.blog-content -->

            @include('partial.right-sidebar')
            <!-- /column .sidebar -->

            </div>
            <!-- /.blog -->
        </div>
        <!--/.container -->
    </div>
    <!--/.dark-wrapper -->
@include('partial.footer')
<!-- /footer -->

</main>
<!--/.body-wrapper -->
<script src="{{ asset('hot/style/js/jquery.min.js') }}"></script>
<script src="{{ asset('hot/style/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('hot/style/js/plugins.js') }}"></script>
<script src="{{ asset('hot/style/js/classie.js') }}"></script>
<script src="{{ asset('hot/style/js/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('hot/style/js/scripts.js') }}"></script>
<!-- DEMO ONLY -->
{{--<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="{{ asset('hot/switcher/aqua.css') }}" title="lydiaaqua-color" media="screen" />--}}
{{--<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="{{ asset('hot/switcher/blue.css') }}" title="lydiablue-color" media="screen" />--}}
{{--<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="{{ asset('hot/switcher/brown.css') }}" title="lydiabrown-color" media="screen" />--}}
{{--<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="{{ asset('hot/switcher/forest.css') }}" title="lydiaforest-color" media="screen" />--}}
{{--<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="{{ asset('hot/switcher/green.css') }}" title="lydiagreen-color" media="screen" />--}}
{{--<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="{{ asset('hot/switcher/lime.css') }}" title="lydialime-color" media="screen" />--}}
{{--<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="{{ asset('hot/switcher/orange.css') }}" title="lydiaorange-color" media="screen" />--}}
{{--<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="{{ asset('hot/switcher/pink.css') }}" title="lydiapink-color" media="screen" />--}}
{{--<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="{{ asset('hot/switcher/purple.css') }}" title="lydiapurple-color" media="screen" />--}}
{{--<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="{{ asset('hot/switcher/red.css') }}" title="lydiared-color" media="screen" />--}}
{{--<link rel="alternate stylesheet" property="stylesheet" type="text/css" href="{{ asset('hot/switcher/rose.css') }}" title="lydiarose-color" media="screen" />--}}
<script type="text/javascript" src="{{ asset('hot/switcher/switchstylesheet.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $(".changecolor").switchstylesheet( { seperator:"color"} );
    });
</script>
</body>
</html>