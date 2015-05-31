<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>
	function toggleMobileMenu(){
		var $mobileMenu = $('#mobile-main-menu');
		$mobileMenu.slideToggle('fast');
	}
	$(document).ready(function(){
		$('#mobile-menu-button').on('click',toggleMobileMenu);
	});
</script>