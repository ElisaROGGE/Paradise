<?php 

class Reservation{
    public $mysqli;
    private $stmt;
    public $user = "";
    public $name;
    public $email;
    public $tel;
    public $adresse;
    public $destination;
    public $personnes;
    public $depart;
    public $retour;
    function __construct(){
        $this->name=$_POST["nom"];
        $this->email=$_POST["email"];
        $this->tel=$_POST["tel"];
        $this->adresse=$_POST["adresse"];
        $this->destination=$_POST["destination"];
        $this->personnes=$_POST["personnes"];
        $this->depart=$_POST["depart"];
        $this->retour=$_POST["retour"];
        $this->mysqli= new mysqli("localhost", "root", "", "paradise_db");
    }

    function query(){
        $requete = "insert into reservation_form(nom, email, telephone,	adresse, destination, voyageurs, depart, arrivee) 
    values('$this->name', '$this->email', '$this->tel', '$this->adresse', '$this->destination', '$this->personnes', '$this->depart', '$this->retour')";
        $this->mysqli->query($requete);
    }
    function location(){
        header('location:/reservation');
    }
    
    function checkuser($email){
        $this->stmt = $this->mysqli->prepare("SELECT `email` FROM `reservation_form` WHERE `email`=?");
        $this->stmt->bind_param("s", $email);
        $this->stmt->execute();
        $user = $this->stmt->fetch();
        if($user){
            return true;
        }else{
            return false;
        }
        
    }
    
}
?>