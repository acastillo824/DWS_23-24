<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       isset($_POST['nombre_campo_1']) ? print $_POST['nombre_campo_1'] : "";
       print "<br>" . $_POST['nombre_campo_2'];
    ?>
</body>
</html>