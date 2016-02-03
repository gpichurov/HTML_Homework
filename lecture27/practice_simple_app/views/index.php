<?php if ($message = getValue($_GET, 'message')):?>
<?php $success = getValue($_GET, 'status');?>
<div class="flash-message alert alert-<?= $success ? 'success' : 'danger'?> alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  	<span aria-hidden="true">&times;</span>
  </button>
  <strong><?= $message ?></strong>
</div>
<?php endif;?>

<table class="table">
	<thead>
		<tr>
			<th>#</th>
			<th>Name</th>
			<th>Email</th>
			<th></th>
		</tr>
		
	</thead>
	<tbody>
		<?php 
		$i = 1;
		foreach ($data as $key => $user):?>
		<tr>
			<td><?= $i++ ?></td>
			<td><?= $user['full_name'] ?></td>
			<td><?= $user['email'] ?></td>
			<td>
				<a href="form.php?key=<?= $key ?>" class="btn btn-default btn-small"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="delete.php?key=<?= $key ?>" data-role="delete-button" class="btn btn-small btn-danger"><span class="glyphicon glyphicon-minus"></span></a>
			</td>
		</tr>
		<?php endforeach;?>
		<?php if (empty($data)):?>
		<tr>
			<td align="center" colspan="4"><strong>No Data</strong></td>
		</tr>
		<?php endif;?>
	</tbody>
</table>