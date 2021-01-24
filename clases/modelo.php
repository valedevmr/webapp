<?php

    include("conexion.php");
     class modelo{
        
        private $consulta;
        private $insersion;
        private $conexion;
        private $consultacompleta;
        private $actualizar;
        
        function verificarInsertar($datos){
            $conexion = new basedatos();
            $conexion->obtenerConexiuon();
            $this->consulta =  "SELECT * FROM webapp where rfc = '".$_POST["rfc"]."'";

            if($conexion->conn){
                $result = ($conexion->conn)->query($this->consulta);
                if ($result->num_rows > 0){
                    return true;
                }
                else{
                    $this->insersion = "Insert INTO webapp(rfc,nombre,correo,contrasena) VALUES('".$_POST["rfc"]."','".$_POST["nombre"]."','".$_POST["correo"]."','".$_POST["contrasena"]."')";
                    
                    if(($conexion->conn)->query($this->insersion)){
                        $this->insersion =  " insert into datos(id) values('".$_POST["rfc"]."')";
                        ($conexion->conn)->query($this->insersion);
                        return $this->insersion;
                    }
                    
                }
            } 
         }
        
        function leer($datos){
            $conexion = new basedatos();
            $conexion->obtenerConexiuon();
            $this->consultacompleta= "SELECT * FROM webapp, datos where webapp.rfc = datos.id and rfc = '".$_POST["usuario"]."'";
            if($conexion->conn){
                $result = ($conexion->conn)->query($this->consultacompleta);

                if ($result->num_rows > 0) {
                    
                        $JSON = array();
                    
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                          array_push($JSON,$row);
                        }
                     
                    return $JSON;
                }
                else{

                    return false;
                }
            }
        }
        function actualizar($datos){
            $conexion = new basedatos();
            $conexion->obtenerConexiuon();
            $sql = "UPDATE MyGuests SET lastname='Doe' WHERE id=2";
            $this->actualizar = "UPDATE webapp SET  rfc= '".$_POST["rfc"]."', nombre ='".$_POST["nombre"]."', contrasena = '".$_POST["contrasena"]."' WHERE rfc = '".$_POST["rfc"]."'";        
            if($conexion->conn){
               $result = ($conexion->conn)->query($this->actualizar);
                
                if($result){
                    $this->actualizar =  "UPDATE datos SET  id= '".$_POST["rfc"]."', direccion = '".$_POST["direccion"]."', telefono = '".$_POST["telefono"]."', website= '".$_POST["rfc"]."' where id= '".$_POST["rfc"]."'";
                    $result = ($conexion->conn)->query($this->actualizar);
                    $this->consultacompleta= "SELECT * FROM webapp, datos where webapp.rfc = datos.id and rfc = '".$_POST["rfc"]."'";
                    if($conexion->conn){
                        $result = ($conexion->conn)->query($this->consultacompleta);

                        if ($result->num_rows > 0) {
                            
                                $JSON = array();
                            
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                array_push($JSON,$row);
                                }
                            
                            return $JSON;
                        }
                        else{

                            return false;
                        }
                    } 
                
            }
            }
        }

        function validarUsuario($datos){
            
            $conexion = new basedatos();
            $conexion->obtenerConexiuon();
            $this->consulta =  "SELECT * FROM webapp where correo = '".$_POST["correo"]."'";

            
            $json = array();

            if($conexion->conn){
                $result = ($conexion->conn)->query($this->consulta);
                $this->consulta =  "SELECT * FROM webapp where contrasena = '".$_POST["contrasena"]."'";

                if ($result->num_rows > 0){

                    $result = ($conexion->conn)->query($this->consulta);
                    array_push($json,["correo"=>"exito"]);

                    if ($result->num_rows > 0){
                        array_push($json,["contrasena"=>"exito"]);
                        $usuario = $result->fetch_assoc();
                        $user = $usuario["rfc"]; 
                        array_push($json,["usuario"=>$user]);
                        return $json;
                    }
                    else{
                        array_push($json,["contrasena"=>"fallido"]);
                        return $json;
                    }


                }
                else{
                    array_push($json,["correo"=>"faliido"]);
                    return $json;
                }
            }
            
        }

     }

?>