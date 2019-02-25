<html>
<body>
    <?php
        $deportes = array(1 => "Futbol", 2 => "Hockey", 3 => "Futbol Femenino", 4 => "Basquet", 5 => "Tenis", 6 => "Ajedrez", 7 => "Patin", 8 => "Bochas");    
        $idDeporte = 2;
    ?>

    <select name="idDeporte" required>

    <?php
        foreach ($deportes as $clave => $valor) {
            // $clave es el valor de la Foreign Key y va a ser posteado en idDeporte
            // $valor es la descripcion y solamente se usa para mostrarse
            $seleccionado = ($clave == $idDeporte ? 'selected' : '');
            echo "<option value='$clave' $seleccionado>$valor</option>";            
        }
    ?>

    </select>