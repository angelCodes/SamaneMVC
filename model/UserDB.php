<?php
/*==================================================
    MODELE MVC DEVELOPPE PAR Ngor SECK
    ngorsecka@gmail.com
    (+221) 77 - 433 - 97 - 16
    PERFECTIONNEZ CE MODEL ET FAITES MOI UN RETOUR
    POUR TOUTE MODIFICATION VISANT A AMELIORER
    CE MODELE.
    VOUS ETES LIBRE DE TOUTE UTILISATION.
  ===================================================*/
    class UserDB extends Model{
		
		//La base de données samane_User est dans view/User
		//Pour Userer importer la 
        public function __construct(){
            parent::__construct();
        }

        public function getUser($ID)
        {
            $sql = "SELECT *
                     FROM User
                     WHERE User.ID = ".$ID;
            if($this->db != null)
			{
				return $this->db->query($sql)->fetch();
			}else{
				return null;
			}
        }
		
		public function addUser($login, $password, $email){
			$sql = "INSERT INTO User VALUES(null, '$login', '$password', '$email')";
			if($this->db != null)
			{
				$this->db->exec($sql);
				return $this->db->lastInsertId();//Si la clé primaire est auto_increment
											 //sinon return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function deleteUser($id){
			$sql = "DELETE FROM User WHERE ID = $id";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function updateUser($idUser, $login, $password, $email){
			$sql = "UPDATE User SET login = '$login',
						password = '$password',
						email = '$email'
						WHERE ID = $idUser";

			if($this->db != null)
			{
				return $this->db->exec($sql);
			}else{
				return null;
			}
		}
		
		public function listeUser(){
			$sql = "SELECT * FROM user";
			
			if($this->db != null)
				return $this->db->query($sql)->fetchAll();
			else
				return null;
		}
	}