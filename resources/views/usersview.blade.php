<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Poll App</title>

    <!-- Bootstrap Core CSS -->
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/assets/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="/assets/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- DataTables CSS -->
    <link href="/assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="/assets/vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
    <link href="/assets/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!--Toastr-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <style type="text/css">
        body{
            background-color: white;
            background-image: url('/assets/img/fondo2.jpg');
            background-position: center;
                background-size: cover;
            background-repeat: no-repeat;
            height: 700px;
        }
         .panel{
            background-color: transparent;
        }
        #page-wrapper{
            background-color: transparent;
            border: none;
        }
        .panel-info>a>.panel-heading {
            
            background-color: transparent;
            color: #bce8f1;
            transition: all .5s;
        }
        .panel-info>a>.panel-heading:hover{
            color: white;
            border-color: #bce8f1;
            background-color: #bce8f1;
            transition: all .5s;
        }
        .panel-success>a>.panel-heading {
            border-color: #d6e9c6;
            background-color: transparent;
            color: #d6e9c6;
            transition: all .5s;
        }
        .panel-success>a>.panel-heading:hover{
            color: white;
            border-color: #d6e9c6;
            background-color: #d6e9c6;
            transition: all .5s;
        }
         .panel-success>a:hover{
            color: white;
            text-decoration: none;
        }
        .panel-success>a{
            color: #d6e9c6;
            text-decoration: none;
        }
        .panel-info>a:hover{
            color: white;
            text-decoration: none;
        }
        .panel-info>a{
            color: #bce8f1;
            text-decoration: none;

        }
        .text{color: #d6e9c6;}


    </style>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">


      
            
            @yield('content')
            
      
        
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/assets/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/assets/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="/assets/vendor/raphael/raphael.min.js"></script>
    <script src="/assets/vendor/morrisjs/morris.min.js"></script>
    <script src="/assets/data/morris-data.js"></script>
    <!-- DataTables JavaScript -->
    <script src="/assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="/assets/vendor/datatables-responsive/dataTables.responsive.js"></script>
    <!--Toastr-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
     <script src="/assets/vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="/assets/dist/js/sb-admin-2.js"></script>
@yield('footer')

</body>

</html>
