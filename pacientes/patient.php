<?php
include('../config/config.php'); /* LLAMAMOS CONFIG DE URLS */
include('../config/database.php'); /* CONEXION A LA BD */


class patient{
    public $conexion; /* LLAMO LA CONEXION DE MI BASE DE DATOS */

    function __construct(){
        $db= new Database(); /* LA CONEXION A LA BD SIEMPRE SE RENUEVE O ESTE EN LINEA */
        $this->conexion = $db->connectToDatabase();
    }

    function save($params){
        $firstname= $params['firstname']; 
        $lastname= $params['lastname'];
        $email = $params['email'];
        $phone = $params['phone'];
       

        $insert= "INSERT INTO patients VALUES (NULL, '$firstname', '$lastname', '$email', '$phone')"; 

        return mysqli_query($this->conexion, $insert); 

    }

    function getAll(){
        $basededatos= "SELECT * FROM patients"; 
        return mysqli_query($this->conexion, $basededatos);
    }

    function getOne($id){
        $sql = "SELECT * FROM patients WHERE id = $id";
        return mysqli_query($this->conexion, $sql);
      }
    function update($params){
        $firstname= $params['firstname']; 
        $lastname= $params['lastname'];
        $email = $params['email'];
        $phone = $params['phone'];
        $id = $params['id'];
  
        $update = " UPDATE patients SET firstname='$firstname', lastname='$lastname', email='$email', phone='$phone' WHERE id = $id";
        return mysqli_query($this->conexion, $update);
      }
  
    function delete($id){
        $eliminar= "DELETE FROM patients WHERE id = $id"; 
        return mysqli_query($this->conexion, $eliminar);
    }

}



?>