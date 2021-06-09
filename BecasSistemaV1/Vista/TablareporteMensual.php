<?php
require_once('../Logica/LNBusquedaAsignacionBecaInstitucional.php');
$fechaInicio=$_POST['inicio'];
$fechaFin=$_POST['fin'];
$idABI=$_POST['id'];
$objLNBABI=new LNBusquedaAsignacionBecaInstitucional();
$datos=$objLNBABI->mes($fechaInicio,$fechaFin, $idABI);
//var_dump($datos);
echo "este es el id: ".$idABI;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Estudiantes</title>
</head>
<body>
<h1>Lista de Mes</h1>
    <h3>De:</h3>
    <?php
    echo $fechaInicio;
    ?>
    <br>
    <h3>A   :</h3>
    <?php
    echo $fechaFin;
    ?>
    <br>
    
    <table border="1">
        <tr>
        <br>
            <td>Fecha</td>
            <td>HorasTrabajadas</td>
        </tr>
        <?php
        foreach($datos as $dato){
        ?>
        <td><a href="ReporteDiario.php?fecha=<?php echo $dato['fecha']?>&& idABI=<?php echo $idABI?>"><?php echo $dato['fecha']?></a></td>
        <td><?php echo $dato['HorasTrabajadas']?></td>
        </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>