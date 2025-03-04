<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>registro de Proveedores</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
  <div class = "container">
    <div class="jumbotron">
      <h1 class="display-4">Catálogo de Proveedores</h1>
    </div>
    <table class="table table-striped table-responsive">
      <thead>
        <tr>
          <th>nombre</th>
          <th>cedula_identidad</th>
          <th>cedula_juridica</th>
          <th>domicilio</th>
          <th>direccion_electronica</th>
          <th>telefono</th>
          <th>facsimile</th>
          <th>tipo</th>
          <th>concesion_credito</th>
          
        </tr>
      </thead>
      <tbody>
        <?php

        $conexion = mysqli_connect(getenv('34.57.129.158'), getenv('root'), getenv('123456'), "RubenCruzAcosta");

        $cadenaSQL = "select * from Proveedores";
        $resultado = mysqli_query($conexion, $cadenaSQL);

        while ($fila = mysqli_fetch_object($resultado)) {
         echo "<tr><td> " .$fila->nombre . 
         "</td><td>" . $fila->cedula_identidad .
         "</td><td>" . $fila->cedula_juridica .
         "</td><td>" . $fila->domicilio .
         "</td><td>" . $fila->dirección_electronica .
         "</td><td>" . $fila->teléfono .
         "</td><td>" . $fila->facsimile .
          "</td><td>" . $fila->tipo .
          "</td><td>" . $fila->concesión_credito .
         "</td></tr>";
       }
       ?>
     </tbody>
   </table>
 </div>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
</body>
</html>
