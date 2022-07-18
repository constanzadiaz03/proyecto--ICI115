<?php
$conexion = mysqli_connect('localhost', 'root', '', 'kit_mascotas');

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Proyecto del gato</title>
    <link rel="stylesheet" href="estilo_inicio.css">

</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook">
        </div>
    </div>
    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/1.png" alt="logo">
                </div>
                <div class="enlaces" id="enlaces">
                    <ul>
                        <il class="menu">
                            <a href="index_inicio.php" class="btn-header">Inicio</a>
                            <a href="index_temperatura.php" class="btn-header">Temperatura</a>
                            <a href="index_eventos.php" class="btn-header">Eventos destacados</a>
                            <a href="index_mascotas.php" class="btn-header">Mascotas</a>
                            <a href="index_registro.php" class="btn-header">Registrar Mascotas</a>
                        </il>
                    </ul>
                </div>
                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>KIT "gato protegido"</h1>
            <h2>Eventos destacados</hh2>
        </div>
    </header>
 <main>
        <div class="table">
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID medición</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Hora</th>
                        <th scope="col">Distancia</th>
                        <th scope="col">Evento</th>
                    </tr>
                </thead>
                <?php
                $sql = "SELECT * FROM distancias";
                $result = mysqli_query($conexion, $sql);

                while ($mostrar = mysqli_fetch_array($result)) {

                ?>

                    <tr>
                        <td><?php echo $mostrar['id_medicion'] ?></td>
                        <td><?php echo $mostrar['fecha'] ?></td>
                        <td><?php echo $mostrar['hora'] ?></td>
                        <td><?php echo $mostrar['distancia'] ?></td>
                        <td><?php echo $mostrar['evento'] ?></td>
                    </tr>

                <?php
                }
                ?>

            </table>
        </div>
    </main>
    <footer id="contacto">
        <div class="footer contenedor">
            <div>
                <img src="img/1.png" alt="" width="200px" height="200px">
            </div>
            <p>Siempre cuidando de ti y de tu familia.</p>
        </div>

    </footer>
    <script src="jquery_1.js"></script>
    <script src="main_1.js"></script>
    <script src="filtro_1.js"></script>
</body>

</html>