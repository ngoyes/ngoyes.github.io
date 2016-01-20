<html lang="en" class="no-js">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href='https://fonts.googleapis.com/css?family=Sintony:400,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="{{ asset('/css/reset.css') }}"> <!-- CSS reset -->
	<link rel="stylesheet" href="{{ asset('/css/style.css') }}"> <!-- Resource style -->
	<script src="{{ asset('/js/modernizr.js') }}"></script> <!-- Modernizr -->
  	
	<title>Just Ngoyes</title>
</head>
<body>
<nav class="cd-vertical-nav">
	<ul>
		<li><a href="#section1" class="active"><span class="label">Intro</span></a></li>
		<li><a href="#section2"><span class="label">Events</span></a></li>
		<li><a href="#section3"><span class="label">Help</span></a></li>
		<li><a href="#section4"><span class="label">Ngoyes</span></a></li>
	</ul>
</nav><!-- .cd-vertical-nav -->

<button class="cd-nav-trigger cd-image-replace">Open navigation<span aria-hidden="true"></span></button>

<section id="section1" class="cd-section">
	<div class="content-wrapper gambarnya" id="gambar">
		<img src="{{ asset('/img/stiker.png') }}" width="300" height="450" alt="">
	</div>
</section><!-- cd-section -->

<section id="section2" class="cd-section">
	<div class="content-wrapper">
		<h2>Events</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto numquam, totam iusto officia earum perferendis, culpa ad atque eveniet praesentium nobis expedita similique beatae tenetur. Distinctio vel tenetur, id cum.</p>
	</div>
</section><!-- cd-section -->

<section id="section3" class="cd-section">
	<div class="content-wrapper">
		<h2>Help</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto numquam, totam iusto officia earum perferendis, culpa ad atque eveniet praesentium nobis expedita similique beatae tenetur. Distinctio vel tenetur, id cum.</p>
	</div>
</section><!-- cd-section -->

<section id="section4" class="cd-section">
	<div class="content-wrapper">
		<h2>Share</h2>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto numquam, totam iusto officia earum perferendis, culpa ad atque eveniet praesentium nobis expedita similique beatae tenetur. Distinctio vel tenetur, id cum.</p>
	</div>
</section><!-- cd-section -->
	{{ asset('/css/jquery-2.1.4.js') }}
<script src="{{ asset('/js/jquery-2.1.4.js') }}"></script>
<script src="{{ asset('/css/main.js') }}"></script> <!-- Resource jQuery -->
</body>
</html>