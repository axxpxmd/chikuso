<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	
	<link rel="shortcut icon" href="icon/shopping-cart.png" type="image/x-icon">
	<title>Chikuso Store</title>
	
	{{-- CSS --}}
	<link rel="stylesheet" type="text/css" href="comingsoon/css/util.css">
	<link rel="stylesheet" type="text/css" href="comingsoon/css/main.css">
	<link rel="stylesheet" type="text/css" href="comingsoon/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="comingsoon/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="comingsoon/vendor/bootstrap/css/bootstrap.min.css">

	{{-- Fonts --}}
	<link rel="stylesheet" type="text/css" href="comingsoon/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="comingsoon/fonts/iconic/css/material-design-iconic-font.min.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<style>
		.navbrand{
			font-family: Pacifico, cursive;
			color: white;
		}
	</style>
</head>
<body>
	<!-- Content -->
    <main>
        @yield('content')
    </main>

</body>
<script src="comingsoon/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="comingsoon/vendor/bootstrap/js/popper.js"></script>
<script src="comingsoon/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="comingsoon/vendor/select2/select2.min.js"></script>
<script src="comingsoon/vendor/countdowntime/moment.min.js"></script>
<script src="comingsoon/vendor/countdowntime/moment-timezone.min.js"></script>
<script src="comingsoon/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
<script src="comingsoon/vendor/countdowntime/countdowntime.js"></script>
<script src="comingsoon/vendor/tilt/tilt.jquery.min.js"></script>
<script src="comingsoon/js/main.js"></script>

<script>
    $('.cd100').countdown100({
        /*Set Endtime here*/
        /*Endtime must be > current time*/
        endtimeYear: 0,
        endtimeMonth: 0,
        endtimeDate: 15,
        endtimeHours: 23,
        endtimeMinutes: 0,
        endtimeSeconds: 0,
        timeZone: "" 
    });
</script>

<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
</html>