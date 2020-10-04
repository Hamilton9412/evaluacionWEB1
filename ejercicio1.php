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
        <h1 class="text-center">EJERCICIO NÚMERO 1</h1>
        <h4 class="text-center">Hacer un programa en PHP que permita mostrar en pantalla la suma, resta, multiplicación, de dos números enteros almacenados en 2, variables diferentes</h4>
        <form action="ejercicio1.php" method="POST">
            <div class="form-group row mt-3 justify-content-center">
                <label for="number1" class="col-1">Número 1</label>
                <input type="number" name="number1" id="number1" class="form-control col-2"  placeholder="Numero 1">
                <label for="number2" class="col-1">Número 2</label>
                <input type="number" class="form-control col-2" name="number2" id="number2" placeholder="Numero 2">
            </div>
            <div class="form-group row mt-3 justify-content-center">
                <select name="operator" id="operator" class="form-control offset-1 col-5">
                    <option value="" selected disabled>Selecciona La Operación Que Desea Hacer</option>
                    <option value="add">Sumar</option>
                    <option value="rest">Restar</option>
                    <option value="multiplication">Multiplicar</option>
                </select>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-1">
                    <button type="submit" name ="calcular" class="btn btn-primary">Calcular</button>
                </div>
            </div>
        </form>

        <?php 
            $result = 0;
            if(isset($_POST['calcular'])) : ?>
                <?php 
                    if(!empty($_POST['operator'])) {
                        $operator = $_POST['operator'];

                        $number1 = isset($_POST['number1']);
                        $number2 = isset($_POST['number2']);

                        if ($operator == "add") {
                            $result = $_POST["number1"] + $_POST["number2"];
                        }
                        else if ($operator == "rest") {
                            $result = $_POST["number1"] - $_POST["number2"];
                        }
                        else if ($operator == "multiplication") {
                            $result = $_POST["number1"] * $_POST["number2"];
                        }
                    }
                    else 
                    {
                        echo 'No se ha seleccionado ningún operador';     
                    }
                ?>
                
        <?php endif ?>
   
            <h4 class="text-center">
                <?php echo("El resultado de la operación es: ". $result) ?>
            </h4>
    
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>