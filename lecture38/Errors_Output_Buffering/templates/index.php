<?php echo $title ?>
<table>
  <tr>
  	<th>#</th>
    <th>Column 1 Heading</th>
    <th>Column 2 Heading</th>
  </tr>
  <?php foreach ($objects as $key => $city):?>
  <tr>
  	<td><?= $key + 1?></td>
    <td><?= htmlentities($city['name'])?></td>
    <td><?= htmlentities($city['population'])?></td>
  </tr>
  <?php endforeach;?>
</table>

