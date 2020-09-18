<?php
class transacciones{
    public $id;
     public $nombre;
     public $time;
     public $precio;
     public $cantidad;


     public function initialize($id,$nombre,$time,$precio,$cantidad){
        $this->id = $id;
        $this->nombre = $nombre;
         $this->time = $time;
         $this->precio = $precio;
         $this->cantidad = $cantidad;
     }

     public function set($data){
        foreach($data as $key => $value) $this->{$key} = $value;
    }

}
?>