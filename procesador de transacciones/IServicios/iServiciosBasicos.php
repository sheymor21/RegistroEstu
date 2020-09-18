<?php 
interface IServiciosBasicos{
    function agregar($transaccion);
    function eliminar($id);
    function editar($id,$entidad);
    function obtenerList();
}

?>