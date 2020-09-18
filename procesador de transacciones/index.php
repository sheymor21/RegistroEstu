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
    require_once "navbar/navbar.php";
    require_once "logic/logica.php";
    require_once "logic/transacciones.php";
    require_once "IServicios/iFiles.php";
    require_once "IServicios/iServiciosBasicos.php";
    require_once "pages/Servicios/Files.php";
    require_once "pages/Servicios/CookieService.php";
    require_once "pages/Servicios/ServiciosT.php";
    $servicios = new Servicios('pages/data');
    $n = 0;
    $ListTransacciones = $servicios->obtenerList();
    
  ?>
  <body>
    <?php nav(); ?>
    <div class="container">
      <table class="table mt-5">
        <thead class="thead-dark">
          <tr>
          <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">N.Boletos</th>
            <th scope="col">Precio</th>
            <th scope="col">Fecha</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($ListTransacciones as $keys=>$values): 
                $n++;
            ?>
          <tr>
            <th scope="row"><?php echo $n; ?></th>
            <td><?php echo $values->nombre; ?></td>
            <td><?php echo $values->cantidad; ?></td>
            <td><?php echo $values->precio; ?></td>
            <td><?php echo $values->time; ?></td>
          </tr>
          <?php endforeach;?>
        </tbody>
      </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>