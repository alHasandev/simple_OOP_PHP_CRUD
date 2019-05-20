<?php

class Database
{
  private $connection;

  public function __construct()
  {
    try {
      $option = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ];

      $this->connection = new PDO("mysql:host=localhost;dbname=nama_database", 'root', '', $option);
    } catch (PDOException $err) {
      die("Connection failed : " . $err->getMessage());
    }
  }

  public function sanitize($var)
  {
    $result = mysqli_real_escape_string($this->connection, $var);
    return $result;
  }

  public function getConnection()
  {
    return $this->connection;
  }

  public function hello()
  {
    return "Heloo";
  }
}
