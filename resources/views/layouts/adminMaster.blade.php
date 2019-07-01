<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Admin Page | Donate</title>
    <link rel="icon" type="image/png" sizes="462x454" href="{{asset('assets/img/logo.png')}}">
    <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{asset('assets/fonts/fontawesome-all.min.css')}}">
</head>

<body id="page-top">
    <div id="wrapper">
        @include('nav.admin_sidebar')
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                @include('nav.admin_top_nav')
                @yield('content')
            </div>
        </div>
            <a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    @include('inc.modal.logout')
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/chart.min.js')}}"></script>
    <script src="{{asset('assets/js/bs-charts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
    <script src="{{asset('assets/js/theme.js')}}"></script>
    <script>
        $(function(){
            $("select#tipe").change(function(){
                $(this).find("option:selected").each(function(){
                    if ($(this).attr("value") === "i") {
                        $("#utd").show();
                        $("#mob").hide();
                    } else if ($(this).attr("value") === "m") {
                        $("#utd").hide();
                        $("#mob").show();
                        // document.getElementById("utd").required = true;
                    } else {
                        $("#mob").hide();
                        $("#utd").hide();
                        document.getElementById("mobid").required = false;
                        document.getElementById("utdid").required = false;
                    }
                })
            }).change();
        });
    </script>
</body>

</html>