<?php 
	$listURL = "http://www.fontsquirrel.com/api/fontlist/sans%20serif";
	$list = json_decode(file_get_contents($listURL));
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Example Application</title>
	<link rel="stylesheet" href="../css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="js/sticky-kit.js"></script>
</head>
<body>

<nav class="link-menu">
	<div class="container">
		<a href="">Login</a>
		<a href="">FAQ</a>
		<a href="">Contact</a>
	</div>
</nav>
<div class="banner container-fluid">
	<div class="container">
		<div class="logo">
			<img src="images/logo.svg" alt="Font Squirrel Logo">
		</div>
		<div class="banner-ad">
			<p>Ad</p>
		</div>
	</div>
</div>
<nav class="primary-nav">
	<div class="container">
		<ul class="nav-links">
			<li class="nav-item">
				<a href="" class="nav-link active">Hot</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Recent</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Top Font Deals</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Swag</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Generator</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Font Identifier</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Font Talk</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Blog</a>
			</li>
		</ul>

		<form action="">
			<input class="text-input" type="text" placeholder="Search Fonts and Foundaries">
			<button type="submit" class="button">Search</button>
		</form>
	</div>
</nav>

<nav class="primary-nav sticky">
	<div class="container">

		<ul class="nav-links">
			<li class="nav-item">
				<div class="dropdown nav-dropdown">
					<div class="dropdown-toggle">
						<p>
							<img class="text-icon" src="../css/icons/sort.svg" alt="Sort By Icon">
							<span class="dropdown-value">Trending &#9662;</span>
						</p>
					</div>
					<div class="dropdown-menu">
						
					</div>
				</div>
			</li>
			<li class="nav-item">
				<div class="dropdown nav-dropdown">
					<div class="dropdown-toggle">
						<p>
							<img class="text-icon" src="../css/icons/class.svg" alt="Sort By Icon">
							<span class="dropdown-value">Sans Serif &#9662;</span>
						</p>
					</div>
					<div class="dropdown-menu">
						
					</div>
				</div>
			</li>
			<li class="nav-item">
				<div class="dropdown nav-dropdown">
					<div class="dropdown-toggle">
						<p>
							<img class="text-icon" src="../css/icons/key.svg" alt="Sort By Icon">
							<span class="dropdown-value">Desktop &#9662;</span>
						</p>
					</div>
					<div class="dropdown-menu">
						
					</div>
				</div>
			</li>
			<li class="nav-item">
				<div class="dropdown nav-dropdown">
					<div class="dropdown-toggle">
						<p>
							<img class="text-icon" src="../css/icons/tags.svg" alt="Sort By Icon">
							<span class="dropdown-value">None &#9662;</span>
						</p>
					</div>
					<div class="dropdown-menu">
						
					</div>
				</div>
			</li>
		</ul>
	</div>
</nav>


<main class="container">
	<div class="container-side">
		<h1>Free Font Utopia</h1>
		<p id="font-count">Free fonts have met their match. We know how hard it is to find quality freeware that is licensed for commercial work. We've done the hard work, hand-selecting these typefaces and presenting them in an easy-to-use format. Here are some of our favorites:</p>

		<div class="font-card">
			<img class="listing-image" src="images/montserrat.png" alt="">
			<div class="font-card-footer">
				<div class="font-licenses">
					<img src="../css/icons/desktop.svg" alt="">
					<img src="../css/icons/web.svg" alt="">
					<img src="../css/icons/ebook.svg" alt="">
					<img src="../css/icons/mobile.svg" alt="">
				</div>
				<div class="font-info">
					<div class="font-name"><a href="">Montserrat</a></div>
					<div class="font-designer"><a href="">Julieta Ulanovsky</a></div>
					<div class="font-styles">36 Styles</div>
				</div>
				<a href="" class="font-download">
					<img src="../css/icons/download.svg" alt="">
					DOWNLOAD TTF
				</a>
			</div>
		</div>

		<div class="font-card">
			<img class="listing-image" src="images/opensans.png" alt="">
			<div class="font-card-footer">
				<div class="font-licenses">
					<img src="../css/icons/desktop.svg" alt="">
					<img src="../css/icons/web.svg" alt="">
					<img src="../css/icons/ebook.svg" alt="">
					<img src="../css/icons/mobile.svg" alt="">
				</div>
				<div class="font-info">
					<div class="font-name"><a href="">Open Sans</a></div>
					<div class="font-designer"><a href="">Ascender Fonts</a></div>
					<div class="font-styles">10 Styles</div>
				</div>
				<a href="" class="font-download">
					<img src="../css/icons/download.svg" alt="">
					DOWNLOAD TTF
				</a>
			</div>
		</div>

		<div class="font-card">
			<img class="listing-image" src="images/greatvibes.png" alt="">
			<div class="font-card-footer">
				<div class="font-licenses">
					<img src="../css/icons/desktop.svg" alt="">
					<img src="../css/icons/web.svg" alt="">
					<img src="../css/icons/ebook.svg" alt="">
					<img src="../css/icons/mobile.svg" alt="">
				</div>
				<div class="font-info">
					<div class="font-name"><a href="">Great Vibes</a></div>
					<div class="font-designer"><a href="">TypeSETit</a></div>
					<div class="font-styles">1 Style</div>
				</div>
				<a href="" class="font-download">
					<img src="../css/icons/download.svg" alt="">
					DOWNLOAD TTF
				</a>
			</div>
		</div>

		<div class="font-card">
			<img class="listing-image" src="images/bebas.png" alt="">
			<div class="font-card-footer">
				<div class="font-licenses">
					<img src="../css/icons/desktop.svg" alt="">
					<img src="../css/icons/web.svg" alt="">
					<img src="../css/icons/ebook.svg" alt="">
					<img src="../css/icons/mobile.svg" alt="">
				</div>
				<div class="font-info">
					<div class="font-name"><a href="">Bebas Neue</a></div>
					<div class="font-designer"><a href="">Flat-It</a></div>
					<div class="font-styles">5 Styles</div>
				</div>
				<a href="" class="font-download">
					<img src="../css/icons/download.svg" alt="">
					DOWNLOAD TTF
				</a>
			</div>
		</div>

		<div class="font-card">
			<img class="listing-image" src="images/raleway.png" alt="">
			<div class="font-card-footer">
				<div class="font-licenses">
					<img src="../css/icons/desktop.svg" alt="">
					<img src="../css/icons/web.svg" alt="">
					<img src="../css/icons/ebook.svg" alt="">
					<img src="../css/icons/mobile.svg" alt="">
				</div>
				<div class="font-info">
					<div class="font-name"><a href="">Raleway</a></div>
					<div class="font-designer"><a href="">The League of Moveable Type</a></div>
					<div class="font-styles">18 Styles</div>
				</div>
				<a href="" class="font-download">
					<img src="../css/icons/download.svg" alt="">
					DOWNLOAD TTF
				</a>
			</div>
		</div>

		<div class="font-card">
			<img class="listing-image" src="images/roboto.png" alt="">
			<div class="font-card-footer">
				<div class="font-licenses">
					<img src="../css/icons/desktop.svg" alt="">
					<img src="../css/icons/web.svg" alt="">
					<img src="../css/icons/ebook.svg" alt="">
					<img src="../css/icons/mobile.svg" alt="">
				</div>
				<div class="font-info">
					<div class="font-name"><a href="">Roboto</a></div>
					<div class="font-designer"><a href="">Christian Robertson</a></div>
					<div class="font-styles">18 Style</div>
				</div>
				<a href="" class="font-download">
					<img src="../css/icons/download.svg" alt="">
					DOWNLOAD TTF
				</a>
			</div>
		</div>

		<div class="font-card">
			<img class="listing-image" src="images/alexbrush.png" alt="">
			<div class="font-card-footer">
				<div class="font-licenses">
					<img src="../css/icons/desktop.svg" alt="">
					<img src="../css/icons/web.svg" alt="">
					<img src="../css/icons/ebook.svg" alt="">
					<img src="../css/icons/mobile.svg" alt="">
				</div>
				<div class="font-info">
					<div class="font-name"><a href="">Alex Brush</a></div>
					<div class="font-designer"><a href="">TypeSETit</a></div>
					<div class="font-styles">1 Style</div>
				</div>
				<a href="" class="font-download">
					<img src="../css/icons/download.svg" alt="">
					DOWNLOAD TTF
				</a>
			</div>
		</div>

		<div class="font-card">
			<img class="listing-image" src="images/lato.png" alt="">
			<div class="font-card-footer">
				<div class="font-licenses">
					<img src="../css/icons/desktop.svg" alt="">
					<img src="../css/icons/web.svg" alt="">
					<img src="../css/icons/ebook.svg" alt="">
					<img src="../css/icons/mobile.svg" alt="">
				</div>
				<div class="font-info">
					<div class="font-name"><a href="">Lato</a></div>
					<div class="font-designer"><a href="">tyPoland Lukasz Dziedzic</a></div>
					<div class="font-styles">18 Style</div>
				</div>
				<a href="" class="font-download">
					<img src="../css/icons/download.svg" alt="">
					DOWNLOAD TTF
				</a>
			</div>
		</div>

		<div class="font-card">
			<img class="listing-image" src="images/animatic.png" alt="">
			<div class="font-card-footer">
				<div class="font-licenses">
					<img src="../css/icons/desktop.svg" alt="">
					<img src="../css/icons/web.svg" alt="">
					<img src="../css/icons/ebook.svg" alt="">
					<img src="../css/icons/mobile.svg" alt="">
				</div>
				<div class="font-info">
					<div class="font-name"><a href="">Animatic</a></div>
					<div class="font-designer"><a href="">Vernon Adams</a></div>
					<div class="font-styles">2 Style</div>
				</div>
				<a href="" class="font-download">
					<img src="../css/icons/download.svg" alt="">
					DOWNLOAD TTF
				</a>
			</div>
		</div>

		<div class="font-card">
			<img class="listing-image" src="images/quicksand.png" alt="">
			<div class="font-card-footer">
				<div class="font-licenses">
					<img src="../css/icons/desktop.svg" alt="">
					<img src="../css/icons/web.svg" alt="">
					<img src="../css/icons/ebook.svg" alt="">
					<img src="../css/icons/mobile.svg" alt="">
				</div>
				<div class="font-info">
					<div class="font-name"><a href="">Quicksand</a></div>
					<div class="font-designer"><a href="">Andrew Paglinawan</a></div>
					<div class="font-styles">7 Style</div>
				</div>
				<a href="" class="font-download">
					<img src="../css/icons/download.svg" alt="">
					DOWNLOAD TTF
				</a>
			</div>
		</div>

		<div class="font-card">
			<img class="listing-image" src="images/milkshake.png" alt="">
			<div class="font-card-footer">
				<div class="font-licenses">
					<img src="../css/icons/desktop.svg" alt="">
					<img class="unavailable" src="../css/icons/web.svg" alt="">
					<img class="unavailable" src="../css/icons/ebook.svg" alt="">
					<img class="unavailable" src="../css/icons/mobile.svg" alt="">
				</div>
				<div class="font-info">
					<div class="font-name"><a href="">Milkshake</a></div>
					<div class="font-designer"><a href="">Laura Worthington</a></div>
					<div class="font-styles">1 Style</div>
				</div>
				<a href="" class="font-download">
					<img src="../css/icons/download.svg" alt="">
					DOWNLOAD TTF
				</a>
			</div>
		</div>
		
		<div class="row center-x">
			<div class="banner-ad">
				<p>Ad</p>
			</div>
		</div>
		
	</div>
	<div class="sidebar">
		<div class="container">
			<div class="row">
				<p><a href="">Advertise on Font Squirrel!</a></p>
			</div>
			<div class="row">
				<div class="box-ad">
				Ad
				</div>
			</div>
			<div class="row">
				<div class="box-ad">
					<img src="images/swag-ad.jpg" alt="">
				</div>
			</div>
			<div class="row">
				<div class="box-ad">
				Ad
				</div>
			</div>
			<div class="row">
				<div class="text">
					<h2>New to Fonts?</h2>
					<p><a href="">Download</a> our free beginners guide to fonts.</p>
				</div>
			</div>
			<div class="row">
				<div class="text">
					<h2>About Font Squirrel</h2>
					<p>Font Squirrel is your best resource for FREE, hand-picked, high-quality, commercial-use fonts. Even if that means we send you elsewhere to get them... <a href="">more info</a></p>
				</div>
			</div>
		</div>
	</div>
</main>

<footer class="container-fluid py-5">
	<div class="container">
		<div class="row">
			<!-- footer column 1 -->
			<div class="col col-3">
				<h2>Font Lists</h2>
				<ul>
					<li><a href="">Recently Added Fonts</a></li>
					<li><a href="">Most Downloaded Fonts</a></li>
					<li><a href="">Almost Free Fonts</a></li>
					<li><a href="">Languages</a></li>
					<li><a href="">Tags</a></li>
				</ul>
			</div>
			<!-- footer column 2 -->
			<div class="col col-3">
				<h2>Commercial Favorites</h2>
				<ul>
					<li>
						<a href="">Proxima Nova</a>
					</li>
					<li>
						<a href="">Museo Sans</a>
					</li>
					<li>
						<a href="">Bombshell Pro</a>
					</li>
					<li>
						<a href="">Brandon Grotesque</a>
					</li>
					<li>
						<a href="">Franklin Gothic FS</a>
					</li>
				</ul>
			</div>
			<!-- footer column 3 -->
			<div class="col col-3">
				<h2>Need Help?</h2>
				<ul>
					<li>
						<a href="">Frequently Asked Questions</a>
					</li>
					<li>
						<a href="">Help Installing Fonts</a>
					</li>
					<li>
						<a href="">Contact Us</a>
					</li>
					<li>
						<a href="">Privacy Policy</a>
					</li>
					<li>
						<a href="">Advertising</a>
					</li>
				</ul>
			</div>
			<!-- footer column 4 -->
			<div class="col col-3">
				<h2>Connect</h2>
				<ul>
					<li>
						<a href="">Twitter</a>
					</li>
					<li>
						<a href="">Facebook</a>
					</li>
					<li>
						<a href="">RSS</a>
					</li>
					<li>
						<a href="">Newsletter</a>
					</li>
					<li>
						<a href="">Blog</a>
					</li>
					<li>
						<a href="">Login</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- footer row 2 -->
		<div class="row footer-bottom">
			<p>©2009-2017 Font Squirrel. All rights reserved.</p>
			<a href="../">The Stash</a>
		</div>
	</div>
</footer>

<script>
	$(".sticky").stick_in_parent();
</script>
	
</body>
</html>