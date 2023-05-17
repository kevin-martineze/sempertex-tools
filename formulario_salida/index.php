<?php
include_once 'conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$consulta = "SELECT * FROM datos_formulario";
$resultado = $conexion->prepare($consulta);
$resultado->execute();
$datos_formulario = $resultado->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS DATATABLE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
    <!-- JS DATATABLE -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <!-- LINK JS -->
    <script src="javascript.js"></script>
    <!-- LINK CSS -->
    <link rel="stylesheet" href="stylee.css">

    <!-- START PAGE -->
    <title>Consultar</title>
</head>

<body>
    <h1 class="text-center">Datatables</h1>
    <h3 class="text-center">AGREGAR INFORMACION</h3>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <table id="tablaUsuarios" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Nombre completo</th>
                            <th>Telefono</th>
                            <th>Tipo de Documento</th>
                            <th>No. de Documento</th>
                            <th>Cantidad</th>
                            <th>Materiales</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                foreach($datos_formulario as $datos_formularios){
                            ?>
                        <tr>
                            <td><?php echo $datos_formularios['nombrecompleto']?></td>
                            <td><?php echo $datos_formularios['telefono']?></td>
                            <td><?php echo $datos_formularios['tipodocumento']?></td>
                            <td><?php echo $datos_formularios['nodocumento']?></td>
                            <td><?php echo $datos_formularios['cantidad']?></td>
                            <td><?php echo $datos_formularios['materiales']?></td>
                        </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Telefono</th>
                            <th>Tipo de Documento</th>
                            <th>No. de Documento</th>
                            <th>Cantidad</th>
                            <th>Materiales</th>
                        </tr>
                    </tfoot>
                </table>

            </div>

        </div>

    </div>

</body>

</html>