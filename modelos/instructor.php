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
include($_SERVER['DOCUMENT_ROOT'] . '/intecapp/controladores/session.php');

if(isset($_REQUEST['id'])){
    $id = (int) $_REQUEST['id'];
} else {
    $id = (int) $_POST['id'];
}

// Sólo Admin o el propio instructor (si corresponde) pueden ver los datos.
// Si en el sistema los instructores tienen un id diferente al de usuario, ajustar la condición.
if ($user['cargo'] !== 'Admin' && $id !== (int) $id_sesion) {
    http_response_code(403);
    echo 'Acceso denegado';
    exit;
>>>>>>> otro-repo/main
}

$sql = "SELECT * FROM instructor WHERE id = $id";
$query = $conn->query($sql);
$row = $query->fetch_assoc();

?>