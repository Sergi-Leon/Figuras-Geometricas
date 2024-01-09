<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Figuras Geométricas</title>
</head>
<body>
    <h2>Seleccione el tipo de figura:</h2>
    <form action="formFigura.php" method="post">
        <label for="tipoFigura">Tipo de Figura:</label>
        <select name="tipoFigura" id="tipoFigura">
            <option value="Cuadrado">Cuadrado</option>
            <option value="Triangulo">Triangulo</option>
            <option value="Circulo">Circulo</option>
            <option value="Rectangulo">Rectangulo</option>
        </select>
        <br>
        <input type="submit" value="Continuar">
    </form>
</body>
</html>
