<?php

//Connexion à la BDD

$user_db = 'root';
$pass_db = '';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=db_geniuseg', $user_db, $pass_db);


// Recuperation des données dans les variables declarée

$news_letters= $_POST['email'];

echo $news_letters;
// $nom = $_POST['nom'];
// $genre = $_POST['genre'];
// $email = $_POST['email'];
// $confirmation_email = $_POST['confirmez'];
// $numero = $_POST['numero'];
// $pays = $_POST['pays'];
// $niveau_etude = $_POST['diplome'];
// $thematique = $_POST['theme'];
// $choix_campus = $_POST['filiere'];

// verification des données recuperér et des variables declarée




// // if(empty($prenom) || empty($nom) || empty($genre) || empty($email) || empty($confirmation_email) || empty($numero)|| empty($pays) || empty($niveau_etude ) || empty($thematique) || empty($choix_campus) 
//        if(empty($news_letters) )  
//      {

//     echo "Veuillez saisir votre E-mail";

//     } else{

//     $req= $dbh -> prepare('INSERT INTO news_letters (email) VALUES(?)');
//     $req -> execute($news_letters);

//         // header('location:contacts-table.php');

//     echo "Recevez nos dernières actualités chaque jour !"; 
// }


// } 
// catch (PDOException $e) {
//     print "Erreur !: " . $e->getMessage() . "<br/>";
//     die();
}


?>