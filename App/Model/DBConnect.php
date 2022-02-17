<?php
namespace App\Model;
use PDO;
use PDOException;

class DBConnect
{
    public $dsn;
    public $username;
    public $password;

    public function __construct()
    {
        $this->dsn = 'mysql:host=localhost;dbname=iNotes;charset=utf8;';
        $this->username='root';
        $this->password='root';
    }

    public function connect()
    {
        try {
        return new PDO($this->dsn,$this->username,$this->password);
        }
        catch (PDOException $exception){
            exit($exception->getMessage());
        }
    }
}