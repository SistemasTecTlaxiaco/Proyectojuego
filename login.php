<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <LINK REL="stylesheet" TYPE="text/css" HREF="estilo_login.css">
</head>
<script>
function validar(){
  
  if(!(/^[a-zA-ZàáâäãåacceèéêëeiìíîïlnòóôöõøùúûüuuÿýzzñçcšžÀÁÂÄÃÅACCEEÈÉÊËÌÍÎÏILNÒÓÔÖÕØÙÚÛÜUUŸÝZZÑßÇŒÆCŠŽ?ð ,.'-]{2,48}$/i.test(document.getElementById("user").value)))
  {
      alert('Nombre Incorrecto');
      document.getElementById("user").style.backgroundColor='red';
      document.getElementById("user").focus();
      return false;
    }else{
  if(!(/^[a-zA-ZàáâäãåacceèéêëeiìíîïlnòóôöõøùúûüuuÿýzzñçcšžÀÁÂÄÃÅACCEEÈÉÊËÌÍÎÏILNÒÓÔÖÕØÙÚÛÜUUŸÝZZÑßÇŒÆCŠŽ?ð ,.'-]{2,48}$/i.test(document.getElementById("ap").value)))
  {
      alert('Apellido Incorrecto');
      document.getElementById("ap").style.backgroundColor='red';
      document.getElementById("ap").focus();
      return false;
  }}}
  </script>
<body>
 
<div class="container">

 
    <div class="login-wrap">
        <div class="login-html">
          
          <div class="login-form">
            <div class="sign-in-htm">
            <form action="logica/loguear.php" onsubmit="validar();" method="POST" >
              <div class="group">
                  
                 <br></br> 
                 <br></br>
                 <br></br>
                 <br></br>
                  
                <label for="user" class="label">nombre</label>
                <input id="user"  name="usuario" type="text" class="input" required>
              </div>
              <div class="group">
                <label for="pass" class="label">Apellido </label>
                <input id="pass" name="clave" type="password" class="input" id="ap" data-type="password" required>
              </div>
             
                
                <div class="modal-footer">
                  <button id="envio" class="boton azul" onclick="validar();" class="submit">Iniciar</button>
                  <a href="inicio.php" class="boton rojo">Cancelar</a>
                </div>
                </form>
            </div>
          </div>
        </div>
      </div>
</div>
</body>
</html>