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
<form>
  <fieldset>
    <div class="form-group">
      <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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