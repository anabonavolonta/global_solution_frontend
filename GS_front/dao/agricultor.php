<?php

class Agricultor extends Connection
{
  private $table = 'tbagricultor';
  private $query = 'SELECT * FROM tbagricultor';
  
  public function getAll()
  {   
    $result = $this->connection->query($this->query);
    $lista = array();
    while ($record = $result->fetch_object()) {
      array_push($lista, $record);
    }
    $result->close();
    return $lista;		
  }

  public function getById($id)
  {
    return $this->connection->query($this->query . ' WHERE tbagricultor.id = ' . $id)->fetch_assoc();
  }

  public function insert( $nomeAgricultor, $cnpj)
  {
    $sql = "INSERT INTO " . $this->table . " (nomeAgricultor, cnpj) VALUES (".$nomeAgricultor."',".$cnpj.")";
    return $this->connection->query($sql);
  }

  public function update($id, $nomeAgricultor, $cnpj)
  {
    $sql = "UPDATE " . $this->table . "  nomeAgricultor='".$nomeAgricultor."', cnpj=".$cnpj." WHERE id=" . $id;
    return $this->connection->query($sql);
  }

  public function delete($id)
  {
    $sql = "DELETE FROM  " . $this->table . " WHERE id=" . $id;
    return $this->connection->query($sql);
  }
}
