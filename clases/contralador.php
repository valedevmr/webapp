<?php

    
    include("modelo.php");
    if($_POST){
       
        if($_POST["accion"]=="insertar"){
            $objeto = new modelo();
            $valor= $objeto->verificarInsertar($_POST);
            $json = array(
                "retorno"=>$valor
            );
            echo json_encode($json);
        }

        if($_POST["accion"]=="renderizar"){
            $objeto = new modelo();
            $datos = $objeto->leer($_POST);
            echo json_encode($datos);
        }

        if($_POST["accion"]=="actualizar"){
            $objeto = new modelo();
            $datos = $objeto->actualizar($_POST);
            echo json_encode($datos);
        }
        if($_POST["accion"]=="login"){
            $objeto = new modelo();
            $datos = $objeto->validarUsuario($_POST);
            echo json_encode($datos);
        }
        
        

    }
?>