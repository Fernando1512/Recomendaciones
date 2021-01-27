<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login | Fazt</title>
    <link rel="stylesheet" href="Estilo_Login.css">
  </head>
  <body>

    <div class="login-box">
      
      <h1>Login</h1>
        <form id="formulario" action="validar.php" method="POST" >
          
          <label for="email">Email</label>
          <input type="text"  name="email" id="email" placeholder="Ingresa Email">
          
          <label for="pass">Contraseña</label>
          <input type="password" name="pass" placeholder="contraseña">
          
          <input type="submit"  value="INGRESAR">

          <a href="inicio.php" >Registrarse</a>
        </form> 
        
    </div>
    


  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
    <script src="app.js"></script>






  </body>
</html>