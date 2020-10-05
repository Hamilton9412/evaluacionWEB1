<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejericicio PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">EXAMEN PHP</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio1.php">Ejercicio 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio2.php">Ejercicio 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio3.php">Ejercicio 3</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ejercicio4.php">Ejercicio 4</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
    <br>
        <h4 class="text-center mt-3">Codificar un programa para la tienda Spring Step que tiene una promoción de descuento, esta dependerá del número de zapatos que se compren</h4>
        <h5 class="text-center mt-3">- Si son 3 pares se les dará un 10% de descuento al cliente sobre el total de la compra</h5>
        <h5 class="text-center mt-3">- Si el número de zapatos es mayor 3 pares, pero menor o igual de 8 pares, se le otorga un 20% de descuento</h5>
        <h5 class="text-center mt-3">- si son más 8 pares de zapatos se otorgará un 50% de descuento</h5>
        <br>
        <form action="ejercicio4.php" method="POST">
            <div class="form-group row justify-content-center">
                <label for="valor">Precio Par de Zapatos</label>
                <div class="col-2">
                    <input type="number" name= "valor" id="valor" class="form-control"  placeholder="Precio">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="cantidad">Cuantos Zapatos Compro</label>
                <div class="col-2">
                    <input type="number" name= "cantidad" id="cantidad" class="form-control"  placeholder="# de Zapatos">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-1">
                    <button type="submit" name ="calcular" class="btn btn-primary">Calcular</button>
                </div>
            </div>
        </form>
        <?php if(isset($_POST["calcular"])) : ?>
            <?php
                $precioZapato = 0;
                $cantidadZapatos = 0;
                $totalCompra = 0;
                $subtotal = 0;
                $dcto_1 = 10;
                $dcto_2 = 20;
                $dcto_3 = 50;
                $dcto_final = 0;
                $mercancia = 0;
                if ($_POST["cantidad"] < 3)
                {
                    $mercancia = $_POST["valor"] * $_POST["cantidad"];
                    $subtotal = $mercancia;
                }
                else if ($_POST["cantidad"] == 3)
                {
                    $mercancia = $_POST["valor"] * $_POST["cantidad"];
                    $dcto_final = ($mercancia * $dcto_1) / 100;
                    $subtotal = $mercancia - $dcto_final;
                }
                else if (($_POST["cantidad"] > 3) && ($_POST["cantidad"] <= 8))
                {
                    $mercancia = $_POST["valor"] * $_POST["cantidad"];
                    $dcto_final = ($mercancia * $dcto_2) / 100;
                    $subtotal = $mercancia - $dcto_final;
                }
                else if ($_POST["cantidad"] > 8)
                {
                    $mercancia = $_POST["valor"] * $_POST["cantidad"];
                    $dcto_final = ($mercancia * $dcto_3) / 100;
                    $subtotal = $mercancia - $dcto_final;
                }
                $totalCompra = $subtotal
            ?>

            <h4 class="text-center">
                <?php 
                    echo ("El Subtotal: ". $mercancia);
                ?>
            </h4>

            <h4 class="text-center">
                <?php 
                    echo ("El Descuento Es: ". $dcto_final);
                ?>
            </h4>

            <h4 class="text-center">
                <?php 
                    echo ("El Valor de La Compra Es: ". $totalCompra);
                ?>
            </h4>

        <?php endif ?>
 </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>