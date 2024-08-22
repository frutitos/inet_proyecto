<?php
// Conexión a la base de datos
require '../lib/db.php';

// Obtener datos de la solicitud
$data = json_decode(file_get_contents('php://input'), true);

// Extraer el ID del usuario y los IDs de los productos
$usuario_id = $data['usuario_id'];
$producto_ids = $data['producto_ids'];

// Preparar la consulta para copiar los productos a la tabla historica
$stmt = $pdo->prepare("
    INSERT INTO historica (id, nombre, descripcion, precio, stock, categoria, usuario_id)
    SELECT id, nombre, descripcion, precio, stock, categoria, :usuario_id
    FROM producto
    WHERE id = :producto_id
");

foreach ($producto_ids as $producto_id) {
    $stmt->execute([
        ':usuario_id' => $usuario_id,
        ':producto_id' => $producto_id
    ]);
}

// Verificar si la inserción fue exitosa
if ($stmt->rowCount() > 0) {
    echo json_encode(["status" => "success", "message" => "Productos copiados a historica con éxito."]);
} else {
    echo json_encode(["status" => "error", "message" => "No se pudieron copiar los productos."]);
}
