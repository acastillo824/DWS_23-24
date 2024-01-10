<!-- Crear la interfaz del registro del usiario []-->
<!-- Hacer que registre al usuario cuando creamos el usuario  -->

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <meta charset = "UTF-8">
</head>
<body>
    <form method = "POST" action = "">
        <label for = "user"> Usuario: </label>
        <input id="user" name = "user" type = "text"><br><br>
        <label for = "email"> E-Mail: </label>
        <input id="email" name = "email" type = "text"><br><br>
        <input type="checkbox" id="userPremium" name ="userPremium" value="True">
        <label for="userPremium"> Premium</label><br><br>
        <label for = "passwd"> Contraseña: </label>
        <input id = "passwd" name = "passwd" type = "password"><br><br>
        <input type = "submit">
    </form>
</body>
</html>