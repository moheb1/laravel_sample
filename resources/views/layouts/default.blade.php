<!DOCTYPE html>
<html lang="fa">
<head>
 <meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="stylesheet" href="{{asset('css/app.css')}}" />	

<style>


</style>
</head>

<body>
<div class="container">
 <div id="header">

@include('layouts.navigation')

    </div>
	
@yield('main_content')
</div>


@yield('footer_js')

</body>
</html>
