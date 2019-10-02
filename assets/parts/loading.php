<!--
ローディング用div
-->

<div id="js-loader" class="loader">	
	<div class="shutter"></div>
	<div class="content"></div>
</div>


<script>
	$(function(){
		console.log('load-start');
		$('body').addClass('is-loading');
		setTimeout(function(){
			$('body').addClass('is-animation-ended');
		}, 2500);
		$(window).on('load', function () {
			$('body').removeClass('is-loading');
			$('body').addClass('is-load-ended');
			AOS.init({
				duration: 1000,
				once: true
			});
		});
	});
</script>

