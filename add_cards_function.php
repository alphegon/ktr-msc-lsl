<?php
$user='root';
$pass='';
$connexion = new PDO('mysql:host=localhost;dbname=cards_me', $user, $pass);
  
print_r($_POST);
  $testConn = $connexion->prepare("SELECT * FROM card WHERE name = ? and id_user = ?");
  $testConn->execute([$_POST['postName'], $_GET['user']]);
  $count = $testConn -> rowCount();
  echo($count);
if ($count>0)
    {
        header("Location: add_card.php?exist" );
    }
else{
    $sql = $connexion->prepare("INSERT INTO card (name, company, email, telephone, id_user) VALUES (?, ?, ?, ?, ?)");
    if ($sql->execute(array($_POST['postName'],$_POST['postCompany'],$_POST['postEmail'],$_POST['postPhone'], $_GET['user'])) === TRUE) {
        echo "New record created successfully";
        header("Location: cards.php" );
    } else {
        echo "Error: " . $sql . "<br>" ;
    }
}

?>