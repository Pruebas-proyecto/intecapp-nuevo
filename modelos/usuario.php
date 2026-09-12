<?php
/**
 * Obtiene un único registro de la tabla `usuario` por id.
 *
 * IMPORTANTE: este archivo NO es la página de listado de usuarios (esa
 * vive en vistas/ADMIN/USUARIO.php, con su propio filtro y tabla). Este
 * script solo deja disponible la variable $row con los datos de UN
 * usuario/instructor, porque de él dependen 4 pantallas de edición:
 *   - vistas/ADMIN/Editar_USUARIO.php
 *   - vistas/ADMIN/Editar_USUARIO_pass.php
 *   - vistas/ADMIN/Editar_INSTRUCTOR.php
 *   - vistas/ADMIN/Editar_INSTRUCTOR_pass.php
 *
 * (Antes este archivo se sobrescribió por error con una copia completa
 * de la página de listado, lo que dejaba $row sin definir y rompía esas
 * 4 pantallas de edición con "Trying to access array offset on null").
 */
include 'db.php';

$id = $_GET['id'] ?? $_POST['id'] ?? null;
$row = null;

if ($id !== null) {
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $row = $stmt->get_result()->fetch_assoc();
    $stmt->close();
}