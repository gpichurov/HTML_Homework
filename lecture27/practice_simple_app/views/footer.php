	</div>	
	
	<script src="../js/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$(function(){
			$('a[data-role=delete-button]').on('click', function(e) {
				e.preventDefault();
				if (confirm('Are you sure?')) {
					window.location = this.href;
				}
			});

			setTimeout(function() {
				$('.flash-message').remove();
			}, 1300)
		})	
</script>
	</body>
</html>