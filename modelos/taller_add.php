<?php
<<<<<<< HEAD
//session_start();
include('db.php');
=======
include('db.php');
if (session_status() === PHP_SESSION_NONE) session_start();
include($_SERVER['DOCUMENT_ROOT'] . '/intecapp/controladores/session.php');

$checkCol = $conn->query("SHOW COLUMNS FROM talleres LIKE 'id_instructor'");
if ($checkCol && $checkCol->num_rows === 0) {
    $conn->query("ALTER TABLE talleres ADD COLUMN id_instructor INT NULL AFTER anio");
}
>>>>>>> otro-repo/main

$anio = $_POST["anio"];
$nombre_taller = $_POST['nombre_taller'];
$participantes = $_POST['participantes'];
$condicion = $_POST['condicion'];
<<<<<<< HEAD
$estado = 'Disponible'; // Estado automático - siempre inicia disponible


mysqli_query($conn,"INSERT INTO talleres (anio, nombre_taller, participantes, condicion, estado) 
    VALUES('$anio','$nombre_taller','$participantes','$condicion','$estado')")or die(mysqli_error($con));
    		
echo "<script>document.location='../vistas/ADMIN/TALLERES.php'</script>";
=======
$id_instructor = isset($_POST['nom_instructor']) ? (int) $_POST['nom_instructor'] : 0;
if ($user['cargo'] === 'Instructor') {
    $id_instructor = (int) $user['id'];
}
$estado = 'Disponible';

$instructorValue = $id_instructor > 0 ? "$id_instructor" : "NULL";

mysqli_query($conn, "INSERT INTO talleres (anio, nombre_taller, id_instructor, participantes, condicion, estado) 
    VALUES('$anio', '$nombre_taller', $instructorValue, '$participantes', '$condicion', '$estado')") or die(mysqli_error($conn));

 echo "<script>document.location='../vistas/ADMIN/TALLERES.php'</script>";
>>>>>>> otro-repo/main

?>
