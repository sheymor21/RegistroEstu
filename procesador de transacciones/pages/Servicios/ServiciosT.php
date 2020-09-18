<?php
class Servicios implements IServiciosBasicos{

    private $logic;
    public $directory;
    public $fileName;
    public $fileS;
    
    public function __construct($directory = 'data')
    {
        $this->logic = new logic();
        $this->directory = $directory;
        $this->fileName = 'Transacciones';
       $this->fileS = new Json($this->directory,$this->fileName);
       
    }
    function agregar($transaccion)
    {
        $ListTransacciones = $this->obtenerList();
        $transaccionId = 1;

        if(!empty($ListTransacciones)){
           $ultima = $this->logic->ultimo($ListTransacciones);
           $transaccionId = $ultima->id+1;
        }
        $transaccion->id = $transaccionId;
        array_push($ListTransacciones,$transaccion);
        $this->fileS->guardar($ListTransacciones);
    }

    function eliminar($id)
    {
        $ListTransacciones = $this->obtenerList();
        $elementIndex = $this->logic->index($ListTransacciones,'id',$id);
        unset($ListTransacciones[$elementIndex]);
        $ListTransacciones = array_values($ListTransacciones);
        $this->fileS->guardar($ListTransacciones);
    }

    function editar($id,$entidad)
    {
        
    }

    function obtenerList()
    {
        $ListTransaccionesDecode = $this->fileS->leer();
        $ListTransacciones = array();
        if($ListTransaccionesDecode == false){
            $this->fileS->guardar($ListTransacciones );
        }else{
            
            foreach($ListTransaccionesDecode as $elementDecode){
                $element = new transacciones();
                $element->set($elementDecode);
                array_push($ListTransacciones,$element);
            }
        }
        return $ListTransacciones;

    }
}

?>