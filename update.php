<?php
include("data.php");
$ins = $base->prepare("UPDATE `connection` SET `name` = :name, `firstname` = :firstname, `username` = :username, `mail` = :mail, `state` = :state, `password` =md5(:password) WHERE `connection`.`id` = :id;");
$ins->execute(array(
    "name"=>$_POST["name"],
    "firstname"=>$_POST["firstname"],
    "username"=>$_POST["username"],
    "mail"=>$_POST["mail"],
    "state"=>$_POST["state"],
    "password"=>$_POST["password"],
    "id"=>$_GET["id"],
));
header("Location:afficher.php");
?>