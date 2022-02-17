<?php
namespace App\Model;
class BaseModel implements InterfaceModel
{
    public $table;
    public $connect;
    public function __construct()
    {
        $db = new DBConnect();
        $this->connect = $db->connect();
    }

    public function getAll()
    {
        $sql = "Select * from ".$this->table;
        $stmt = $this->connect->query($sql);
        return $stmt->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getById($id)
    {
        $sql = "select * from $this->table where id = ".$id;
        $stmt = $this->connect->query($sql);
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }

    public function delete($id)
    {
        $sql = "delete from $this->table where id =".$id;
        $this->connect->query($sql);
    }
}