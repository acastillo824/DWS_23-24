<?php
    ini_set('display_errors', 1);
    ini_set('html_errors', 1);
    require ("../Business/playerBusiness.php");
    if ($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $usuarioBL = new PlayersBusiness();
        $perfil =  $usuarioBL->verifyPlayer($_POST['name'],$_POST['passwd']);
        
        if ($perfil != 'NOT_FOUND')
        {
            session_start(); //inicia o reinicia una sesión
            $_SESSION['namePlayer'] = $_POST['name'];
            header("Location: ../index.php");
        }
        else
        {
            $error = true;
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset = "UTF-8">
</head>
<body>
    <form method = "POST" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for = "name"> Usuario: </label>
        <input id="name" name = "name" type = "text">
        <label for = "passwd"> Contraseña: </label>
        <input id = "passwd" name = "passwd" type = "password">
        <input type = "submit">
    </form>
    <?php
        if (isset($error))
        {
            print("<div> No tienes acceso </div>");
        }
    ?>
</body>
</html>