
<?php
$userBDD='root';
$pass='';
$connexion = new PDO('mysql:host=localhost;dbname=cards_me', $userBDD, $pass);
$testConn = $connexion->prepare("SELECT * FROM user WHERE name = ?");
$testConn->execute([$_COOKIE['user']]);
$user=$testConn->fetch();


?>
<!DOCTYPE html>
<html>
<head>
    <title>Cards</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/account.css">
</head>
<body>
<h1>Your cards <?php echo ($_COOKIE['user']); ?></h1>

<div class="account">
  <div class="menu"class="btn-group-vertical">
    <a href="account.php"><button type="button" class="btn btn-primary">Informations</button></a>
    <a href="cards.php"><button type="button" class="btn btn-primary">Business Cards</button></a>
    <a href="log_out.php"><button type="button" class="btn btn-danger">Log Out</button></a>
  </div>

  <div class="all_cards">
    <?php 
    $testConn = $connexion->prepare("SELECT * FROM card WHERE id_user = ?");
    $testConn->execute([$user['id']]);
    $result = $testConn->fetchAll();
    foreach($result as $row){
      ?>
          <div style="width:20%" class="card">
          <div class="card-body">
            <h4 class="card-title"><?php echo($row['name'])?></h4>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo($row['company'])?></h6>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo($row['email'])?></h6>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo($row['telephone'])?></h6>
          </div>
        </div>
      <?php
    }
    ?>
      <div style="width:20%" class="card">
      <a href="add_card.php">
        <div class="card-body">
          <h4 class="card-title">+</h4>
          <h6 class="card-subtitle mb-2 text-muted">Add Card</h6>
        </div>
      </div>
    </a>
  </div>
</div>
</body>
</html>