{{-- untuk menghubungkan template index --}}
@extends('index')
{{-- ini judul halaman --}}
@section('halaman')
{{-- ini isi kontent --}}
@section('kontent')

<<<<<<< HEAD
<section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Hubungi Kami</h2>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" novalidate>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nama *" id="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="No Telp *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Pesan *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button  type="submit" class="btnbtn-xl">Kirim Pesan</button>
                                <script>
                                function redirect(url){
                                    location.href=url;
                                }
                                </script>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
=======
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
>>>>>>> 255acd5b79d73d97341365e9f5e2c0a059cbb07d

@endsection


