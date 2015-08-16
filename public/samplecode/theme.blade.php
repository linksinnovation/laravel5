
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ####################### HEADER BLOCK ####################### --> 

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Links Innovation Co.,Ltd Demo</title>
    <!-- Bootstrap Core CSS -->
    <link href=" {{ URL::asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="{{ URL::asset('assets/css/metisMenu.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ URL::asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="{{ URL::asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- ####################### HEADER BLOCK ####################### -->
</head>

<body>
    <div id="wrapper">

        <!-- ####################### NAVBAR BLOCK ####################### -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Links Innovation WorkShop</a>
            </div>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ####################### NAVBAR BLOCK ####################### -->


        <div id="page-wrapper">
            <!-- ####################### CONTENT BLOCK ####################### -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Your Title</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Create New Blog
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-8">

                                    <h3>Links Innovation Co., Ltd</h3>
                                    <form role="form">
                                        <div class="form-group">
                                            <label>Title</label>
                                            <input class="form-control" value="" placeholder="Enter something">
                                        </div>

                                        <div class="form-group">
                                            <label>Type</label>
                                            <input class="form-control" value=""  placeholder="Enter something">
                                        </div>

                                        <div class="form-group">
                                            <label>Text Input</label>
                                            <input class="form-control" placeholder="Enter text" value="">
                                            <p class="help-block">Example block-level help text here.</p>
                                        </div>

                                        <div class="form-group">
                                            <label>Text area</label>
                                            <textarea class="form-control" rows="5"></textarea>
                                        </div>

                                        <button type="submit" class="btn btn-default">Submit Button</button>
                                        <button type="reset" class="btn btn-default">Reset Button</button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ####################### CONTENT BLOCK ####################### -->
            
        </div>


    </div>
    <!-- /#wrapper -->

     <!-- ####################### FOOTER BLOCK ####################### -->
    <!-- jQuery -->
    <div id="copyright text-right">© Copyright 2015 Links Innovation Co., Ltd</div>
    <script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ URL::asset('assets/js/metisMenu.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ URL::asset('assets/js/sb-admin-2.js') }}"></script>
    <!-- ####################### FOOTER BLOCK ####################### -->

</body>
</html>
