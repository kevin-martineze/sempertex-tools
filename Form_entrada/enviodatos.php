<?php
    include("conexion_bd.php");

    if (!empty($_POST["enviar"])) {
        if(empty($_POST["nombrecompleto"]) or empty($_POST["telefono"]) or empty($_POST["tipodocumento"]) or empty($_POST["nodocumento"]) or empty($_POST["fechayhora"]) or empty($_POST["cantidad"]) or empty($_POST["materiales"])){
            echo '<div class="alerta">Algun campo esta vacio</div>';
            // echo 'algun campo esta vacio';
        } else{
            $nombrecompleto = $_POST["nombrecompleto"];
            $telefono = $_POST["telefono"];
            $tipodocumento = $_POST["tipodocumento"];
            $nodocumento = $_POST["nodocumento"];
            $fechayhora = $_POST["fechayhora"];
            $cantidad = $_POST["cantidad"];
            $materiales = $_POST["materiales"];
            $sql = $conexion->query("insert into datos_formulario (nombrecompleto, telefono, tipodocumento, nodocumento, fechayhora, cantidad, materiales) values ('$nombrecompleto', '$telefono', '$tipodocumento', '$nodocumento', '$fechayhora', '$cantidad', '$materiales')");
            
            if($sql==1){
                header("Location: formularioentrada.php");
                session_start();
                $_SESSION['msj'] = "Se registraron los datos exitosamente";
            } else{
                session_start();
                $_SESSION['msj'] = "No se ha podido enviar los datos";
            }
        }
    }

    

    
?>