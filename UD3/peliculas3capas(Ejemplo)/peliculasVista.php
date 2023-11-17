<!doctype html>
<html>
<head>

</head>

<body>
    <h1> Listado de peliculas </h1>
    <?php
        $categoria = $_POST['categoria'];
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