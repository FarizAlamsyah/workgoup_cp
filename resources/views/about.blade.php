{{-- untuk menghubungkan template index --}}
@extends('index')
{{-- ini judul halaman --}}
@section('halaman')
{{-- ini isi kontent --}}
@section('kontent')
<div class="cont">
	<h1>ABOUT <span>US</span></h1>
	<h1>& WE ARE <span>COMPANY</span></h1>
</div>

<style>
	.cont h1{
		position: relative;
		overflow: hidden;
	}

	.cont h1::after{
		content: '';
		background-color: #4c7d77;
		width: 100%;
		height: 100%;
		top: 0;
		right: 0;
		position: absolute;
		animation: cover 1.5s cubic-bezier(.53,0,.18,.01);
		transform: translateX(-111%);
	}

	.cont h1::before{
		content: '';
		position: absolute;
		width: 100%;
		height: 100%;
		top: 0;
		right: 0;
		background-color: white;
		animation: word 1.5s cubic-bezier(.53,0,.18,.01) forwards;
	}

	.cont h1:nth-of-type(1)::after,
	.cont h1:nth-of-type(1)::before{
		animation-delay: 0s;
	}

	.cont h1:nth-of-type(2)::after,
	.cont h1:nth-of-type(2)::before{
		animation-delay: .5s;
	}

	@keyframes cover{
		0% {transform: translateX(-100%)}
		100% {transform: translateX(111%)}
	}

	@keyframes word{
		0% {transform: translateX(0)}
		100% {transform: translateX(100%)}
	}
</style>
@endsection
