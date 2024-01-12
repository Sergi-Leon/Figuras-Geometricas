<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de Figuras Geométricas</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Seleccione el tipo de figura:</h2>
    <form id="formFigura">
        <label for="tipoFigura">Tipo de Figura:</label>
        <select name="tipoFigura" id="tipoFigura">
            <option value="" disabled selected>Selecciona una figura</option>
            <option value="cuadrado">Cuadrado</option>
            <option value="triangulo">Triangulo</option>
            <option value="circulo">Circulo</option>
            <option value="rectangulo">Rectangulo</option>
        </select>
        <div id="formularioContainer"></div>
        <br>
        <input id="botonEnviar" type="submit" value="Calcular">
    </form>
    <p id="resultado"></p>
</body>
</html>
<script src="./ajax/ajax.js"></script>