<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="css/miestilo.css" type="text/css">
</head>
<body>

<!--CONTAINERS-->
<div class="container-fluid">
@include('menu')

@yield('content')

</div>
@include('footer')
</body>
<!--SCRIPTS-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script src="js/script-mapas.js"></script>
</html>