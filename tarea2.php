<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>TAREA NO. 2 Manipulación del DOM</title>
    <style>
        /* aqui se diseña el estilo de la pagina*/
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box; 
        }
        /* aqui se diseña y edita los estilos del cuerpo de la pagina*/
        body {
            background-size:cover;
            background-attachment: fixed;
        }
        /* aqui se le agrega y edita al formulario*/
        form {
            background-color: rgb(68, 134, 160);
            width: 400px;
            padding: 30px;
            margin: auto;
            margin-top: 28px;
            margin-bottom: 20px;
            border-radius: 20px;
            font-family: 'calibri';
            color: rgb(1, 1, 1);
            font-size: 18px ;
            box-shadow: 30px, 13px, 37px;
            border: 3px solid; color: 2px black;
            opacity: 0.80;
        }
    </style>
</head>
<body>
    <h1 id="tit" class="text-danger">SUBTTE. INF KENSER OMAR CAAL JUC</h1>
    <h1 id="tit" class="text-danger fw-bold">TAREA NO. 2 "MANIPULACIÓN DEL DOM"</h1>
    <h1 id="tit2" class="text-danger fw-bold">"INGENIERIA DE SOFTWARE"</h1>
    <div id="parrafo">
        <p id="parrafo1" class="text-success">La Ingeniería de Software es una de las ramas de las ciencias de la computación que estudia la creación de software confiable y de calidad, basándose en métodos y técnicas de ingeniería, y brindando soporte operacional y de mantenimiento.</p>
        <p id="parrafo2">Ingeniería de software es el estudio de los principios y metodologías para el desarrollo y mantenimiento de sistemas software (Zelkovitz, 1978).</p>
        <p id="parrafo3">ngeniería de software es la aplicación práctica del conocimiento científico al diseño y construcción de programas de computadora y a la documentación asociada requerida para desarrollar, operar.</p>
        <p id="parrafo4">La ingeniería de software trata del establecimiento de los principios y métodos de la ingeniería a fin de obtener software de modo rentable, que sea fiable y trabaje en máquinas reales (Bauer, 1972).</p>
        <p id="parrafo5">La ingeniería de software es la aplicación de un enfoque sistemático, disciplinado y cuantificable al desarrollo, operación, y mantenimiento del software. </p>
    </div>
    <br>
    <div class="row">
    <div class="col-md-4">
              <h3>FORMULARIO DE INFORMACION:</h3>
              <form>
              <div>
                  <label for="text" style="text-align: center;">NOMBRE COMPLETO:</label>
                  <input class="controles" type="text" class="form-control" id="text" name="text" placeholder="kenseromar@gmail.com" required>
                </div>
                <div>
                  <label for="email" style="text-align: center;">Correo electrónico:</label>
                  <input class="controles" type="email" class="form-control" id="email" name="email" placeholder="kenseromar@gmail.com" required>
                </div>
                <div>
                  <label for="password" style="text-align: center;">Contraseña:</label>
                  <input class="controles" type="password" class="form-control" id="password" name="password" placeholder="ingrese su contraseña" required>
                </div>
                <a href="../PAGINA PRINCIPAL/PAGINA PRINCIPAL.html"><input class="boton" id="caal" type="button" name="" value="INGRESAR"> </a><br>
              </form>
            </div>
    </div>
    <a href="https://www.facebook.com/" target="_blank" >INGRESAR FACEBOOK </a>
    <br>
    <a href="https://twitter.com/?lang=es" target="_blank" >TWITTER</a>
    <br>
    <a href="https://www.instagram.com/" target="_blank" >INSTAGRAM</a>
    <script src="script.js"></script>
</body>
</html>