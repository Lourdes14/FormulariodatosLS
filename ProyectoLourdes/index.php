<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!--Let browser know website is optimized for mobile-->
    <title>Datos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>

    <div class="container center">
        <h1>Datos Personales</h1>
    </div>
    <br><br>
    
    <div class="container">
    <form method="get" action="datosuser.php">
        <div class="row">
        <div class="input-field col s6">
          <input placeholder="Primer Nombre" id="first_name" type="text" class="validate">
          <label for="first_name">Primer Nombre</label>
        </div>
        <div class="input-field col s6">
          <input id="last_name" type="text" class="validate">
          <label for="last_name">Primer Apellido</label>
        </div>

        <div class="input-field col s12">
          <input id="password" type="password" class="validate">
          <label for="password">Contraseña</label>
        </div>
     
        </div>

    </form>
    </div>

    <!--JavaScript at end of body for optimized loading-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>