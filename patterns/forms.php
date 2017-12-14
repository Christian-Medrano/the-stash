<?php include 'header.php'; ?>

<div class="wrapper">
	<main class="container-side">
		<div class="row py-3">
			<div class="col col-12">
				<h1>Forms</h1>
			</div>
		</div>
		<div class="row py-3">
			<div class="col col-12">
				<h4>Form Groups</h4>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col col-3"></div>
			<div class="col col-6">
				<form class="form" action="">
					<div class="form-group">
						<label for="">Name</label>
						<input class="text-input" type="text" placeholder="Name">
					</div>
					<div class="form-group">
						<label for="">Bio</label>
						<textarea class="textarea" name="" id="" cols="30" rows="5" placeholder="Tell us about yourself..."></textarea>
						<small>This is an example of small text. <a href="">Learn more...</a></small>
					</div>
					<div class="form-group">
						<input class="radio" name="radioExample" type="radio">Male
						<br>
						<input class="radio" name="radioExample" type="radio">Female
					</div>
					<div class="form-group">
						<input type="checkbox">Email me about font news
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-blue">Save Changes</button>
					</div>
				</form>
			</div>
			<div class="col col-3"></div>
		</div>
		<div class="row py-3">
			<div class="col col-12">
				<div class="code-example">
<pre>
<code>&lt;form class="form" action=""&gt;</code>
	<code>&lt;div class="form-group"&gt;</code>
		<code>&lt;label for="name"&gt;Name&lt;/label&gt;</code>
		<code>&lt;input class="text-input" name="name" type="text" placeholder="Name"&gt;</code>
	<code>&lt;/div&gt;</code>
	<code>&lt;div class="form-group"&gt;</code>
		<code>&lt;label for="bio"&gt;Bio&lt;/label&gt;</code>
		<code>&lt;textarea class="textarea" name="bio" cols="30" rows="5" placeholder="Tell us about yourself..."&gt;&lt;/textarea&gt;</code>
	<code>&lt;/div&gt;</code>
	<code>&lt;div class="form-group"&gt;</code>
		<code>&lt;input class="radio" type="radio"&gt;</code>
	<code>&lt;/div&gt;</code>
	<code>&lt;div class="form-group"&gt;</code>
		<code>&lt;input class="checkbox" type="checkbox"&gt;</code>
	<code>&lt;/div&gt;</code>
	<code>&lt;button class="btn" type="submit"&gt;&lt;/button&gt;</code>
<code>&lt;/form&gt;</code>
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
		$('#forms').addClass('active');
		$('title').append(' - Forms');
	});
</script>

<?php include 'footer.php'; ?>