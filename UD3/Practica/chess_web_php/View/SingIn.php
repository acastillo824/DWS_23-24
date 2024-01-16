<?php
    ini_set('display_errors', 1);
    ini_set('html_errors', 1);
    require ("../Business/playerBusiness.php");
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
            $userBL = new PlayersBusiness();
            $userBL->insertPlayers($_POST['name'],$_POST['email'],$_POST['passwd'], $_POST['status']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for = "name"> Usuario: </label>
        <input id="name" name = "name" type = "text">
        <label for = "email"> Correo Electronico: </label>
        <input id="email" name = "email" type = "text">
        <label for = "passwd"> Contraseña: </label>
        <input id = "passwd" name = "passwd" type = "password">
        <input type="radio" id="premium" name="status" value="premium">
        <label for="html">Premium</label>
        <input type="radio" id="normal" name="status" value="normal">
        <label for="html">Normal</label>
        <input type = "submit">
    </form>
    <a href="../index.php">Volver</a>
</body>
</html>