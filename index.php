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
        <select name="tipoFigura" id="tipoFigura">
            <option value="cuadrado">Cuadrado</option>
            <option value="triangulo">Triangulo</option>
            <option value="circulo">Circulo</option>
            <option value="rectangulo">Rectangulo</option>
        </select>
        <br>
        <input type="button" value="Continuar" onclick="obtenerFormulario()">
    </form>
</body>
</html>
