
<?php
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
    <title>Add Cards</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/account.css">
</head>
<body>
<h1>Add Cards to your account</h1>

<div class="account">
  <div class="menu"class="btn-group-vertical">
    <a href="account.php"><button type="button" class="btn btn-primary">Informations</button></a>
    <a href="cards.php"><button type="button" class="btn btn-primary">Business Cards</button></a>
    <a href="log_out.php"><button type="button" class="btn btn-danger">Log Out</button></a>
  </div>

  <div class="all_cards">
  <?php
        if(isset($_GET["exist"])){
            ?>
                <div class="alert alert-dismissible alert-danger">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <strong>Oups !</strong> This card already exist !
                </div>
            <?php
        }
        ?>

  <form method="POST" action="add_cards_function.php?user=<?php echo($user[0])?>">
  <fieldset>
    <div class="form-group">
        <label for="inputName" class="form-label mt-4">Name</label><span class="obligatory"> *</span>
        <input type="text" required class="form-control" name="postName" id="inputName" aria-describedby="nameHelp" placeholder="Enter your name">
    </div>
    <div class="form-group">
      <label for="inputCompany" class="form-label mt-4">Company name</label>
      <input type="text" class="form-control" name="postCompany" id="inputCompany" aria-describedby="companyHelp" placeholder="Enter company">
    </div>
    <div class="form-group">
      <label for="inputEmail" class="form-label mt-4">Email address</label>
      <input type="email" class="form-control" name="postEmail" id="inputEmail" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
    
      <label for="phoneInput" class="form-label mt-4">Phone number</label>
      <div style="display:flex;">
      <span class="input-group-text">+33</span>
      <input type="tel" class="form-control" name="postPhone" id="inputPhone" aria-describedby="phoneHelp" placeholder="Enter phone number">
    </div>
</div>
    <div class="buttons_form_login">
        <button type="submit" class="btn btn-secondary">Add Card</button>
    </div>
  </fieldset>
</form>
  </div>
</div>
</body>
</html>