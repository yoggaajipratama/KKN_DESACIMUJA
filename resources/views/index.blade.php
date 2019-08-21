@extends('templates.view_templates')
@section('content')
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	<div class="container">
		<a class="navbar-brand" href="index.html">Whisper</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="oi oi-menu"></span> Menu
		</button>

		<div class="collapse navbar-collapse" id="ftco-nav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
				<li class="nav-item"><a href="practice-areas.html" class="nav-link">Practice Areas</a></li>
				<li class="nav-item"><a href="attorneys.html" class="nav-link">Attorneys</a></li>
				<li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
				<li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
			</ul>
		</div>
	</div>
</nav>

<div class="hero-wrap js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
			<div class="col-md-10 text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
				<h2 class="subheading" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We are here to help!</h2>
				<h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
					<span>Experience</span> . <span>Innovation</span> . <span>Excellence</span>
				</h1>
				<p><a href="#" class="btn btn-primary py-3 px-4">Request a Free Consultation</a></p>
			</div>
		</div>
	</div>
</div>

<section class="ftco-section ftco-no-pb services-section">
	<div class="container">
		<div class="row no-gutters d-flex">
			<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><span class="flaticon-auction"></span></div>
					<div class="media-body">
						<h3 class="heading mb-3"><a href="#">Get Your Legal Advice</a></h3>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
					</div>
				</div>
				<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><span class="flaticon-lawyer"></span></div>
				<div class="media-body">
					<h3 class="heading mb-3"><a href="#">Work with Expert Lawyers</a></h3>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				</div>
			</div>
			<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><span class="flaticon-money"></span></div>
				<div class="media-body">
					<h3 class="heading mb-3"><a href="#">Have Great Discounted Rates</a></h3>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				</div>
			</div>
			<div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
				<div class="icon"><span class="ion-ios-help-circle-outline"></span></div>
				<div class="media-body">
					<h3 class="heading mb-3"><a href="#">Review Your Case Documents</a></h3>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
				</div>
			</div>
		</div>
	</div>
</section>
@stop