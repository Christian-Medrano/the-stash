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