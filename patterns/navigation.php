<?php include '../header.php'; ?>

<script>
	$('#style-link').attr('href', '../css/style.css')
</script>

<div class="wrapper">
	<main class="container-side">
		<div class="row py-3">
			<div class="col col-12">
				<h1>Navigation</h1>
			</div>
		</div>
		<div class="row py-3">
			<div class="col col-12">
				<h4>Primary Navigation</h4>
				<hr>
			</div>

			<div class="col col-12 pb-3">
				<nav class="primary-nav">
					<div class="container">
						<ul class="nav-links">
							<li class="nav-item">
								<a href="" class="nav-link">Link</a>
							</li>
							<li class="nav-item">
								<a href="" class="nav-link active">Active Link</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>

			<div class="col col-12">
				<div class="code-example">
<pre>
<code>&lt;div class="primary-nav"&gt;</code>
	<code>&lt;div class="container"&gt;</code>
		<code>&lt;ul class="nav-links"&gt;</code>
			<code>&lt;li class="nav-item"&gt;</code>
				<code>&lt;a class="nav-link" href=""&gt;Link&lt;/a&gt;</code>
			<code>&lt;/div&gt;</code>
			<code>&lt;li class="nav-item"&gt;</code>
				<code>&lt;a class="nav-link active" href=""&gt;Active Link&lt;/a&gt;</code>
			<code>&lt;/div&gt;</code>
		<code>&lt;/ul&gt;</code>
	<code>&lt;/div&gt;</code>
<code>&lt;/div&gt;</code>
</pre>
				</div>
				<textarea class="copied-code" name="" id="" cols="30" rows="10"></textarea>
				<p class="copy-code">Copy Code<span class="notify">Copied!</span></p>
			</div>

			<div class="col col-12 pt-3">
				<p>
					Primary navigation backgrounds should be made fullwidth by placing them into a fluid container (<code>.container-fluid</code>).
				</p>
			</div>

		</div>

		<div class="row py-3">
			<div class="col col-12">
				<h4>Secondary Navigation</h4>
				<hr>
			</div>

			<div class="col col-12 pb-3">
				<nav class="secondary-nav">
					<div class="container">
						<ul class="nav-links">
							<li class="nav-item">
								<a href="" class="nav-link">Link</a>
							</li>
							<li class="nav-item">
								<a href="" class="nav-link active">Active Link</a>
							</li>
						</ul>
					</div>
				</nav>
			</div>

			<div class="col col-12 pb-3">
				<p>
					Use secondary navigations to provide subnavigation for deeper pages.
				</p>
			</div>

			<div class="col col-12">
				<div class="code-example">
<pre>
<code>&lt;div class="secondary-nav"&gt;</code>
	<code style="color: #808080;">&lt;!-- navigation content --&gt;</code>
<code>&lt;/div&gt;</code>
</pre>
				</div>
				<textarea class="copied-code" name="" id="" cols="30" rows="10"></textarea>
				<p class="copy-code">Copy Code<span class="notify">Copied!</span></p>
			</div>

		</div>

		<div class="row py-3">
			<div class="col col-12">
				<h4>Sticky Navigation</h4>
				<hr>
			</div>

			<div class="col col-12 mb-3">
				<iframe src="sticky/" frameborder="0" width="100%" height="320px" style="outline: 1px solid #e7e7e7;"></iframe>
			</div>

			<div class="col col-12 pb-3">
				<p>
					Navigation bars can be made sticky simply by adding the class <code>.sticky</code> to an exisitng primary navigation.
				</p>
			</div>

			<div class="col col-12">
				<div class="code-example">
<pre>
<code>&lt;script src="js/sticky-kit.js"&gt;&lt;/script&gt;</code>

<code>&lt;div class="primary-nav sticky"&gt;</code>
	<code style="color: #808080;">&lt;!-- navigation content --&gt;</code>
<code>&lt;/div&gt;</code>

<code>&lt;script&gt;</code>
	<code>$(".sticky").stick_in_parent();</code>
<code>&lt;/script&gt;</code>
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
		$('#navs').addClass('active');
	});
</script>

<?php include '../footer.php'; ?>