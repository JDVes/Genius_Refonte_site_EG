<?php

//Connexion à la BDD

$user_db = 'root';
$pass_db = '';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=db_geniuseg', $user_db, $pass_db);





// Recuperation des données dans les variables declarée

$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$genre = $_POST['genre'];
$email = $_POST['email'];
$confirmation_email = $_POST['confirmez'];
$numero = $_POST['numero'];
$pays = $_POST['pays'];
$niveau_etude = $_POST['diplome'];
$thematique = $_POST['theme'];
$choix_campus = $_POST['filiere'];

// verification des données recuperér et des variables declarée



if(empty($prenom) || empty($nom) || empty($genre) || empty($email) || empty($confirmation_email) || empty($numero)|| empty($pays) || empty($niveau_etude ) || empty($thematique) || empty($choix_campus) 
    )  
     {

    echo "veuillez remplir tout les champs";

    } else{

    $req= $dbh -> prepare('INSERT INTO postulants (prenom, nom, genre, email, confirmation_email, telephone, pays, niveau_etude, thématique, campus) VALUES(?,?,?, ?,?,?,?,?,?,?)');
    $req -> execute([$prenom ,$nom, $genre, $email , $confirmation_email, $numero ,$pays, $niveau_etude, $thematique, $choix_campus ]);

        // header('location:contacts-table.php');

    echo "données inserer avec succes !";
}


} 
catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


?>