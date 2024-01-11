<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Figuras Geométricas</title>
    <script src="./ajax/ajax.js"></script>
</head>
<body>
    <h2>Seleccione el tipo de figura:</h2>
    <form id="formFigura">
        <label for="tipoFigura">Tipo de Figura:</label>
        <select name="tipoFigura" id="tipoFigura" onchange="cambiarFormulario()">
            <option value="cuadrado">Cuadrado</option>
            <option value="triangulo">Triangulo</option>
            <option value="circulo">Circulo</option>
            <option value="rectangulo">Rectangulo</option>
        </select>
        <br>
        <div id="formularioContainer"></div>
    </form>
</body>
</html>
