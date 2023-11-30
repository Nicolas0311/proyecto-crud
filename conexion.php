<?php 
$servidor ="localhost";
$db="phpcrud";
$username ="root";
$password ="";

try{
    $conexion=new PDO("mysql:host=$servidor;dbname=$db",$username,$password);
    if($conexion){
        }
}catch(Exception $e) {
    echo $e->getMessage();

}






?>
