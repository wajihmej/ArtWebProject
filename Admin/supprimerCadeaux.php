<?PHP
include "../Controller/CadeauxC.php";


$cadeauxC=new CadeauxC();
if (isset($_POST["id"])){
	$cadeauxC->supprimerCadeaux($_POST["id"]);
	header('Location: AfficherCadeaux.php');
}

?>