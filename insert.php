<?php
require_once('app/table.php');
if (isset($_POST) && !empty($_POST)) {
  if ($table->insertData($_POST)) {
    header('Location: http://localhost/pluscrud/read.php');
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Edit Data</title>
</head>

<body>
  <form action="" method="post">
    <div class="form-group">
      <label for="field_satu">Field Satu</label>
      <input type="text" name="field_satu">
    </div>
    <div class="form-group">
      <label for="field_dua">Field Dua</label>
      <input type="text" name="field_dua">
    </div>
    <div class="form-group">
      <label for="field_tiga">Field Tiga</label>
      <input type="text" name="field_tiga">
    </div>
    <div class="form-group">
      <input type="submit" value="Simpan">
    </div>
  </form>
</body>

</html>