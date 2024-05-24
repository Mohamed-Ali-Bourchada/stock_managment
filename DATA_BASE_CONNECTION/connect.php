<?php
$user = 'root';
$pass= '';
$dsn= 'mysql:host=localhost;dbname=gestion-stock' ;
try{
    $dbh= new PDO($dsn, $user, $pass);
}
catch (PDOException $e){
    print"error ! : ".$e ->getMessage()."<br/>";die();
}

?>