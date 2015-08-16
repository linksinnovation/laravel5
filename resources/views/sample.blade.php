<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ####################### HEADER BLOCK ####################### --> 
    @include('layouts.includes.header')
    <!-- ####################### HEADER BLOCK ####################### -->
</head>

<body>
    <div id="wrapper">

        <!-- ####################### NAVBAR BLOCK ####################### -->
        @include('layouts.includes.navbar')
        <!-- ####################### NAVBAR BLOCK ####################### -->


        <div id="page-wrapper">
            <!-- ####################### CONTENT BLOCK ####################### -->
            @yield('content')
            <!-- ####################### CONTENT BLOCK ####################### -->
            
        </div>


    </div>
    <!-- /#wrapper -->

     <!-- ####################### FOOTER BLOCK ####################### -->
     @include('layouts.includes.footer')
    <!-- ####################### FOOTER BLOCK ####################### -->

</body>
</html>