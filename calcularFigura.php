<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calcular Figura Geométrica</title>
</head>
<body>
    <h2>Ingrese los lados de la figura:</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["tipo"])) {
        $tipoFigura = $_GET["tipo"];
        ?>
        <form action="" method="post">
            <label for="lado1">Lado 1:</label>
            <input type="number" name="lado1" required>
            <?php
            if ($tipoFigura === "Triangulo") {
                echo '<br><label for="lado2">Lado 2:</label><input type="number" name="lado2" required>';
            }
            ?>
            <br>
            <input type="submit" value="Calcular">
            <input type="hidden" name="tipoFigura" value="<?php echo $tipoFigura; ?>">
        </form>
        <?php
    } elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
        $tipoFigura = $_POST["tipoFigura"];
        $lado1 = $_POST["lado1"];
        $lado2 = isset($_POST["lado2"]) ? $_POST["lado2"] : null;

        echo "<h3>Resultados:</h3>";
        echo "<p>Tipo de figura: $tipoFigura</p>";
        echo "<p>Lado 1: $lado1</p>";
        if ($lado2 !== null) {
            echo "<p>Lado 2: $lado2</p>";
        }

    } else {
        header("Location: index.php");
    }
    ?>
</body>
</html>
