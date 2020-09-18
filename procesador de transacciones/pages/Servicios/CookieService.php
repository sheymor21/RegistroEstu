<?php 
class CookiesService implements IServiciosBasicos{
    private $logic;
    private $cookieName;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->logic = new logic();
        $this->cookieName = "transacciones";
    }

    public function obtenerList()
    {
        $ListTransacciones = array();
        if(isset($_COOKIE[$this->cookieName])){
                
            $ListTransaccionesDecode = json_decode($_COOKIE[$this->cookieName],false);

            foreach( $ListTransaccionesDecode as $elementDecode){
                $elemet = new transacciones();
                $elemet->set($elementDecode);
                array_push($ListTransacciones,$elemet); 

            }
        }else{
            setcookie($this->cookieName,json_encode($ListTransacciones),$this->logic->GetcookieTime(),"/"); 
        }

        return $ListTransacciones;
    }

    public function GetById($id)
    {
        $ListTransacciones = $this->obtenerList();
        $estudiante = $this->logic->filtrado($ListTransacciones,'id',$id)[0];
        return $estudiante;
    }

    public function agregar($entidad)
    {
        $ListTransacciones = $this->obtenerList();
        $transaccionId = 1;
        if(!empty($ListTransacciones)){
            $ultima = $this->logic->ultimo($ListTransacciones);
            $transaccionId = $ultima->id+1;
        }
        $entidad->id = $transaccionId;
        array_push($ListTransacciones,$entidad);
        setcookie($this->cookieName,json_encode($ListTransacciones),$this->logic->GetcookieTime(),"/"); 
        
    }

    public function editar($id,$entidad)
    {
       
    }

    public function eliminar($id)
    {
        $ListTransacciones = $this->obtenerList();
        $elementIndex = $this->logic->index($ListTransacciones,'id',$id); 
        unset($ListTransacciones[$elementIndex]);

        $ListTransacciones = array_values($ListTransacciones);
        setcookie($this->cookieName,json_encode($ListTransacciones),$this->logic->GetcookieTime(),"/"); 
    }
}

?>