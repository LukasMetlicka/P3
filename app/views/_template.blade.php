<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
        <style>
         	body {
	         	font-family: 'Lato', sans-serif;
	         	font-weight: 100;
         	}
        </style>
        @yield('head')
        
	</head>
	
	<body> 
		@yield('body')
	</body>
</html>