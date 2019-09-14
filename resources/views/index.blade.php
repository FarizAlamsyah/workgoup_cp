<!DOCTYPE html>
<html>
	<head>
		<title>COMPANY&copy;</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<link rel="stylesheet" type="text/css" href="assets/css/index.css">
		<!-- <div class="stripline"></div> -->
		<div class="header">
			<div class="title">
				<center>
					<div class="svg-wrap">
						<a href="/" style="text-decoration: none;">
							<svg width="350" height="70">
								<rect class="box" width="350" height="70"/>
								<h1 class="text" style="text-decoration: none">Re-
									<span class="text-hover">Intertaiment.</span>
								</h1>
							</svg>
						</a>
					</div>
				</center>				
			<!-- <div class="stripline"></div> -->
			<div class="nav">
				  <a class="tablink" href="/about">About</a>
				  <a class="tablink" href="/contact">Contact</a>
				  <a class="tablink" href="/news">News</a>
				  <a class="tablink" href="/member">Member</a>
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

