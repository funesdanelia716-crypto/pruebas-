<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./imagen/perro.jpg" type="image/jpg" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="./Estilos/colores.css" >
    <link rel="stylesheet" type="text/css" href="./Estilos/diseños.css" >
    <title>Inventario</title>
</head>
<body>
    <header id="titulo1" class="fcolor -d5">
        <h1>CEMGHRT</h1>
    </header>
    <nav class="fcolor-l4">
       <ul>
        <li><a href="#">Principal</a></li>
        <li><a href="#">Libros</a></li>

        <li class= "f-desplegable">
            <a href="#" class="btndesplegable" > Inventario</a>

        <div class="cont-desplegable">

            <a href="cproductos.php"> Crear producto</a>
            <a href="#">Consultar producto</a>
        </div>
        </li>
        <li><a href="#">Contactos</a></li>
       </ul>
    </nav>
    <section class="fcolor-l1  seccion-form">
     <div class="s-encabezado">
          <h2>Inventario</h2>
     </div>

   <form class="fcolor-l5" action="guardar.php" method="post" enctype="multipart/form-data"
  autocomplete="off">
  <div id="codnom">
     <label class="codnom1">Codigo: <input type="text" name="codigo" id="codigo" pattern="[0-9]{3,}"
     placeholder="Ingresar solo numeros" size="16" autofocus required> </label>

     <label class="codnom1">Producto: <input type="text" class="campof" name="nproductos" id="nproductos"
     pattern="^[a-zA-Z\s]+{3,100}" placeholder="Ingresar solo letras" size="50"
    autofocus required> </label>
    </div>
    <div id="cospor" >
        <label class="codnom1">Costo: <input type="text"  class="campof" name="costop" id="costop"
        pattern="[0-9]+([,\.][0-9]+)?"> </label>
        <label class="codnom1">Procentaje de venta: <input type="text" name="procentajev" id="procentajev"
        maxlength="3" size="4"> </label>
    </div>
    <div id="prefecha">
        <label class="codnom1">Precio de venta: <input type="text"  class="campof" name="pventa" id="pventa"
        readonly> </label>
        <label class="codnom1">Fecha: <input type="date" class="campof" name="fecha_creacion"
        id="fecha_creacion"> </label>
    </div>
    <div id="csimagen">
      <img src="" width="200px" alt="Imagen del producto...">
    </div>
    <div id="botonimg">
     <input type="file" class="campof" name="simagen" id="simagen">
    </div>
    <input type="submit" value="Guardar">
    </form>
</section>
<footer class="fcolor-d5">
    <p>Derechos Reservados &copy; 2004-2003</p>
</footer>
</body>
</html>

