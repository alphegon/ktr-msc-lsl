<?php 
$cookie_value = -1;
setcookie("user", $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
    if($_COOKIE["user"] != -1){
        header("Location: account.php" );
    }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<h1>
    Welcome on Card'sMe !
</h1>
<?php
if(isset($_GET["exist"])){
    ?>
        <div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Oups !</strong> This user does-not exist !
        </div>
    <?php
}

if(isset($_GET["incorrect"])){
    ?>
        <div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Oups !</strong> User or password are incorrects !
        </div>
    <?php
}

?>
<form action="login_function.php" method="POST">
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="text" name="postName" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp"  class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" name="postPassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <div class="buttons_form_login">
        <a href="register.php"><button type="submit" class="btn btn-primary">Connexion</button></a>
        <p class="lead">Or</p>
        <a href="register.php" class="btn btn-secondary">Register</a>
    </div>
  </fieldset>
</form>
</body>
</html>