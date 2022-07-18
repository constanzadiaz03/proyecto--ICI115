<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Proyecto del gato</title>
  <link rel="stylesheet" href="estilo_registro.css">
</head>

<body>

  <div class="signupFrm">
    <form action="registro_proyecto.php" method="POST" class="form">
      <h1 class="title">Formulario de Registro</h1>

      <div class="inputContainer">
        <input type="text" name="nombre" class="input" placeholder="a" required />
        <label for="nombre" class="label">Nombre</label>
      </div>

      <div class="inputContainer">
        <input type="text" name="fecha_nac" class="input" placeholder="a" required />
        <label for="fecha_nac" class="label">Fecha de nacimiento (AAAA-MM-DD)</label>
      </div>

      <div class="inputContainer">
        <input type="text" name="especie" class="input" placeholder="a" required />
        <label for="especie" class="label">Especie</label>
      </div>

      <input type="submit" name="submit" class="submitBtn" value="Registrar" />
    </form>
  </div>
</body>

</html>