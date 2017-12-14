<?php include '../header.php'; ?>

 <script>
		$('#style-link').attr('href', '../css/style.css')
</script>

<div class="wrapper">
	<main class="container-side">
		<div class="row py-3">
			<div class="col col-12">
				<h1>Iconography</h1>
			</div>
		</div>

		<div class="row py-2">
			<div class="col col-12">
				<h4>Icons</h4>
				<hr/>
			</div>

			<div class="col col-12 d-flex">
				<div class="icon-card">
					<img class="icon" src="../css/icons/desktop.svg" alt="">
					<p class="icon-label">Desktop</p>
				</div>
				<div class="icon-card">
					<img class="icon" src="../css/icons/web.svg" alt="">
					<p class="icon-label">Web</p>
				</div>
				<div class="icon-card">
					<img class="icon" src="../css/icons/ebook.svg" alt="">
					<p class="icon-label">Ebook</p>
				</div>
				<div class="icon-card">
					<img class="icon" src="../css/icons/mobile.svg" alt="">
				<p class="icon-label">app</p>
				</div>
			</div>

			<div class="col col-12 d-flex">
				<div class="icon-card">
					<img class="icon" src="../css/icons/search.svg" alt="">
					<p class="icon-label">Search</p>
				</div>
				<div class="icon-card">
					<img class="icon" src="../css/icons/add.svg" alt="">
					<p class="icon-label">Add</p>
				</div>
				<div class="icon-card">
					<img class="icon" src="../css/icons/close.svg" alt="">
					<p class="icon-label">Close</p>
				</div>
				<div class="icon-card">
					<img class="icon" src="../css/icons/reset.svg" alt="">
					<p class="icon-label">Reset</p>
				</div>
			</div>
		

			<div class="col col-12 d-flex">
				<div class="icon-card">
					<img class="icon" src="../css/icons/download.svg" alt="">
					<p class="icon-label">Download</p>
				</div>
				<div class="icon-card">
					<img class="icon" src="../css/icons/filter.svg" alt="">
					<p class="icon-label">Filter</p>
				</div>
				<div class="icon-card">
					<img class="icon" src="../css/icons/sort.svg" alt="">
					<p class="icon-label">Sort</p>
				</div>
				<div class="icon-card">
					<img class="icon" src="../css/icons/tags.svg" alt="">
					<p class="icon-label">Tags</p>
				</div>
			</div>

			<div class="col col-12 d-flex">
				<div class="icon-card">
					<img class="icon" src="../css/icons/class.svg" alt="">
					<p class="icon-label">Classification</p>
				</div>
				<div class="icon-card">
					<img class="icon" src="../css/icons/Key.svg" alt="">
					<p class="icon-label">License</p>
				</div>
			</div>
		</div>
	</main>

	<?php include 'sidebar.php'; ?>
	
</div>

<script>
	$(document).ready(function(){
		$('#icons').addClass('active');
	});
</script>

<?php include '../footer.php'; ?>