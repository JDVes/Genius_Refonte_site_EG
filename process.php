<?php
$user_db = 'root';
$pass_db = '';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=db_geniuseg', $user_db, $pass_db);

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}


$prenom = $_POST['prenom'];
$nom = $_POST['nom'];
$genre = $_POST['username'];
$email = $_POST['password'];
$confirmation_email = $_POST['passwordconf'];
$numero = $_POST['email'];
$pays = $_POST['securityq'];
$niveau_etude = $_POST['qanswer'];
$thematique = $_POST['securityq'];
$choix_campuse = $_POST['qanswer'];

if(empty($prenom) || empty($nom) || empty($genre) || empty($email) || empty($passwordconf) || empty($email) || empty($securityq) || empty($qanswer))
{
    $req= $dbh -> prepare('INSERT INTO db_geniuseg (name, message_post, priorite, type) VALUES(?, ?, ?, ?)');
    $req -> execute([$nom, $message_post, $priorite, $type]);

        // header('location:contacts-table.php');

    echo "You did not fill out the required fields.";
}

//  Insertion de donnée


$sql = " INSERT INTO db_geniuseg (name, message_post, priorite, type)
               VALUES ('$name','$message',$priority,$type)";
$req= $dbh -> query($sql);

//  while($row = $req->fetch(PDO::FETCH_ASSOC)) : ;

if($req){
    echo "insertion réussie";
} else{
    echo "insertion échoué";
}


?>