<?PHP
include "../Controller/TableauxC.php";


$tableauxC=new TableauxC();
if (isset($_POST["id"])){
	$tableauxC->supprimerTableaux($_POST["id"]);
	header('Location: AfficherTableaux.php');
}

?>