<?PHP
include  "../Controller/CadeauxC.php";


$cadeauxC= new CadeauxC();
if (isset($_GET["id"])){
	$cadeauxC->supprimerCadeaux($_GET["id"]);
	header('Location: MesCadeaux.php');
}

?>