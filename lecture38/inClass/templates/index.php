<?php echo $title ?>
<table>
    <tr>
        <th></th>
        <th></th>
    </tr>
    <?php foreach($objects as $city)?>
    <tr>
        <td><?=htmlentities($city['name']) ?></td>
        <td></td>
    </tr>
</table>