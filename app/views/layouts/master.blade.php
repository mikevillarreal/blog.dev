<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>@yield('title')</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="../css/styles.css" rel="stylesheet">
	</head>
	<body>
@extends ('layouts.nav_bar')

@yield('content')

<footer id="footer">
  <div class="container">
    
  </div>
</footer>

	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/scripts.js"></script>
	</body>
</html>
