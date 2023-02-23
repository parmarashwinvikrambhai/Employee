<?php
session_start();
error_reporting(0);
require __DIR__ . '/../../vendor/autoload.php';
require_once 'add.php';

use App\Database\DBTransaction;
session_start();

if (isset($_POST['submit'])) {

    $name=$_POST['name'];
    $role=$_POST['role'];

}
$sql="insert into employee(emp_name,role) VALUES (:emp_name,:role)";
$data=[
    'emp_name'=>$name,
    'role'=>$role

]; 

$db=new DBTransaction();
$db->insertEmployee($sql, $data);
$db->updateAttendance($sql, $data);





?>