
<?php
if($_COOKIE["user"] == -1){
  header("Location: index.php" );
}

$user='root';
$pass='';
$connexion = new PDO('mysql:host=localhost;dbname=cards_me', $user, $pass);
$testConn = $connexion->prepare("SELECT * FROM user WHERE name = ?");
$testConn->execute([$_COOKIE['user']]);
$user=$testConn->fetch();


?>
<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/account.css">
</head>
<body>
<h1>Hello <?php echo ($_COOKIE['user']); ?></h1>

<div class="account">
<div class="menu"class="btn-group-vertical">
  <a href="account.php"><button type="button" class="btn btn-primary">Informations</button></a>
  <a href="cards.php"><button type="button" class="btn btn-primary">Business Cards</button></a>
  <a href="log_out.php"><button type="button" class="btn btn-danger">Log Out</button></a>
</div>

<form style="width:75%">
  <fieldset>
    <legend>Informations</legend>
    <div class="form-group row">
      <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php  echo($user["name"])?>">
      </div>
      <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php  echo($user["email"])?>">
      </div>
      <label for="staticEmail" class="col-sm-2 col-form-label">Company</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php echo($user["company"])?>">
      </div>
      <label for="staticEmail" class="col-sm-2 col-form-label">Phone</label>
      <div class="col-sm-10">
        <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="<?php  echo($user["phone"])?>">
      </div>
    </div>
</form>
</div>
</body>
</html>