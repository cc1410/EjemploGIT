
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de Formulario de Alta</title>
    </head>
    <body>
        <form action="datos.php" method="POST">
            <div>nombre: <input type="text" name="nombre"></div>
            <div>Edad: <input type="number" name="edad"></div>
            <div>Ciudad: <select name="ciudad">
                    <option>Barcelona</option>
                    <option>Girona</option>
                    <option>Lleida</option>
                    <option>Tarragona</option>
                </select></div>
            <div>
                sexo: 
                Hombre<input type="radio" name="sexo" value="hombre">
                Mujer<input type="radio" name="sexo" value="mujer">
            </div>
            <input type="submit" value="enviar">
        </form>
    </body>
</html>
