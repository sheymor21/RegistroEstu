<?php
class Json implements IFiles{

    public $directory;
    public $fileName;

public function __construct($directory,$fileName)
{
    $this->directory = $directory;
    $this->fileName = $fileName;
}

    function Creardirectorio()
    {
        if(!file_exists($this->directory)){
            mkdir($this->directory,0777,true);
        }
    }
    function guardar($value)
    {
        $this->Creardirectorio($this->directory);
        $path = $this->directory."/".$this->fileName.".json";
        $serializeData = json_encode($value);

        $file = fopen($path,'w+');
        fwrite($file,$serializeData); 
        fclose($file);
       
        
    }

    function leer()
    {
       $this->Creardirectorio($this->directory);
       $path = $this->directory."/".$this->fileName.".json";
       if(file_exists($path)){
          $file = fopen($path,'r');
          $content = fread($file,filesize($path));
          fclose($file);
          return json_decode($content);
       }else{
           return false;
       }
    }
}

?>