<?php

require_once('database.php');

class Table extends Database
{
  public function getData()
  {
    $conn = $this->getConnection();
    $stmt = $conn->prepare("SELECT * FROM nama_table");
    $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt->fetchAll();
  }

  public function getJsonData()
  {
    return json_encode($this->getData());
  }

  public function insertData($arrayData)
  {
    $field_satu = $arrayData['field_satu'];
    $field_dua = $arrayData['field_dua'];
    $field_tiga = $arrayData['field_tiga'];

    $conn = $this->getConnection();
    $stmt = $conn->prepare("INSERT INTO nama_table VALUE (NULL, :field_satu, :field_dua, :field_tiga)");
    $stmt->bindParam(':field_satu', $field_satu);
    $stmt->bindParam(':field_dua', $field_dua);
    $stmt->bindParam(':field_tiga', $field_tiga);

    $result = $stmt->execute();

    return $result;
  }

  public function updateData($arrayData)
  {
    $id = $arrayData['id'];
    $field_satu = $arrayData['field_satu'];
    $field_dua = $arrayData['field_dua'];
    $field_tiga = $arrayData['field_tiga'];

    $conn = $this->getConnection();
    $stmt = $conn->prepare("UPDATE nama_table SET field_satu = :field_satu, field_dua = :field_dua, field_tiga = :field_tiga WHERE id = :id");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':field_satu', $field_satu);
    $stmt->bindParam(':field_dua', $field_dua);
    $stmt->bindParam(':field_tiga', $field_tiga);

    $result = $stmt->execute();

    return $result;
  }

  public function deleteData($id)
  {
    $conn = $this->getConnection();
    $stmt = $conn->prepare("DELETE FROM nama_table WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $result = $stmt->execute();
    return $result;
  }

  public function getDataWhere($id)
  {
    $conn = $this->getConnection();
    $stmt = $conn->prepare("SELECT * FROM nama_table WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $result = $stmt->execute();
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    if (!$result) {
      die("Query Error");
    }
    return $stmt->fetch();
  }
}


$table = new Table();
