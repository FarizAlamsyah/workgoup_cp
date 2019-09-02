{{-- untuk menghubungkan template index --}}
@extends('index')
{{-- ini judul halaman --}}
@section('halaman')
{{-- ini isi kontent --}}
@section('kontent')

<div class="contact">
    <h1>HUBUNGI KAMI</h1><br>
    <form method="POST">
        <input type="text" name="name" placeholder="Name"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="text" name="phone" placeholder="No.Phone"><br>
        <textarea name="alamat" placeholder="Alamat"></textarea><br>
        <button type="submit">Submit</button>
    </form>
</div>

@endsection


