<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>The Stash</title>
	<link rel="stylesheet" href="css/style.css" id="style-link">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="../js/sticky-kit.js"></script>
</head>
<body>

<nav class="primary-nav">
	<div class="container">
		<ul class="nav-links">
			<li class="nav-item">
				<a href="" class="nav-link">Overview</a>
			</li>
			<li class="nav-item">
				<a href="" class="nav-link">Patterns</a>
			</li>
			<li class="nav-item">
				<a href="../example/index.php" class="nav-link">Example</a>
			</li>
		</ul>
	</div>
</nav>

<div class="wrapper">
	<main class="container">
		<div class="row">
			<div class="col col-12">
				This is content
			</div>
		</div>
	</main>
</div>



<footer class="container-fluid footer-light pb-5">
	<div class="container">
		<div class="row">
			<div class="col col-6">
				<p><a href="">Download the source code</a></p>
				<p>©2017 <a class="link-plain" href="http://christianmedrano.com">Christian Mikhael Medrano</a>. All rights reserved.</p>
			</div>
			<div class="col col-6">
				<p class="text-right"><a href="http://fontsquirrel.com" target="_blank">Font Squirrel</a></p>
			</div>
		</div>
	</div>
</footer>
<script>

$(document).ready(function(){
	$(".sticky").stick_in_parent();

	$('.copy-code').click(function(){
		var copyText = $(this).prev().prev().text();
		var converted = $(this).prev().val(copyText);

		$(converted).select();

		document.execCommand("copy");

		$(this).children().css({
			opacity: '1',
			transform: 'translateY(-100%)',
			'transition-duration': '0.3s'
		});

		setTimeout( function(){
			$('.notify').css({
				opacity: 0,
				transform: 'translateY(0%)',
				'transition-duration': '0s'
			});
		}, 1300)

	});
});
</script>
	
</body>
</html>