<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        ini_set('display_errors', 1);
        ini_set('html_errors', 1);
        $idPelicula = $_GET['idPelicula'];
        require("peliculasReglasNegocio.php");
        $peliculasBL = new PeliculasReglasNegocio();
        $datosPeliculas = $peliculasBL->obtenerDatos($idPelicula);
        
        foreach ($datosPeliculas as $pelicula)
        {
            echo "<div>";
            print("<h1>" . $pelicula->getTitulo() . "</h1><br>");
            print("<h3>Imagen:</h3>" .$pelicula->getImagen() . "<br>");
            print("<h3>Año de estreno:</h3>" .$pelicula->getAño() . "<br>");
            print("<h3>Duracin(min):</h3>" .$pelicula->getDuracion() . "<br>");
            print("<h3>Sinopsis:</h3>" . $pelicula->getSinopsis() . "<br>");
            print("<h3>Votos:</h3>" .$pelicula->getVotos() . "<br>");

            echo "</div>";
        }
    ?>
</body>
</html>