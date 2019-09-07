<!DOCTYPE html>
<html>
	<head>
		<title>COMPANY&copy;</title>
	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="assets/css/index.css">
		<!-- <div class="stripline"></div> -->
		<div class="header">
			<div class="title">
				<h1><a href="/"><img class="imgtitle" src="assets/img/intel.png">COMPANY&copy;</a></h1>
			<!-- <div class="stripline"></div> -->
			<div class="nav">
				  <a class="tablink" href="/about">About</a>
				  <a class="tablink" href="/contact">Contact</a>
				  <a class="tablink" href="/news">News</a>
				  <!-- <a class="tablink" href="/member">Member</a>  -->
				  <button class="button">Switch Me !</button>
			</div>
		</div>
			<div class="stripline"></div>
		</div>
		<center>
			<div id="id"></div>
			<div id="container" class="container">	
				{{-- ini judul blog --}}
	        	<h2>@yield('halaman')</h2>
	        	{{-- ini kontent --}}
	        	<p>@yield('kontent')</p>
			</div>
		</center>
		<script type="text/javascript" src="assets/js/index.js"></script>
	</body>
</html>

