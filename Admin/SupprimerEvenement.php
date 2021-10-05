<?php
include "../Controller/EvenementC.php";
$event1c=new EvenementC();
if(isset($_GET['id'])){
    $event1c->deleteEvent($_GET['id']);
    header('Location: AfficherEvenements.php');
}

?>
