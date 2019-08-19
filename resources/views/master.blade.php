<html>
    <head>
        <title>Halaman Master Blade</title>
    </head>
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
			<div class="stripline"></div>
		</div>
		<div class="container">	
		{{-- ini judul blog --}}
        <h2>@yield('halaman')</h2>
        {{-- ini kontent --}}
        @yield('kontent')
		<!-- 	
			<div class="table">
				<a href="/home/tambah">Tambah</a>
				<table border="1">
					<tr>
						<th>Nama</th>
						<th>Jabatan</th>
						<th>Tanggal Lahir</th>
						<th>Alamat</th>
						<th colspan="2">Opsi</th>
					</tr>
					@foreach($users as $u)
					<tr>
						<td>{{$u->nama}}</td>
						<td>{{$u->jabatan}}</td>
						<td>{{$u->tanggal_lahir}}</td>
						<td>{{$u->alamat}}</td>
						<td><a href="/home/edit/{{$u->id}}">Edit</a></td>
						<td><a href="/home/hapus/{{$u->id}}">Hapus</a></td>
					</tr>
					@endforeach
				</table>
			`</div> -->
			<h3><center>About Us</center></h3>
			<p style="font-size: 20pt; text-align: center; font-weight: italic">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</body>
    <body>
        <center><h1>My First Blog</h1></center>
        <header>
            <nav>
                <a href="/blog/home">Home</a>
                |
                <a href="/blog/tentang">Tentang</a>
                |
                <a href="/blog/kontak">Kontak</a>
            </nav>
        </header><br><br><br>
        
        <br><br><br>
        <footer>
            <p>&copy;<a href="laravel.vom">Laravel</a></p>
        </footer>
    </body>
</html>
