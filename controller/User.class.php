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
    class User extends Controller{
        public function __construct(){
            parent::__construct();
            //Appel du model
            require_once 'model/UserDB.php';
        }

    //A noter que toutes les views de ce controller doivent être créées dans le dossier view/User
        //Ne Userer pas toutes les methodes, ce controller est un prototype pour vous aider à mieux comprendre
        public function index(){
            return $this->view->load("User/login");
        }

        public function getID($id){
            $data['ID'] = $id;

            return $this->view->load("User/get_id", $data);
        }
        
        public function get($id){
            //Instanciation du model
            $tdb = new UserDB();

            $data['User'] = $tdb->getUser($id);
      
            return $this->view->load("User/get", $data);
        }
    public function liste(){
            //Instanciation du model
            $tdb = new UserDB();
      
            $data['Users'] = $tdb->listeUser();
      
            return $this->view->load("User/liste", $data);
        }
  
  
    public function add(){       $tdb = new UserDB();
    
            if(isset($_POST['valider']))
            {
                extract($_POST);
                if(!empty($login) && !empty($password) && !empty($email)) {
                    $ok = $tdb->addUser($login, $password,$email);
                    $data['ok'] = $ok;
                }
                 return $this->view->load("User/add", $data);
            }
            
            return $this->view->load("User/add");
        }
    public function update(){
      //Instanciation du model
            $tdb = new UserDB();
            if(isset($_POST['modifier'])){
                extract($_POST);
                if(!empty($id) && !empty($login) && !empty($password) && !empty($email)) {
                    $ok = $tdb->updateUser($id, $login, $password,$email);
                }
            }
           
            return $this->liste();//appel de la methode liste du controller
    }
        public function delete($id){
            //Instanciation du model
            $tdb = new UserDB();
      //Supression
      $tdb->deleteUser($id);
      //Retour vers la liste
            return $this->liste();
        }
    
    public function edit($id){
      
            //Instanciation du model
            $tdb = new UserDB();
      //Supression
      $data['User'] = $tdb->getUser($id);
      //chargement de la vue edit.html
            return $this->view->load("User/edit", $data);
        }
    }
?>