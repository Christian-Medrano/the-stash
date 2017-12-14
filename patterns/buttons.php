<?php include 'header.php'; ?>
<?php 
	$search = '
		<!-- Generator: Adobe Illustrator 22.0.1, SVG Export Plug-In  -->
		<svg version="1.1"
			 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/"
			 x="0px" y="0px" viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">
		<style type="text/css">
		</style>
		<defs>
		</defs>
		<g>
			<path class="icon-fill" d="M15.6,13.7l-3.4-3.4c0.7-1.1,1.1-2.3,1.1-3.7c0-3.7-3-6.7-6.7-6.7S0,3,0,6.7s3,6.7,6.7,6.7
				c1.4,0,2.6-0.4,3.7-1.1l3.4,3.4L15.6,13.7z M6.7,10.7c-2.2,0-4-1.8-4-4s1.8-4,4-4s4,1.8,4,4S8.9,10.7,6.7,10.7z"/>
		</g>
		</svg>
	';

 ?>
<div class="wrapper">
	<main class="container-side">
		<div class="row py-3">
			<div class="col col-12">
				<h1>Buttons</h1>
			</div>
		</div>
		<div class="row py-3">
			<div class="col col-12">
				<h4>Solid Buttons</h4>
				<hr/>
			</div>
			<div class="col col-12 pb-3 justify-space-between">
				<button class="btn">Click Me</button>
				<button class="btn btn-blue">Click Me</button>
				<button class="btn btn-green">Click Me</button>
				<button class="btn btn-orange">Click Me</button>
				<button class="btn btn-red">Click Me</button>
				<button class="btn btn-white">Click Me</button>
				<button class="btn btn-black">Click Me</button>
			</div>
			<div class="col col-12">
				<div class="code-example">
<pre>
<code>&lt;button class="btn"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-blue"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-green"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-orange"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-red"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-white"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-black"&gt;&lt;/button&gt;</code>
</pre>
				</div>
				<textarea class="copied-code" name="" id="" cols="30" rows="10"></textarea>
				<p class="copy-code">Copy Code<span class="notify">Copied!</span></p>
				

			</div>
		</div>

		<div class="row py-3">
			<div class="col col-12">
				<h4>Outlined Buttons</h4>
				<hr/>
			</div>
			<div class="col col-12 pb-3 justify-space-between">
				<button class="btn btn-outline">Click Me</button>
				<button class="btn btn-outline-blue">Click Me</button>
				<button class="btn btn-outline-green">Click Me</button>
				<button class="btn btn-outline-orange">Click Me</button>
				<button class="btn btn-outline-red">Click Me</button>
				<button class="btn btn-outline-white">Click Me</button>
				<button class="btn btn-outline-black">Click Me</button>
			</div>
			<div class="col col-12">
				<div class="code-example">
<pre>
<code>&lt;button class="btn"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-outline-blue"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-outline-green"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-outline-orange"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-outline-red"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-outline-white"&gt;&lt;/button&gt;</code>
<code>&lt;button class="btn btn-outline-black"&gt;&lt;/button&gt;</code>
</pre>
				</div>
				<textarea class="copied-code" name="" id="" cols="30" rows="10"></textarea>
				<p class="copy-code">Copy Code<span class="notify">Copied!</span></p>
				

			</div>
		</div>

		<div class="row py-3">
			<div class="col col-12">
				<h4>Buttons with Icons</h4>
				<hr/>
			</div>

			<div class="col col-4 pb-3 justify-space-between">
				<button class="btn btn-blue">
					<?php echo $search; ?>
					Search
				</button>
				
			</div>

			<div class="col col-8">
				<div class="code-example">
<pre>
<code>&lt;button class="btn"&gt;<span style="color: #808080;">&lt;!-- Icon, Text --&gt;</span>&lt;/button&gt;</code>
</pre>
				</div>

				<textarea class="copied-code" name="" id="" cols="30" rows="10"></textarea>
				<p class="copy-code">Copy Code<span class="notify">Copied!</span></p>
				

			</div>
		</div>

		<div class="row py-3">
			<div class="col col-12">
				<h4>Disabled Button</h4>
				<hr/>
			</div>

			<div class="col col-4 pb-3 justify-space-between">
				<button class="btn btn-disabled">
					Search
				</button>
			</div>

			<div class="col col-8">
				<div class="code-example">
<pre>
<code>&lt;button class="btn btn-disabled"&gt;&lt;/button&gt;</code>
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
		$('#buttons').addClass('active');
		$('title').append(' - Buttons');
	});
</script>

<?php include 'footer.php'; ?>