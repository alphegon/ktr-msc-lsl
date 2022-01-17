<?php
setcookie('user', time() - 3600);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Déconnexion..</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/account.css">
</head>
<body>
<h1 style='text-align:center; margin-top : 15%;'>Déconnexion en cours..</h1>
<div style="display:flex; justify-content:center; align-items: center;">
    <img src="img/giphy.gif"width="480" height="480">
</div>
</body>
</html>
<script>
         setTimeout(function(){
            window.location.href = 'index.php';
         }, 3000);
</script>