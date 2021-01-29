<?php

$objetPdo = new PDO('mysql:host=localhost;dbname=amelia', 'root', '');

$pdoStat = $objetPdo->prepare('INSERT INTO form VALUES (:nom, :prenom, :ddn, :tel, :mail, :objet, :mess)');
$pdoStat->bindValue(':nom', $_POST['nom']);
$pdoStat->bindValue(':prenom', $_POST['prenom']);
$pdoStat->bindValue(':ddn', $_POST['ddn']);
$pdoStat->bindValue(':tel', $_POST['tel']);
$pdoStat->bindValue(':mail', $_POST['mail']);
$pdoStat->bindValue(':objet', $_POST['objet']);
$pdoStat->bindValue(':mess', $_POST['mess']);


$insertIsOk = $pdoStat->execute();


if($insertIsOk){
   echo 'its ok';
}
else{
   echo 'echec';
}

?>