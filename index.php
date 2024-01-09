<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Figuras Geométricas</title>
</head>
<body>
    <form method="post" action="index.php">
        <label for="tipoFigura">Tipo de figura:</label>
        <select name="tipoFigura" id="tipoFigura">
            <option value="Triangulo">Triángulo</option>
            <option value="Rectangulo">Rectángulo</option>
            <option value="Cuadrado">Cuadrado</option>
            <option value="Circulo">Círculo</option>
        </select>
        <br>
        <label for="lado1">Lado 1:</label>
        <input type="text" name="lado1" id="lado1" required>
        <br>
        <label for="lado2">Lado 2 (solo para Triángulo y Rectángulo):</label>
        <input type="text" name="lado2" id="lado2">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>