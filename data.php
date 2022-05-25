<?php
try{
    $base = new PDO("mysql:host=localhost; dbname=a","root","");
}
catch(exception $e){
    die("Erreur".$e->getMessage());
}
?>