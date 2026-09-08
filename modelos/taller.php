<?php
<<<<<<< HEAD
//session_start();
include('db.php');

if(isset($_REQUEST['id'])){
    $id =$_REQUEST['id'];
} else {
    $id =$_POST['id'];
}

$sql = "SELECT * FROM talleres WHERE id = $id";
$query = $conn->query($sql);
$row = $query->fetch_assoc();

=======
include('db.php');
if (session_status() === PHP_SESSION_NONE) session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/intecapp/controladores/session.php');

if(isset($_REQUEST['id'])){
    $id = (int) $_REQUEST['id'];
} else {
    $id = (int) $_POST['id'];
}

if (!in_array($user['cargo'], ['Admin', 'Instructor'], true)) {
    http_response_code(403);
    echo 'Acceso denegado';
    exit;
}

$sql = "SELECT * FROM talleres WHERE id = $id";
if ($user['cargo'] === 'Instructor') {
    $sql .= " AND id_instructor = " . (int) $user['id'];
}
$query = $conn->query($sql);
$row = $query->fetch_assoc();

if (!$row) {
    http_response_code(404);
    echo 'Taller no encontrado';
    exit;
}

>>>>>>> otro-repo/main
?>
