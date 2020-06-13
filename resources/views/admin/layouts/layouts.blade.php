<!DOCTYPE html>
<html lang="fa">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>زیگونا</title>
        @yield('header_js')
        @yield('header_css')
    </head>
    <body>
        <div id="wrapper">
            <!-- Navigation -->
            <!--        <div id="page-wrapper">
                <div class="row">
                    
                </div>
            </div> -->
            
            <!-- /.row -->
            @yield('header')
            @yield('main_content')
            @yield('footer')
        </div>
        <!-- /#page-wrapper -->
    </div>
</body>
</html>