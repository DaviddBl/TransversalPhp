<!-- //conexion a db y funciones declaradas con metodos para invocar en otros archivos php -->

<?php
$servername = "localhost"; // dirección del servidor
$username = "root"; // usuario de la base de datos
$password = ""; // contraseña de la base de datos
$dbname = "Eventos_Transversalv1"; // nombre de la base de datos

// Crea una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error al conectarse a la base de datos: " . $conn->connect_error);
}


// Crea la consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM vista_recintor_roles";

// Ejecuta la consulta y guarda los resultados en una variable
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Crea una matriz para guardar los resultados
    $rows = array();
    // Recorre las filas de resultados y guarda los datos en la matriz
    while ($row = $result->fetch_assoc()) {
        $rows[] = $row;
    }
} else {
    echo "No se encontraron resultados.";
}

// Cierra la conexión a la base de datos
$conn->close();
?>