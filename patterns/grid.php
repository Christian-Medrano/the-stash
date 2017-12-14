<?php include '../header.php'; ?>

 <script>
		$('#style-link').attr('href', '../css/style.css')
</script>

<div class="wrapper">
	<main class="container-side">
		<div class="row py-3">
			<div class="col col-12">
				<h1>The Grid</h1>
			</div>
		</div>
		<div class="row py-3">
			<div class="col col-12">
				<h4>Column Structure</h4>
				<hr/>
			</div>
			<div class="col col-6">
				<img src="images/columns.png" alt="">
			</div>
			<div class="col col-6 px-1">
				<p>The grid is built on a 12 column layout. Containers parent rows which parent columns.</p>
			</div>
		</div>
		<div class="row py-3">
			<div class="col col-12">
				<h4>Grid Areas</h4>
				<hr/>
			</div>
			<div class="col col-12 pb-3">
				<p>Columns can span across varying widths of the page by controlling their column size. Full width columns are 12 wide, half width columns are 6 wide, etc.</p>
			</div>
			<div class="col col-12 bg-blue p-1 center-xy outlined">
				<code class="text-light">.col-12</code>
			</div>
			<div class="col col-6 bg-blue p-1 center-xy outlined">
				<code class="text-light">.col-6</code>
			</div>
			<div class="col col-6 bg-blue p-1 center-xy outlined">
				<code class="text-light">.col-6</code>
			</div>
			<div class="col col-8 bg-blue p-1 center-xy outlined">
				<code class="text-light">.col-8</code>
			</div>
			<div class="col col-4 bg-blue p-1 center-xy outlined">
				<code class="text-light">.col-4</code>
			</div>
			<div class="col col-12 py-3">
				<div class="code-example">
<pre>
<code>&lt;div class="container"&gt;</code>
	<code>&lt;div class="row"&gt;</code>
		<code>&lt;div class="col col-12"&gt;</code><code>&lt;/div&gt;</code>
	<code>&lt;/div&gt;</code>
	<code>&lt;div class="row"&gt;</code>
		<code>&lt;div class="col col-6"&gt;</code><code>&lt;/div&gt;</code>
		<code>&lt;div class="col col-6"&gt;</code><code>&lt;/div&gt;</code>
	<code>&lt;/div&gt;</code>
	<code>&lt;div class="row"&gt;</code>
		<code>&lt;div class="col col-8"&gt;</code><code>&lt;/div&gt;</code>
		<code>&lt;div class="col col-4"&gt;</code><code>&lt;/div&gt;</code>
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
	$('#grid').addClass('active');
</script>

<?php include '../footer.php'; ?>