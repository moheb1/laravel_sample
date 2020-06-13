<!DOCTYPE html>
<html lang="fa">
<head>
 <meta name="csrf-token" content="{{ csrf_token() }}">
<style>
#adminpanel{
	direction:rtl;
	display:flex;
}

#side-menu{
	width:200px;
	background-color:yellow;
}

#header{
	height:100px;
	background-color:red;
	width:100%;
}

div#side-menu>div {
    width: 200px;
}

td{
	padding:10px;
}

input[type="text"] {
    height: 24px;
    background-color: #e5ecec;
    border: none;
    border-radius: 6px;
    margin: 5px;
    padding: 5px;
}

form {
    display: flex;
    /* flex-wrap: wrap; */
    /* flex-basis: 200px; */
    flex-flow: column;
}

</style>
</head>

<body>
<div id="header"></div>
@yield('main_content')

@include('admin.layouts.footer_js')

@yield('footer_js')

</body>
</html>
