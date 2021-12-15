<?php
/**
  @brief  Función para realizar la conexión de la base de datos mysql.
  @return La conexión con la base de datos
*/
    function conectar(){
        $usuario = "root"; /**< valor con el nombre de usuario */
        $password = "";  /**< Contraseña (Si se asigna) */
        $servidor = "localhost";  /**< Dirección del servidor */
        $basededatos = "Punto_Venta"; /**< Nombre de la base de datos */
        // creación de la conexión a la base de datos con mysql_connect()
        $conexion = mysqli_connect( $servidor, $usuario, $password ,$basededatos) or die ("No se ha podido conectar al servidor de Base de datos");
        return $conexion;
    }
    /**
      @brief  Función para realizar la conexión de la base de datos con parametros.
      @param $usuario <- Nombre del usuario de la base de basededatos
      @param $password <- Contraseña del usuario
      @param $Servidor <- Dirección del servidor de la base de basededatos
      @param $Basededatos <- Nombre de la base de datos
      @return La conexión con la base de datos
    */
    function conectarDB($usuario, $password,$servidor,$basededatos){
        $conexion = mysqli_connect( $servidor, $usuario, $password ,$basededatos) or die ("No se ha podido conectar al servidor de Base de datos");
        return $conexion;
    }
?>
