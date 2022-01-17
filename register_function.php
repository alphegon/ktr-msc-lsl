<?php
print_r($_POST);
$user='root';
$pass='';
$connexion = new PDO('mysql:host=localhost;dbname=cards_me', $user, $pass);
// Check connection

  $sql = $connexion->prepare("INSERT INTO user (name, company, email, phone, password)
  VALUES (?, ?, ?, ?, ?)");
  
  if ($sql->execute(array($_POST['postName'],$_POST['postCompany'],$_POST['postEmail'],$_POST['postPhone'],$_POST['postPassword'])) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" ;
  }
?>