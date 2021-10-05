<?php 
class Livraison{
		private $id;
		private $idc;
		private $nom;
        private $prenom;
		private $adresse;
		private $tel;
		private $emplacement;
		private $code_post;

		public function __construct($idc,$nom,$prenom,$adresse,$tel,$emplacement,$code_post){
        $this->idc=$idc;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->adresse=$adresse;
        $this->tel=$tel;
        $this->emplacement=$emplacement;
        $this->code_post=$code_post;
		}
		public function getid(){
			return $this->id;
		}
		public function getIdc(){
			return $this->idc;
		}
		public function getNom(){
			return $this->nom;
		}
		public function getPrenom(){
			return $this->prenom;
		}
        public function getAdresse(){
			return $this->adresse;
        }
		public function getTel(){
			return $this->tel;
        }
        public function getEmplacement(){
			return $this->emplacement;
        }
        public function getCodePost(){
			return $this->code_post;
        }

		public function setid($id){
			$this->id=$id;
		}
		public function setIdc($idc){
			$this->idc=$idc;
		}
		public function setNom($nom){
			$this->nom=$nom;
		}
		public function setPrenom($prenom){
			$this->prenom;
        }
        public function setAdresse($adresse){
			$this->adresse=$adresse;
        }
		public function setTel($tel){
			$this->tel=$tel;
        }        
        public function setEmplacement($emplacement){
			$this->emplacement=$emplacement;
        }
        public function setCodePost($code_post){
			$this->code_post=$code_post;
        }
}

?>