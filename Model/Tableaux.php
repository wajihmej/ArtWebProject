<?PHP
	class Tableaux{
		private $id;
		private $id_utilisateur;
		private $nom;
		private $prix;
		private $image;
		private $informations;

		
		function __construct($id_utilisateur,$nom,$prix,$image,$informations){
			
			$this->id_utilisateur=$id_utilisateur;
			$this->nom=$nom;
			$this->prix=$prix;
			$this->image=$image;
			$this->informations=$informations;
		}
		
		function getId(){
			return $this->id;
		}
		function getId_utilisateur(){
			return $this->id_utilisateur;
		}
		function getNom(){
			return $this->nom;
		}
		function getImage(){
			return $this->image;
		}
		function getPrix(){
			return $this->prix;
		}
		function getInformation(){
			return $this->informations;
		}


		function setId_utilisateur($id_utilisateur){
			$this->id_utilisateur=$id_utilisateur;
		}
		function setNom($nom){
			$this->nom=$nom;
		}
		function setPrix($prix){
			$this->prix=$prix;
		}
		function setImage($image){
			$this->image=$image;
		}
		function setInformation($informations){
			$this->informations=$informations;
		}		
	

	}
?>