<html>
  <head>
    <title>Resultados</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div class="content">
    <h1>DATOS CAPTURADOS <br></h1>
    <h1>Nombre:<?php echo htmlspecialchars($_POST['nombre']); ?><br>
    Apellido Paterno:<?php echo htmlspecialchars($_POST['paterno']); ?><br>
    Apellido Materno:<?php echo htmlspecialchars($_POST['materno']); ?><br>
    Promedio:<?php echo htmlspecialchars($_POST['prom']); ?><br>
    Nombre de la escuela:<?php echo htmlspecialchars($_POST['esc']); ?><br>
    Edad:<?php echo (int)$_POST['edad']; ?></h1>
    </div>

 <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>