
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <LINK REL="stylesheet" TYPE="text/css" HREF="estilo_registro.css">
</head>
 
<body>
 
<div class="container">

 
    <div class="login-wrap">
        <div class="login-html">
          <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab"></label>
          <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
          <div class="login-form">
            <div class="sign-in-htm">

            <form action="logica/registrar.php" method="POST">
              <div class="group">
                  
                 <br></br> 
                 <br></br> 
                <label for="user" class="label">nombre</label>
                <input id="user" name="nombre" type="text" class="input">
              </div>
              <div class="group">
                <label for="pass" class="label">Apellido Paterno</label>
                <input id="ap" name="Ap" type="text" class="input" >
              </div>
              <div class="group">
                  <label for="pass" class="label">Apellido Materno</label>
                  <input id="am" name="Am" type="text" class="input" >
                </div>
                <div class="group">
                  <label for="pass" class="label">Edad</label>
                  <input id="ed" name="edad" type="number" class="input">
                </div>
                <div class="modal-footer">
                <button id="envio" class="boton verde" >Guardar</button>
                  <a href="inicio.php" class="boton azul">CANCELAR</a>
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
 

 
</div>
</body>
</html>
