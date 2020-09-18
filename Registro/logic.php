<?php

function cont($list){
$count = count($list);
$element = $list[$count - 1];
    
return $element;
    
}

 function seleccion($select){
        $id = 0;
        if(is_numeric($select)){
            $id = $select - 1;    
        }else{
            $id = -1;
        }
    return $id;
 }

 function filtrado($list,$propiedad,$value){
    $filtro = [];
    foreach ($list as $item) {
        if($item[$propiedad] == $value){
            array_push($filtro,$item);
        }
    }
    return $filtro;
 }



  function mostrarChek($status){
    if($status != 'activo'){

        echo <<<EOF
        <div class="form-check my-3">
    <input class="form-check-input" type="checkbox" value="inactivo" id="defaultCheck1" name="check">
    <label class="form-check-label" for="defaultCheck1">Estatus</label>
  </div>
EOF;
    }else{
        echo <<<EOF
        <div class="form-check my-3">
    <input class="form-check-input" type="checkbox" value="activo" id="defaultCheck2" checked name="check1">
    <label class="form-check-label" for="defaultCheck1">Estatus</label>
  </div>
EOF;
    }
     
  }
  

  
?>
<script>
    function focuss(){
        const input = document.getElementById('nombre');
        input.focus();
    }
    
</script>
