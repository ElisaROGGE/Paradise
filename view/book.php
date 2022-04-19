<?php 
$message = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
        include("model/book_form.php");
        require("controller/error_form.php");
        if ($verify){
        $reserv = new Reservation();
        $reserv->query();
        }
        $message = empty($Err)? "<span class='bravo'>Merci pour votre réservation !</span>":"<span class='error'>$Err</span>";
    }  
?>

<?php
include('./view/header.php');
?>
<div class="heading" style="background:url(./public/images/header-bg-3.png) no-repeat">
    <h1>Réservation</h1>
</div>

<div class="warning"><?php echo $message ?></div>
<section class="booking">
    <h1 class="heading-title">Réservez votre voyage !</h1>
    <form action="" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>Nom</span>
                <input type="text" placeholder="Votre nom" name="nom" require>
            </div>
            <div class="inputBox">
                <span>Email</span>
                <input type="text" placeholder="Votre email" name="email" require>
            </div>
            <div class="inputBox">
                <span>Numéro de téléphone</span>
                <input type="number" placeholder="Votre numéro de téléphone" name="tel" require>
            </div>
            <div class="inputBox">
                <span>Adresse</span>
                <input type="text" placeholder="Votre adresse" name="adresse" require>
            </div>
            <div class="inputBox">
                <span>Destination</span>
                <input type="text" placeholder="Votre destination" name="destination" require>
            </div>
            <div class="inputBox">
                <span>Nombre de voyageurs</span>
                <input type="number" placeholder="Combien de voyageurs ?" name="personnes" require>
            </div>
            <div class="inputBox">
                <span>Date de départ</span>
                <input type="date" name="depart" require>
            </div>
            <div class="inputBox">
                <span>Date de retour</span>
                <input type="date" name="retour" require>
            </div>
        </div>
        <input type="submit" value="Réserver" class="btn" name="envoyer">
    </form>
</section>


<?php
include('./view/footer.php');
?>


</body>
</html>