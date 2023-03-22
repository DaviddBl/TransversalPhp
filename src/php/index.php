<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../php/styles/index.css">
    <title>Tablas Vistas mysql</title>
</head>

<body>
    <h1>Tablas Vistas mysql</h1>
    <hr>
    <div>

        <h1>Tabla de eventos</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre del Evento</th>
                    <th>Nombre</th>
                    <th>Lugar</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // aqui invocamos la function con el metodo include(function.php)
                include './consultasVistas/q_vistaEventosPromotor.php';
                //bucle para almacenar los datos de la db en la variable row y mostrarlos 
                foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo $row['id_evento']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['nombre_promotor']; ?></td>
                        <td><?php echo $row['lugar']; ?></td>
                        <td><?php echo $row['descripcion']; ?></td>
                        <td><?php echo $row['fecha']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div>
        <h1>Roles usuarios</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Email</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>

                <!-- //bucle para almacenar los datos de la db en la variable row y mostrarlos -->
                <?php
                include './consultasVistas/q_VistaRoles.php';
                foreach ($rows as $row) : ?>
                    <tr>
                        <td><?php echo $row['id_usuario']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['apellido']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['rol']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>



</body>

</html>