<!DOCTYPE html>
<html>
<head>
    <title>Referencia</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <head>
  <meta charset="utf-8">
 
</head>
<body>

    <img align="center" src="imagenes/logo3.jpg"width="1330" height="200" alt=baloncesto>
  <h1 align="center">Sistema de recomendaciones.<a  href="principal.php" target="_blank"><button  type="submit" name="register" class="formulario__btn">Usuarios registrados</button></a> <a  href="login.php" ><button  type="submit" name="register" class="formulario__btn">Login</button></a></h1>

    
    
    
    
    <!-------------------->
    <div class="comodar">
        
    </div>
    
    <div align="center" class="registro">
    <form class="form-register" method="post" >
        <h2 align="center">Registros</h2>
        <input class="controls" type="text" name="matricula" placeholder="nombre" >
        <input class="controls" type="text" name="name" placeholder="apellido">
        <label for="licenciatura">
            <h4>Tipo de recomendacion:</h4>  
        </label> 
        <select class="select" name="licenciatura">
            <option value="semestre">Semestre</option>
            <option value="materia">Materia</option>
            
        </select>
        <label for="semestre">
            <h4>Semestre:</h4>  
        </label>
        <select class="select" name="semestre">
            
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
        </select>
        <input class="controls" type="text" name="email" placeholder="Email">
        <input class="controls" type="text" name="pass" placeholder="contraseña">
        <input class="controls"  type="text" name="materias_cursadas" placeholder="Materias Cursadas">
        <input class="controls" type="text" name="materias_en_curso" placeholder="Materias En Curso">
        <input class="botons"type="submit" name="register">
        
    
    </form>
    </div>
    <div class="medio">
        <div   class="parrafo">
            <h2 align="center">En que consiste nustro sistema.</h2>
            <p align="center">
                El sistema de recomendaciones con siste en dar le a los alumnos de lis la posibilidad de burcar referencias de librosbasadaen su carrera.
            </p>
        </div>
    </div>
   
   <div class="abajo">
    <div class="img2">
<p align=" center"><img src="imagenes/logo1.png" width="300" height="150" alt=baloncesto  ></p>
</div>
<h4 align="center">Contactos</h4>
<p align="center"><strong>Moises Coba Turriza</strong> </p>
<p align="center"><strong>Fernando Pomol</strong> </p>
<p align="center"><strong>+52 (98)6 112 43 56</strong> </p>
</div>
 

    


    </table>
    <?php 
        include("registrar.php");
        ?>
</body>
        

</html>