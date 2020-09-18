<?php
class logic{

    public function ultimo($list){
        $count = count($list);
        $element = $list[$count - 1];
            
        return $element;
            
        }
    public function convertId($id){
        if(is_numeric($id)){
            $newId = $id -1;
            return $newId;
        }else{
            return false;
        }

    }

    public function index($list,$propierti,$value){
        $index = 0;
        foreach ($list as $key => $item) {
            if($item->$propierti == $value){
                $index = $key;
            }
        }
        return $index;
     }

     public function GetcookieTime(){
        return time() + 60*60*24*30;
    }

    public  function seleccion($select){
        $id = 0;
        if(is_numeric($select)){
            $id = $select - 1;    
        }else{
            $id = -1;
        }
    return $id;
 }

 public function filtrado($list,$propiedad,$value){
    $filtro = [];
    foreach ($list as $item) {
        if($item->$propiedad == $value){
            array_push($filtro,$item);
        }
    }
    return $filtro;
 }

 public function money($cantidad){
     if(is_numeric($cantidad)){
        $precio = $cantidad*300;
        return $precio;
     }else{
         return false;
     }
    
 }

}


?>
<script>
    function focuss(){
        const input = document.getElementById('nombre');
        input.focus();
    }
    
</script>