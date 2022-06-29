<?php

$user_db = 'root';
$pass_db = '';
try {
    $dbh = new PDO('mysql:host=localhost;dbname=db_geniuseg', $user_db, $pass_db);

} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}