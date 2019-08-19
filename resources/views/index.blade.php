<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="assets/css/index.css">
		<div class="stripline"></div>
		<div class="header">
			<div class="title" style="background-image: url(assets/img/waw.jpg);">
				<h1><img class="imgtitle" src="assets/img/intel.png">COMPANY&copy;</h1>
			<div class="stripline"></div>
			<div class="nav">
				  <a class="tablink" href="/home">Home</a>
				  <a class="tablink" href="/home/news">News</a>
				  <a class="tablink" href="/home/contact">Contact</a>
				  <a class="tablink" href="/home/about">About</a>
			</div>
		</div>
			<div class="stripline"></div>
		</div>
		<div class="container">	
		{{-- ini judul blog --}}
        <h2>@yield('halaman')</h2>
        {{-- ini kontent --}}
        @yield('kontent')

			<!-- <h3><center>About Us</center></h3>
			<p style="font-size: 20pt; text-align: center; font-weight: italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p> -->
		</div>
	</body>
</html>