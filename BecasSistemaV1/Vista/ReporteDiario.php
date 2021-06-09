<?php
 require_once('../Logica/LNBusquedaAsignacionBecaInstitucional.php');
 $idABI=$_GET['idABI'];
 $fecha=$_GET['fecha'];
 $objLNBABI=new LNBusquedaAsignacionBecaInstitucional();
$datosdia=$objLNBABI->dia($idABI,$fecha);
echo "idABI: ".$idABI;
echo "fecha: ".$fecha;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Dia</title>
</head>
<body>
    <h3>Dia:</h3>
    <?php
    echo $fecha;
    ?>
    <br>
    <br>
    
    <table border="1">
        <tr>
        <br>
            <td>Hora Entrada</td>
            <td>Hora Salida</td>
            <td>Horas Trabajadas</td>
        </tr>
        <?php
        foreach($datosdia as $datodia){
        ?>
        <td><?php echo $datodia['HoraEntrada']?></td>
        <td><?php echo $datodia['HoraSalida']?></td>
        <td><?php echo $datodia['HorasTrabajadas']?></td>
        </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>