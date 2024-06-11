<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Documento sin título</title>
</head>
<body>
    <?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "emdevapps123";
    $database = "noticias";

    // Crear una nueva conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $database);

    // Verificar conexión
    if ($conn->connect_error) {
        die("Conexión fallida: " . $conn->connect_error);
    }

    // Consulta a la base de datos
    $sql = "SELECT * FROM usuario";
    $result = $conn->query($sql);

    // Verificar si hay resultados
    if ($result->num_rows > 0) {
        // Recorrer los resultados y almacenarlos en un array asociativo
        while($row = $result->fetch_assoc()) {
            // Utilizar las claves de la tabla directamente
            $datos = $row;

            // Mostrar los datos
            foreach ($datos as $clave => $valor) {
                echo "Para la clave $clave, le corresponde el valor: $valor<br>";
            }
            echo "<br>";
        }
    } else {
        echo "No se encontraron registros.";
    }

    // Cerrar la conexión
    $conn->close();
    ?>
</body>
</html>
