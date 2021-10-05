<?PHP
	class Achat{
		private $id;
		private $id_utilisateur;
		private $id_prod;
		private $quatite;
		private $prix_total;

		
		function __construct($id_utilisateur,$id_prod,$quatite,$prix_total,$type){
			$this->id_utilisateur=$id_utilisateur;
			$this->id_prod=$id_prod;
			$this->quatite=$quatite;
			$this->prix_total=$prix_total;
			$this->type=$type;
		}
		
		function getId(){
			return $this->id;
		}
		function getId_utilisateur(){
			return $this->id_utilisateur;
		}
		function getId_prod(){
			return $this->id_prod;
		}
		function getQuatite(){
			return $this->quatite;
		}
		function getPrix_total(){
			return $this->prix_total;
		}
		function getType(){
			return $this->type;
		}

		function setId_utilisateur($id_utilisateur){
			$this->id_utilisateur=$id_utilisateur;
		}
		function setId_prod($id_prod){
			$this->id_prod=$id_prod;
		}
		function setQuatite($quatite){
			$this->quatite=$quatite;
		}
		function setPrix_total($prix_total){
			$this->prix_total=$prix_total;
		}
		function setType($type){
			$this->type=$type;
		}	

	}
?>