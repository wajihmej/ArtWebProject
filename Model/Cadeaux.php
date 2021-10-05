<?PHP
	class Cadeaux{
		private $id;
		private $id_utilisateur;
		private $nom;
		private $prix;
		private $image;

		
		function __construct($id_utilisateur,$nom,$prix,$image){
			
			$this->id_utilisateur=$id_utilisateur;
			$this->nom=$nom;
			$this->prix=$prix;
			$this->image=$image;
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
	

	}
?>