<!DOCTYPE html>
<html>
	<head> 
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
        <link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
        <link href="styles/_master.css" rel="stylesheet" type="text/css">
        <style>
         	body {
	         	font-family: 'Lato', sans-serif;
	         	font-weight: 100;
         	}
        </style>
        @yield('head')
        
	</head>
	
	<body> 
		<ul id="links">
			<li><a href="/"><img id="img" src="img/icon.png"></a></li>
			<li><a href="/ipsum">Lorem Ipsum</a></li>
			<li><a href="/user">User Generator</a></li>
			<li><a href="/password">Password Generator</a></li>
			<li><a href="/clip">Clip Holder</a></li>
		</ul>
		@yield('body')
	</body>
</html>