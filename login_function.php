<?php
$cookie_value = null;
setcookie("user", $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
$user='root';
$pass='';
$connexion = new PDO('mysql:host=localhost;dbname=cards_me', $user, $pass);
  
print_r($_POST);
  $testConn = $connexion->prepare("SELECT name FROM user WHERE name = ?");
  $testConn->execute([$_POST['postName']]);
  $count = $testConn -> rowCount();
  echo($count);
if ($count<=0)
    {
        echo 'Username and Password Found'; 
        header("Location: index.php?exist" );
    }
else{
    $sql = $connexion->prepare("INSERT INTO user (name, company, email, phone, password) VALUES (?, ?, ?, ?, ?)");
    if ($sql->execute(array($_POST['postName'],$_POST['postCompany'],$_POST['postEmail'],$_POST['postPhone'],$_POST['postPassword'])) === TRUE) {
        echo "New record created successfully";
        setcookie('user', $_POST['postName'] );
        header("Location: account.php" );
    } else {
        echo "Error: " . $sql . "<br>" ;
    }
}

?>