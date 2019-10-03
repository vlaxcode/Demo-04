<?php
 
 require_once 'dbconfig.php';
 
 $dsn = "mysql:host=$host;dbname=$db";
try{
 // create a PDO connection with the configuration data
 $conn = new PDO($dsn, $username, $password);
 
 // display a message if connected to database successfully
 if($conn){
 echo "Connected to the <strong>$db</strong> database successfully!";
 $dept_name="test dep";
 
  $sql_insert = "INSERT INTO departments(name)
    VALUES(" . $dbh->quote($dept_name) .")";
 
 if($dbh->exec($sql_insert) === false){
 $msg = 'Error inserting the department.';
 return false;
 }else{
 $msg = "The new department $dept_name is created";
 return true;
 }
 
 
 
 
        }
}catch (PDOException $e){
 // report error message
 echo $e->getMessage();
}