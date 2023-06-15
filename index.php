<html>
  <head>
    <title>¡Registrate para una beca!</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
     <div class="content">
   <center> <h2><?php echo '<p>Becas Avila</p>'; ?></h2> 
       <h2> <form action="accion.php" method="post">
         <p>Nombre: <input type="text" name="nombre" /></p>
        <p>Apellido paterno: <input type="text" name="paterno" /></p>
        <p>Apellido materno: <input type="text" name="materno" /></p>
        <p>Promedio: <input type="number" name="prom" /></p>
        <p>Nombre de la escuela: <input type="text" name="esc" /></p>  
        <p>Edad: <input type="number" name="edad" /></p>
        <p>Correo electronico: <input type="email" name="correo" /></p>
        <p><input type="submit" /></p></center></h2>
        </form>
       </div>
  <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
       
  </body>
</html>