<!doctype html>
<html lang="en">
  <head>
    <title>P.T</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <?php
    require_once "../navbar/navbar.php";
    require_once "../logic/logica.php";
    require_once "../logic/transacciones.php";
    require_once "../IServicios/iFiles.php";
    require_once "../IServicios/iServiciosBasicos.php";
    require_once "Servicios/CookieService.php";
    require_once "Servicios/ServiciosT.php";
    require_once "Servicios/Files.php";
    
    $servicios = new Servicios();
    $newTransaccion = new transacciones();
    $time = new DateTime();
    $realTime = $time->format('d-m-y');
    $logic = new logic();


    if(isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['cantidad'])){
        $cantidad = $_POST['cantidad'];
        $precio = $logic->money($cantidad);
        if(!$precio){
          $precio = 0;
          $cantidad = 'Ninguna cantidad';
        }
        $fullname = $_POST['nombre']." ".$_POST['apellido'];
        $newTransaccion->initialize(0,$fullname,$realTime,$precio,$cantidad);
        $servicios->agregar($newTransaccion);
        header('Location: ../index.php');
       exit();
    }

  ?>
  <body>
    <?php nav(true,true,true); ?>
    <div class="container">
    <form action="agregar.php" method="POST">
    <div class="form-group pt-5">
    <div class="form-row">
    <div class="col">
    <label for="validationTooltip01" class="font-weight-bold " required>Nombre</label>
      <input type="text" class="form-control" placeholder="" name="nombre" id="nombre" tabindex="1">
      <?php echo "  <script>focuss();</script>"; ?>
    </div>
    <div class="col">
    <label for="validationTooltip01" class="font-weight-bold">Apellido</label>
      <input type="text" class="form-control" placeholder="" name="apellido" tabindex="2">
    </div>
  </div>
    </div>
    <label for="validationTooltip01" class="font-weight-bold " required>Cantidad de boletos</label>
      <input type="text" class="form-control" placeholder="" name="cantidad" id="cantidad" tabindex="3">
      <button type="submit" class="btn btn-success mt-2">Registrar</button>
    </form>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>