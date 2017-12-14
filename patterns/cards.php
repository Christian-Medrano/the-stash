<?php include 'header.php'; ?>

<div class="wrapper">
	<main class="container-side">
		<div class="row py-3">
			<div class="col col-12">
				<h1>Cards</h1>
			</div>
		</div>

		<div class="row py-3">
			<div class="col col-12">
				<h4>Font Card</h4>
				<hr/>
			</div>
			<div class="col col-12 pb-3">
				<p>Font cards are used exclusively for font listings. They include a listing name, license icons, font name, font designer, number of styles, and a download link.</p>
			</div>
			<div class="col col-12 pb-3">
				<div class="font-card">
					<img class="listing-image" src="../example/images/roboto.png" alt="">
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
			</div>
			<div class="col col-12">
				<div class="code-example">
<pre>
<code>&lt;div class="font-card"&gt;</code>
	<code>&lt;img class="listing-image" src=""&gt;</code>
	<code>&lt;div class="card-footer"&gt;</code>
		<code>&lt;div class="font-licenses"&gt;</code>
			<code>&lt;img src="" alt="license"&gt;</code>
		<code>&lt;/div&gt;</code>
		<code>&lt;div class="font-info"&gt;</code>
			<code>&lt;div class="font-name"&gt;</code><code>&lt;/div&gt;</code>
			<code>&lt;div class="font-designer"&gt;</code><code>&lt;/div&gt;</code>
			<code>&lt;div class="font-styles"&gt;</code><code>&lt;/div&gt;</code>
		<code>&lt;/div&gt;</code>
		<code>&lt;div class="font-download"&gt;</code>
			<code>&lt;a href=""&gt;</code>
				<code>&lt;img src=""&gt;</code>
				<code>DOWNLOAD TTF</code>
			<code>&lt;/a&gt;</code>
		<code>&lt;/div&gt;</code>
	<code>&lt;/div&gt;</code>
<code>&lt;/div&gt;</code>
</pre>

				</div>
				<textarea class="copied-code" name="" id="" cols="30" rows="10"></textarea>
				<p class="copy-code">Copy Code<span class="notify">Copied!</span></p>
			</div>
		</div>
	</main>

	<?php include 'sidebar.php'; ?>
	
</div>

<script>
	$(document).ready(function(){
		$('#cards').addClass('active');
		$('title').append(' - Cards');
	});
</script>

<?php include 'footer.php'; ?>