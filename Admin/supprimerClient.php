<?PHP
include "../Controller/ClientC.php";
include "../Controller/AchatC.php";
include "../Controller/CommentaireC.php";


$clientC=new ClientC();
$achatC=new AchatC();
$commentaireC=new CommentaireC();
if (isset($_POST["id"])){
	$achatC->supprimerAchatClient($_POST["id"]);
	$commentaireC->supprimerCommentaireClient($_POST["id"]);

	$clientC->supprimerClient($_POST["id"]);
	header('Location: AfficherClients.php');
}

?>