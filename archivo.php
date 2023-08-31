<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $numero = $_POST["numero"];
    $numero2 = $_POST["numero2"];

    if (isset($_POST["calcularSuma"])) {
        $suma = $numero + $numero2;
    }
    
    if (isset($_POST["calcularResta"])) {
        $resta = $numero - $numero2;
    }

    if (isset($_POST["calcularProducto"])) {
        $producto = $numero * $numero2;
    }

    if ( isset($_POST["calcularDivision"] ) ) {
        
        if ( $numero2 == 0 ) {
            
            $zero= "NO SE PUEDE DIVIDIR POR 0 BUUURRO";
            
            echo '<p>'. $zero .'</p>';

        }else {
            
            $division = $numero / $numero2;
 
        }  
    }

}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado de la Calculadora</title>
</head>
<body>
    
    <h1>Resultado de la Calculadora</h1>
    <?php if (isset($suma)) { ?>
        <p>El suma del número ingresado es: <?php echo $suma; ?></p>
    <?php } ?>
    
    <?php if (isset($resta)) { ?>
        <p>El resultado de la resta es: <?php echo $resta; ?></p>
    <?php } ?>

    <?php if (isset($producto)) { ?>
        <p>El resultaado del producto es: <?php echo $producto; ?></p>
    <?php } ?>

    <?php if (isset($division)) { ?>
        <p>El resultaado de la division es: <?php echo $division; ?></p>
    <?php } ?>

</body>
</html>
