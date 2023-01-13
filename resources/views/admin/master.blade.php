<!doctype html>
<html lang="en" class="minimal-theme">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{asset('backEndAsset')}}/assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="{{asset('backEndAsset')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{asset('backEndAsset')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{asset('backEndAsset')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{asset('backEndAsset')}}/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="{{asset('backEndAsset')}}/assets/css/bootstrap-extended.css" rel="stylesheet" />
    <link href="{{asset('backEndAsset')}}/assets/css/style.css" rel="stylesheet" />
    <link href="{{asset('backEndAsset')}}/assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('backEndAsset')}}/assets/npm/bootstrap-icons%401.5.0/font/bootstrap-icons.css">
    <link href="{{asset('backEndAsset')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <!-- loader-->
    <link href="{{asset('backEndAsset')}}/assets/css/pace.min.css" rel="stylesheet" />


    <!--Theme Styles-->
    <link href="{{asset('backEndAsset')}}/assets/css/dark-theme.css" rel="stylesheet" />
    <link href="{{asset('backEndAsset')}}/assets/css/light-theme.css" rel="stylesheet" />
    <link href="{{asset('backEndAsset')}}/assets/css/semi-dark.css" rel="stylesheet" />
    <link href="{{asset('backEndAsset')}}/assets/css/header-colors.css" rel="stylesheet" />

    <title>Admin Dashboard</title>
</head>

<body>


<!--start wrapper-->
<div class="wrapper">
    <!--start top header-->
    @include('admin.include.header')
    <!--end top header-->

    <!--start sidebar -->
    @include('admin.include.left-sidebar')
    <!--start sidebar -->
    <main class="page-content">
    <!--start content-->
    @yield('content')
    <!--end page main-->
    </main>

    @yield('btn')

    <!--start switcher-->
    @include('admin.include.right-sidebar')
    <!--end switcher-->

</div>
<!--end wrapper-->


<!-- Bootstrap bundle JS -->
<script src="{{asset('backEndAsset')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{asset('backEndAsset')}}/assets/js/jquery.min.js"></script>
<script src="{{asset('backEndAsset')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{asset('backEndAsset')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<script src="{{asset('backEndAsset')}}/assets/js/pace.min.js"></script>
<script src="{{asset('backEndAsset')}}/assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
<script src="{{asset('backEndAsset')}}/assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
<script src="{{asset('backEndAsset')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
<!--app-->
<script src="{{asset('backEndAsset')}}/assets/js/app.js"></script>
<script src="{{asset('backEndAsset')}}/assets/js/index.js"></script>
<script src="{{asset('backEndAsset')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
<script src="{{asset('backEndAsset')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
<script src="{{asset('backEndAsset')}}/assets/js/table-datatable.js"></script>
<script src="{{asset('backEndAsset')}}/assets/js/validation.js"></script>

<script>
    new PerfectScrollbar(".best-product")
    new PerfectScrollbar(".top-sellers-list")
</script>


</body>
</html>

