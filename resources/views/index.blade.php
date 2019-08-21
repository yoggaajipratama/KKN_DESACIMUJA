@extends('templates.view_templates')
@section('content')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="{{url('/')}}">
			<img src="{{asset('images/Sumedang.png')}}" style="width: 50px; height: 30px;">
			Desa Cimuja
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="index.html" class="nav-link">Beranda</a></li>
				<li class="nav-item"><a href="about.html" class="nav-link">Tentang</a></li>
				<li class="nav-item"><a href="{{url('/kategori')}}" class="nav-link">Kelola data</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
				<h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Desa Cimuja, Kecamatan Cimalaka, Kabupaten Sumedang</h2>
				<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
					<marquee><h3 style="color: white;">SDM Unggul Untuk Indonesia Maju</h3></marquee>
				</h1>
				<p><a href="{{url('/home')}}" class="btn btn-success" style="width: 150px;">Login</a></p>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-no-pb services-section">
	<div class="container">
		<div class="row no-gutters d-flex">
			<!-- Baris 1 -->
			<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><img src="{{asset('images/Sumedang.png')}}" style="width: 100px; height: 70px;"></div>
					<div class="media-body">
						<h3 class="heading mb-3"><a href="#">Profil desa</a></h3>
						<p>Berisikan profil Desa Cimuja dan potensi yang dimilikinya.</p>
					</div>
				</div>
				<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><span class="flaticon-lawyer"></span></div>
				<div class="media-body">
					<h3 class="heading mb-3"><a href="#">Data kepengurusan desa</a></h3>
					<p>Berisikan data-data kepungurusan di Desa Cimuja.</p>
				</div>
			</div>
			<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><img src="{{asset('images/folder.png')}}" style="width: 100px; height: 70px;"></div>
				<div class="media-body">
					<h3 class="heading mb-3"><a href="#">Data eksternal desa</a></h3>
					<p>Berisikan data-data orang maupun organisasi dari luar desa.</p>
				</div>
			</div>
			<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><span class="ion-ios-help-circle-outline"></span></div>
				<div class="media-body">
					<h3 class="heading mb-3"><a href="#">Cara penggunaan</a></h3>
					<p>Berisikan cara penggunaan aplikasi.</p>
				</div>
			</div>
			<!-- Baris 2 -->
			<br>
			<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><img src="{{asset('images/Sumedang.png')}}" style="width: 100px; height: 70px;"></div>
					<div class="media-body">
						<h3 class="heading mb-3"><a href="#">Profil desa</a></h3>
						<p>Berisikan profil Desa Cimuja dan potensi yang dimilikinya.</p>
					</div>
				</div>
				<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><span class="flaticon-lawyer"></span></div>
				<div class="media-body">
					<h3 class="heading mb-3"><a href="#">Data kepengurusan desa</a></h3>
					<p>Berisikan data-data kepungurusan di Desa Cimuja.</p>
				</div>
			</div>
			<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><img src="{{asset('images/folder.png')}}" style="width: 100px; height: 70px;"></div>
				<div class="media-body">
					<h3 class="heading mb-3"><a href="#">Data eksternal desa</a></h3>
					<p>Berisikan data-data orang maupun organisasi dari luar desa.</p>
				</div>
			</div>
			<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><span class="ion-ios-help-circle-outline"></span></div>
				<div class="media-body">
					<h3 class="heading mb-3"><a href="#">Cara penggunaan</a></h3>
					<p>Berisikan cara penggunaan aplikasi.</p>
				</div>
			</div>
		</div>
	</div>
</section>
@stop