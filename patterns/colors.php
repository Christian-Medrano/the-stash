<?php include 'header.php'; ?>

<div class="wrapper">
	<main class="container-side">
		<div class="row py-3">
			<div class="col col-12">
				<h1>Colors</h1>
			</div>
		</div>

		<div class="row py-3">
			<div class="col col-12">
				<h4>Brand Colors</h4>
				<hr/>
			</div>
			<div class="col col-8 colors">
				<div class="color">
					<div class="color-block bg-brand-dark"></div>
					<p class="color-code">#422259</p>
				</div>
				<div class="color">
					<div class="color-block bg-brand"></div>
					<p class="color-code">#67358B</p>
				</div>
				<div class="color">
					<div class="color-block bg-brand-light"></div>
					<p class="color-code">#A152D9</p>
				</div>
			</div>
			<div class="col col-4">
				<p>Brand colors signify the Font Squirrel brand. Use as the leading color and to accent typography.</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col col-12">
				<h4>UI Colors</h4>
				<hr/>
			</div>
			<div class="col col-8 colors">
				<div class="color">
					<div class="color-block bg-blue"></div>
					<p class="color-code">#32A7E0</p>
				</div>
				<div class="color">
					<div class="color-block bg-green"></div>
					<p class="color-code">#61DE83</p>
				</div>
				<div class="color">
					<div class="color-block bg-orange"></div>
					<p class="color-code">#EDBD52</p>
				</div>
				<div class="color">
					<div class="color-block bg-red"></div>
					<p class="color-code">#E05050</p>
				</div>
			</div>
			<div class="col col-4">
				<p>Use to highlight points of interaction or notifications. Avoid using as a secondary color palette.</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col col-12">
				<h4>Gray Scale</h4>
				<hr/>
			</div>
			<div class="col col-12 colors">
				<div class="color">
					<div class="color-block" style="background-color: #000;"></div>
					<p class="color-code">#000000</p>
				</div>
				<div class="color">
					<div class="color-block" style="background-color: #212121;"></div>
					<p class="color-code">#212121</p>
				</div>
				<div class="color">
					<div class="color-block" style="background-color: #404040;"></div>
					<p class="color-code">#404040</p>
				</div>
				<div class="color">
					<div class="color-block" style="background-color: #808080;"></div>
					<p class="color-code">#808080</p>
				</div>
				<div class="color">
					<div class="color-block" style="background-color: #bfbfbf;"></div>
					<p class="color-code">#bfbfbf</p>
				</div>
				<div class="color">
					<div class="color-block" style="background-color: #e7e7e7;"></div>
					<p class="color-code">#e7e7e7</p>
				</div>
				<div class="color">
					<div class="color-block" style="background-color: #f7f7f7; box-shadow: 0px 0px 0px 1px #e7e7e7 inset;"></div>
					<p class="color-code">#f7f7f7</p>
				</div>
				<div class="color">
					<div class="color-block" style="background-color: #fff;"></div>
					<p class="color-code">#ffffff</p>
				</div>
			</div>
		</div>
	</main>

	<?php include 'sidebar.php'; ?>
	
</div>

<script>
	$(document).ready(function(){
		$('#colors').addClass('active');
		$('title').append(' - Colors');
	});
</script>

<?php include 'footer.php'; ?>