<?php 
function nav($ispage = false ,$h = false , $age = false,$edi = false,$eli = false){
  $direccion = ($ispage) ? '../' : '';
  $disableAge = ($age)?'disabled':'';
  $disableEdi = ($edi)?'disabled':'';
  $disableEli = ($eli)?'disabled':'';
  $home = ($h)?'../index.php':'';

    $navbar = <<<EOF
    <div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="{$home}">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link {$disableAge}" href="{$direccion}pages/agregar.php">Agregar</a>
      <a class="nav-item nav-link {$disableEdi}" href="{$direccion}pages/SelectEditar.php">Editar</a>
      <a class="nav-item nav-link {$disableEli}" href="{$direccion}pages/eliminar.php">Eliminar</a>
    </div>
  </div>
</nav>
</div>
EOF;

echo $navbar;
    
}


?>

