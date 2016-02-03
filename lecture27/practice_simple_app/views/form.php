<form role="form" method="POST">
	<?php if ($errors):?>
	<div class="alert alert-danger">
		<?= implode('<br>', $errors)?>
	</div>
	<?php endif;?>
	<div class="form-group">
		<label for="full_name">Full Name</label>
		<input type="text" class="form-control" value="<?= getValue($data, 'full_name')?>"name="full_name"/>
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="text" class="form-control" value="<?= getValue($data, 'email')?>"name="email"/>
	</div>
	<div>
		<button type="submit">Submit</button>
	</div>
</form>