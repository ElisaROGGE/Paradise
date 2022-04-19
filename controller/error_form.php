<?php 
// Affichages d'erreur sur le formulaire
$nom = "";
$email = "";
$tel = "";
$adresse = "";
$destination = "";
$personnes = "";
$depart = "";
$retour = "";
$verify =false;
$Err ='';
// "/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{3,30}$/";
if($_SERVER["REQUEST_METHOD"] == "POST"){
        $res = new Reservation();
// Vérification du nom
    if(empty($_POST["nom"])){
        $Err = "Veuillez saisir un nom.";
    }else{
        $nom = secur($_POST["nom"]);
    }
// Vérification de l'email
    if(empty($_POST["email"])){
        $Err = "Veuillez saisir une adresse mail.";
    }else{
        $email = secur($_POST["email"]);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $Err = "Veuillez saisir une adresse mail valide.";
        };
        if($res->checkuser($email)){
             $Err ="Vous ne pouvez pas réserver à nouveau.";
        }
    }
// Vérification du numéro de téléphone
    if(empty($_POST["tel"])){
        $Err = "Veuillez saisir un numéro de téléphone.";
    }else{
        $tel = ($_POST["tel"]);
        if(!preg_match("/^0[1-68]([-. ]?[0-9]{2}){4}$/", $tel)){
            $Err = "Veuillez saisir un numéro de téléphone valide.";
        }
    }
    if(empty($_POST["adresse"])){
        $Err = "Veuillez saisir une adresse.";
    }else{
        $adresse = ($_POST["adresse"]);
    }

    if(empty($_POST["personnes"])){
        $Err = "Veuillez inscrire le nombre de voyageurs.";
    }else{
        $personnes = ($_POST["personnes"]);
        if($personnes > 10){
            $Err = "Vous ne pouvez pas choisir plus de 10 voyageurs.";
        }elseif($personnes < 1){
            $Err = "Vous devez inscrire au moins un voyageur";
        }
    }

    if(empty($_POST["depart"])){
        $Err = "Veuillez saisir une date de départ";
    }else{
        $depart = new DateTime($_POST['depart']);
        $now = new DateTime("today");
        $now->format('w');
        if($depart < $now) {
        $Err = 'Vous avez saisi une date antérieure à aujourd\'hui.';
        }
    }

    if(empty($_POST["retour"])){
        $Err = "Veuillez saisir une date d'arrivée'";
    }else{
        $retour = new DateTime($_POST['retour']);
        $now = new DateTime();  
        if($retour < $now) {
        $Err = 'Vous avez saisi une date antérieure à aujourdhui.';
        }
    }
    

    if($Err == ''){ 
        $verify = true;
    }
}

function secur($safe){
   $safe = trim($safe);
   $safe = stripcslashes($safe);
   $safe = htmlspecialchars($safe);
   return $safe; 
}
?>