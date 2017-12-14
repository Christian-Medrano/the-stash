<?php include 'header.php'; ?>

<div class="wrapper">
	<main class="container-side">
		<div class="row py-3">
			<div class="col col-12">
				<h1>Typography</h1>
			</div>
		</div>

		<div class="row py-3">
			<div class="col col-12">
				<h4>Typefaces</h4>
				<hr/>
			</div>
			<div class="col col-12">
				<h1 style="font-size: 8rem">Roboto</h1>
			</div>
			<div class="col col-4 px-1">
				<h2>Roboto</h2>
				<p>Aa Bb Cc Dd Ee Ff Gg Hh Ii Jj Kk Ll Mm Nn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy Zz</p>
				<p>0 1 2 3 4 5 6 7 8 9</p>
			</div>
			<div class="col col-4 font-mono px-1">
				<h2>Roboto Mono</h2>
				<p>Aa Bb Cc Dd Ee Ff Gg Hh Ii Jj Kk Ll Mm Nn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy Zz</p>
				<p>0 1 2 3 4 5 6 7 8 9</p>
			</div>
			<div class="col col-4 font-serif px-1">
				<h2>Roboto Slab</h2>
				<p>Aa Bb Cc Dd Ee Ff Gg Hh Ii Jj Kk Ll Mm Nn Oo Pp Qq Rr Ss Tt Uu Vv Ww Xx Yy Zz</p>
				<p>0 1 2 3 4 5 6 7 8 9</p>
			</div>
		</div>

		<div class="row py-3">
			<div class="col col-12">
				<h4>Type Scale</h4>
				<hr/>
			</div>

			<table id="typescale">
				<tbody>
					<tr>
						<td class="type-size">4rem</td>
						<td class="bold" style="font-size: 4rem">Size your type</td>
					</tr>
					<tr>
						<td class="type-size">3.25rem</td>
						<td class="bold" style="font-size: 3.25rem">Size your type</td>
					</tr>
					<tr>
						<td class="type-size">3rem</td>
						<td class="bold" style="font-size: 3rem">Size your type</td>
					</tr>
					<tr>
						<td class="type-size">2.25rem</td>
						<td class="bold" style="font-size: 2.25rem">Size your type</td>
					</tr>
					<tr>
						<td class="type-size">2rem</td>
						<td class="bold" style="font-size: 2rem">Size your type</td>
					</tr>
					<tr>
						<td class="type-size">1.5rem</td>
						<td class="bold" style="font-size: 1.5rem">Size your type</td>
					</tr>
					<tr>
						<td class="type-size">1.25rem</td>
						<td class="bold" style="font-size: 1.25rem">Size your type</td>
					</tr>
					<tr>
						<td class="type-size">1rem</td>
						<td class="bold" style="font-size: 1rem">Size your type</td>
					</tr>
					<tr>
						<td class="type-size">0.875rem</td>
						<td class="bold" style="font-size: 0.875rem">Size your type</td>
					</tr>
					<tr>
						<td class="type-size">0.75rem</td>
						<td class="bold" style="font-size: 0.75rem">Size your type</td>
					</tr>
				</tbody>
			</table>
		</div>
	</main>

	<?php include 'sidebar.php'; ?>
	
</div>

<script>
	$(document).ready(function(){
		$('#type').addClass('active');
		$('title').append(' - Typography');
	});
</script>

<?php include 'footer.php'; ?>