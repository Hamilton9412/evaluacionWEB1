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
        <a class="navbar-brand" href="index.php">INICIO PHP</a>
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
        <h4 class="text-center mt-3">Hacer un programa para ayudar a un trabajador de Postobón a saber cuál será su sueldo semanal, se sabe que, si trabaja 40 horas o menos, se le pagará $20000 por hora, pero si trabaja más de 40 horas entonces las horas extras se le pagarán a $25000 por hora.</h4>
        <br>
        <form action="ejercicio3.php" method="POST">
            <div class="form-group row justify-content-center">
                <label for="hours">Horas laboradas esta semana</label>
                <div class="col-2">
                    <input type="number" name= "hours" id="hours" class="form-control"  placeholder="Horas laboradas">
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
                $normalHours=0;
                $extraHours=0;
                $salaryb=0;
                $salaryextra=0;
                $salaryWeek=0;
                if($_POST["hours"]<=40) {
                    $normalHours=$_POST["hours"];
                }
                else {
                    $normalHours= 40;
                    $extraHours=$_POST["hours"] - 40;
                }

                $salaryb=$normalHours * 20000;
                $salaryextra=$extraHours * 25000;
                $salaryWeek=$salaryb+$salaryextra;
            ?>

            <h4 class="text-center">
                <?php 
                    echo ("Su salario semana es de: ". $salaryWeek);
                ?>
            </h4>

        <?php endif ?>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>