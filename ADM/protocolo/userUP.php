<?php

include '../protocolo/protocolo.php';

$manager = new protocolo();
 var_dump($_POST);
if (!empty($_POST)) {
    $manager->update_client($_POST);
    header("Location: ../Gerenciar_user/index.php");
}


?>

