
<?php
if(isset($_POST['valider'])){
 extract($_POST);
 if($genre=="M"){
     $sexe="Monsieur";
 }else{
    $sexe="Madame";
 }
 
 
 mail("$email","Access Code School"," Salut $sexe $prenom $nom , Merci de votre visite","from:NiangProgrammeur@gmail.com");

}
   

    require ('formulaire/formulaire.php');
    ?>