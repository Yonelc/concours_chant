<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom du concours</th>
      <th scope="col">Date du concours</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
<?php
$i=1;
foreach($contests as $contest){
    ?>
    <tr>
        <th scope="row"><?php echo $i ?></th>
        <td><?php echo $contest->contestName ?></td>
        <td><?php echo $contest->contestdate ?></td>
        <td><?php echo $contest->contestActive ?></td>
    </tr>
<?php
  $i++;
}
?>
  </tbody>
</table>