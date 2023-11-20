<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Titulo de la pelicula</h1>
    <img src="" alt="Imagen de la pelicula">
    <p>Año de estreno</p>
    <p>Duracion de la pelicula</p>
    <div>
        <p>Sinopsis</p>
    </div>
    <p>Votos</p>
    <?php
        ini_set('display_errors', 1);
        ini_set('html_errors', 1);
        $idPelicula = $_GET['idPelicula'];
        $idCategoria = $_GET['idCategoria'];
        require("peliculasReglasNegocio.php");
        $peliculasBL = new PeliculasReglasNegocio();
        $datosPeliculas = $peliculasBL->obtener($categoria);
        
        foreach ($datosPeliculas as $pelicula)
        {
            echo "<div>";
            print($pelicula->getID());
            print($pelicula->getTitulo());
            echo "</div>";
        }
    ?>
</body>
</html>