<?php
require_once('../cnx.php');

$id_cmd = $_GET['cmd'];


$bdd->exec('UPDATE commandes SET statut_cmd = "A" WHERE id_commande='.$id_cmd);


header('Location: ../homepage.php');

?>
