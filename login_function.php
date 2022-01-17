<?php
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
    $testConn = $connexion->prepare("SELECT * FROM user WHERE name = ? and password = ?");
  $testConn->execute([$_POST['postName'], $_POST['postPassword']]);
  $count = $testConn -> rowCount();
  echo($count);
if ($count>0){
        setcookie('user', $_POST['postName'] );
        header("Location: account.php" );
    } else {
        echo "Error: " . $passWord . "<br>" ;
    }
}

?>