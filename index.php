<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>TABLAS</title>
</head>

<body>
    <div class="container" style="width: 40% !important;">
        <div class="alert alert-primary" role="alert">
            TABLAS!
        </div>
        <form action="index.php" method="POST">
            Numero inicial:
            <input type="number" class="form-control" name="num1"><br>
            Numero Final:
            <input type="number" class="form-control" name="num2"><br>
            <button type="submit" class="btn btn-success" name="procesar">PROCESAR</button>
        </form>
        <?php


        if (isset($_POST["procesar"])) {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];

            tablas($num1, $num2);
        }

        function tablas($num1, $num2)
        {
            for ($i = $num1; $i <= $num2; $i++) {
                echo "<div class='alert alert-primary'>La tabla del " . $i . "</div>";
                echo "<table class='table table-bordered'>";
                echo "<th>NUMERO</th><th>Numero</th><th>Resultado</th>";
                for ($j = 0; $j <= 10; $j++) {
                    echo "<tr>";

                    echo "<td>" . $i . "</td><td>" . $j . "</td><td> " . $i * $j . "</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        }

        ?>
    </div>

</body>

</html>