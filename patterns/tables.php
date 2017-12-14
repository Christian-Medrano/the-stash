<?php include 'header.php'; ?>

<div class="wrapper">
	<main class="container-side">
		<div class="row py-3">
			<div class="col col-12">
				<h1>Tables</h1>
			</div>
		</div>

		<div class="row pt-3">
			<div class="col col-12">
				<h4>Font Information Table</h4>
				<hr>
			</div>
		</div>

		<div class="row mb-3">
			<div class="col col-12">
				<h2>Font Information</h2>
				<table class="font-information">
					<tbody>
						<tr>
							<td class="font-info-label">Downloads</td>
							<td>3,222,065</td>
						</tr>
						<tr>
							<td class="font-info-label">Uploaded on:</td>
							<td>October 24, 2011</td>
						</tr>
						<tr>
							<td class="font-info-label">Designed by:</td>
							<td><a href="">Christian Robertson</a></td>
						</tr>
						<tr>
							<td class="font-info-label">Classification:</td>
							<td><a href="">Sans Serif</a></td>
						</tr>
						<tr>
							<td class="font-info-label">Tags:</td>
							<td><a href="">Headings, Oblique, Paragraph, Sans, Grotesque, Sans, Humanist, Super Family</a></td>
						</tr>
						<tr>
							<td class="font-info-label">Languages:</td>
							<td><a href="">Show Language Support</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
		<div class="row mb-3">
			<div class="col col-12">
				<div class="code-example">
<pre>
<code>&lt;table class="font-info"&gt;</code>
	<code>&lt;tbody&gt;</code>
		<code>&lt;tr&gt;</code>
			<code>&lt;td class="font-info-label"&gt;</code>
				<code style="color: #808080;">&lt;!-- label --&gt;</code>
			<code>&lt;/td&gt;</code>
			<code>&lt;td&gt;</code>
				<code style="color: #808080;">&lt;!-- value --&gt;</code>
			<code>&lt;/td&gt;</code>
		<code>&lt;/tr&gt;</code>
	<code>&lt;/tbody&gt;</code>
<code>&lt;/table&gt;</code>
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
		$('#tables').addClass('active');
		$('title').append(' - Tables');
	});
</script>

<?php include 'footer.php'; ?>