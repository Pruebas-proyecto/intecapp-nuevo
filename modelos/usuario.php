<?php
//session_start();
include('db.php');

<<<<<<< HEAD
if(isset($_REQUEST['id'])){
    $id =$_REQUEST['id'];
} else {
    $id =$_POST['id'];
=======
if (session_status() === PHP_SESSION_NONE) session_start();
// Usar el guardado de sesión central para obtener $user y $id_sesion
include($_SERVER['DOCUMENT_ROOT'] . '/intecapp/controladores/session.php');

if(isset($_REQUEST['id'])){
    $id = (int) $_REQUEST['id'];
} else {
    $id = (int) $_POST['id'];
}

// Sólo el propio usuario o un Admin pueden ver la información del usuario
if ($user['cargo'] !== 'Admin' && $id !== (int) $id_sesion) {
    http_response_code(403);
    echo 'Acceso denegado';
    exit;
>>>>>>> otro-repo/main
}

$sql = "SELECT * FROM usuario WHERE id = $id";
$query = $conn->query($sql);
$row = $query->fetch_assoc();

?>