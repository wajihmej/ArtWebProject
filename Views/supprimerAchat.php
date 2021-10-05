<?PHP
include "../Controller/AchatC.php";
include  "../Controller/LivraisonC.php";


$achatC=new AchatC();
$livraisonC= new LivraisonC();

if (isset($_GET['id'])){
	$achatC->supprimerAchat($_GET['id']);
	$livraisonC->supprimerLivraison($_GET['id']);
	header('Location: MesAchats.php');
}

?>