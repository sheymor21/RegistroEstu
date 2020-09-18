<?php 
require_once '../navbar/navbar.php';
require_once 'logica.php';
require_once 'transacciones.php';
require_once '../IServicios/iServiciosBasicos.php';
require_once "../IServicios/iFiles.php";
require_once "../pages/Servicios/Files.php";
require_once "../pages/Servicios/ServiciosT.php";
require_once '../pages/Servicios/CookieService.php';


$servicio = new Servicios('pages/data');

$isId = isset($_GET['eliminarId']);

if($isId){
    $estudianteId = $_GET['eliminarId'];
    $servicio->eliminar($estudianteId);
}
header("Location: ../pages/eliminar.php");
exit();
?>