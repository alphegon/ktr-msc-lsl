
<?php 
    if($_COOKIE["user"] != -1){
        header("Location: account.php" );
    }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<a href="index.php" type="button" class="btn btn-secondary">Retour</a>
<h1>
    New on Card's Me ? Join us !
</h1>
<?php
if(isset($_GET["exist"])){
    ?>
        <div class="alert alert-dismissible alert-danger">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Oups !</strong> This user already exist !
        </div>
    <?php
}
?>
<form method="POST" action="register_function.php">
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

    <div class="form-group">
      <label for="inputPassword" class="form-label mt-4">Password</label><span class="obligatory"> *</span>
      <input type="password" required class="form-control" name="postPassword" id="inputPassword" placeholder="Password">
    </div>
    <div class="buttons_form_login">
        <button type="submit" class="btn btn-secondary">Register</button>
    </div>
  </fieldset>
</form>
</body>
</html>
