{{-- untuk menghubungkan template index --}}
@extends('index')
{{-- ini judul halaman --}}
@section('halaman')
{{-- ini isi kontent --}}
@section('kontent')

<div class="contact">
    <h1>HUBUNGI KAMI</h1><br>
    <form method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="tel" pattern="[0-9]{4}-[0-9]{4}-[0-9]{1-5}" name="phone" placeholder="telp : xxxx-xxxx-xxxx">
        
        <textarea name="alamat" placeholder="Alamat"></textarea>
        <button type="submit">Submit</button>
    </form>
</div>

<style>
.contact h1 {
text-align: center;
font-size: 32pt;
color: silver;
}
.contact form{
	padding: 10px;
	margin-bottom: 20px;
	border: 3px solid #00faac;
	border-radius: 30px;
}

.contact form input{
	width: 350px;
	height: 30px;
	margin: 10px 0px 5px 0px;
	border-radius: 20px;
	text-align: center;
	outline: none;
	border: 2px solid #00faac;
	background-color: transparent;
	font-family: Arial;
	color: white;
}
.contact form input:hover{
	cursor: text;
	background-color: #00faac;
	color: black;
}

.contact form textarea{
	width: 350px;
	height: 100px;
	margin: 10px 0px 10px 0px;
	border-radius: 20px;
	text-align: center;
	padding-top: 10%;
	border: 3px solid #00faac;
	background-color: transparent;
	font-family: Calibri;
	font-weight: bold;
}
.contact form textarea:hover{
	cursor: text;
	background-color: #00faac;
	color: black;
}

.contact form button{
	outline: none;
	width: 200px;
	height: 40px;
	border: 2px solid #00faac;
	background-color: transparent;
	border-radius: 20px;
	margin:30px;
	color: Grey;
}
.contact form button:hover{
	background-color: #00faac;
	cursor: pointer;
}
</style>

@endsection


