<?php
require_once('app/table.php');

if (isset($_GET['id'])) {
  if ($table->deleteData($_GET['id'])) {
    header('Location: http://localhost/pluscrud/read.php');
  } else {
    die('Query Error');
  }
}
