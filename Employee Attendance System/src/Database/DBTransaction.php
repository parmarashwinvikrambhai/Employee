<?php
namespace App\Database;
use \PDO;


class DBTransaction
{
    public $pdo;
    public $last_insert_id;
    public const DB_NAME       = 'test';
    public const DB_USER       = 'root';
    public const DB_PASSWORD   = '';
    public const DB_HOST       = 'localhost';

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=" . self::DB_HOST . ";dbname=" . self::DB_NAME, self::DB_USER, self::DB_PASSWORD);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    }
    public function insertEmployee($sql, $data)
    {
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($data);

        $this->last_insert_id = $this->pdo->lastInsertId();
        return $this->last_insert_id;
    }
    public function fetchEmployee()
    {
        $stmt = $this->pdo->prepare('SELECT * FROM employee;');
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        return $stmt->fetchAll();
    }
     public function updateAttendance($attend,$id)
     {
    
         foreach ($attend as $atn_key => $atn_value) {
             if ($atn_value == "present") {
                 $query = "UPDATE attendance SET attendance = 'present' WHERE id = :id";
                 $data = [
                    'id' => $id
                ];
                 $stmt= $this->pdo->prepare($query);
                 $stmt->execute($data); 
                 
             } elseif ($atn_value == "absent") {
                 $query = "UPDATE attendance SET attendance = 'absent' WHERE id = :id";
                 $data = [
                    'id' => $id
                ];
                 $stmt= $this->pdo->prepare($query);
                return $stmt->execute($data); 
             }
         }
     }
}
?>