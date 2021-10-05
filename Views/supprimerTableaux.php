<?PHP
include  "../Controller/TableauxC.php";


$tableauxC= new TableauxC();
if (isset($_GET["id"])){
	$tableauxC->supprimerTableaux($_GET["id"]);
	header('Location: MesTableaux.php');
}

?>