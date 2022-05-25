<?php
    //connection bdd
    include("data.php");
    $ins = $base->prepare("INSERT INTO `connection` (`id`, `name`, `firstname`, `username`, `mail`, `state`, `password`) VALUES (NULL, :name, :firstname, :username, :mail, :state, md5(:password));");
    $ins->execute(array(
        "name"=>$_POST["name"],
        "firstname"=>$_POST["firstname"],
        "username"=>$_POST["username"],
        "mail"=>$_POST["mail"],
        "state"=>$_POST["state"],
        "password"=>$_POST["password"],
    ));
    header("Location: insertion.php");
?>