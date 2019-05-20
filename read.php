<?php
require_once('app/table.php');
?>

<?php require_once('header.php') ?>


<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Field Satu</th>
      <th>Field Dua</th>
      <th>Field Tiga</th>
      <th>Aksi</th>
    </tr>
  </thead>

  <tbody>
    <?php $no = 1; ?>
    <?php foreach ($table->getData() as $data) : ?>
      <tr>
        <td><?= $no ?></td>
        <td><?= $data['field_satu'] ?></td>
        <td><?= $data['field_dua'] ?></td>
        <td><?= $data['field_tiga'] ?></td>
        <td>
          <a href="edit.php?id=<?= $data['id'] ?>">Edit</a>
          <a href="delete.php?id=<?= $data['id'] ?>">Hapus</a>
        </td>
      </tr>
      <?php $no++ ?>
    <?php endforeach; ?>
  </tbody>
</table>

<?php require_once('footer.php') ?>