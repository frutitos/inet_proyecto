<?php
$host = '127.0.0.1';
    // Dirección del servidor de la base de datos. '127.0.0.1' es la dirección IP local (localhost).

$db = 'proyecto_inet';
    // Nombre de la base de datos a la que se desea conectar.

$user = 'root';
    // Nombre de usuario para acceder a la base de datos. En este caso, 'root' es el usuario predeterminado en muchas instalaciones de MySQL.

$pass = '';
    // Contraseña para el usuario de la base de datos. En este caso, no se ha establecido una contraseña (vacío).

$charset = 'utf8mb4';
    // Conjunto de caracteres para la conexión. 'utf8mb4' es una codificación de caracteres que soporta emojis y caracteres de varios idiomas.

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    // Data Source Name (DSN) para especificar los detalles de la conexión. Aquí se indica el tipo de base de datos (mysql), el host, el nombre de la base de datos y el conjunto de caracteres.

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    // Establece el modo de error de PDO para lanzar excepciones en caso de error en lugar de silenciosamente fallar.

    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    // Configura el modo de recuperación de datos predeterminado a un array asociativo, donde las columnas se devuelven como un array con nombres de columnas como claves.

    PDO::ATTR_EMULATE_PREPARES   => false,
    // Desactiva la emulación de declaraciones preparadas. Esto permite usar las características nativas de los prepared statements de MySQL, mejorando la seguridad y el rendimiento.

];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
    // Intenta crear una nueva instancia de PDO usando el DSN, el usuario, la contraseña y las opciones especificadas.

} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
    // Captura cualquier excepción lanzada durante la conexión y vuelve a lanzar una excepción con el mensaje de error y el código de error.
}
?>
