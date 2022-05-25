<?php 

include("data.php");
$ins = $base->prepare("DELETE FROM `connection` WHERE `connection`.`id` = :id ");

$ins->execute(array("id"=>$_GET["id"]));
 header("Location:afficher.php");

?>