<?php
/**
  @brief  Función para Insertar un nuevo administrador
  @param $conexion <- Conexion establecida con la base de datos
  @param $ID <- Clave primaria del registro
  @param $Nombre <- Nombre del administrador
  @param $AP <- Apellido Paterno del Administrador
  @param $AM <- Apellido Materno del administrador
  @param $Telefono <- Numero telefonico del administrador
  @param $Edad <- Edad del administrador
*/
function inserADMIN($conexion, $ID, $Nombre,$AP,$AM, $Telefono, $Email,$Edad){
    mysqli_query($conexion,"INSERT INTO administrador
    values(".$ID.",".$Nombre.",'".$AP."','".$AM."','".$Telefono."',".$Email.",'".$Edad."')")
    or die ("Error al insertar la administración.");
}
/**
  @brief  Función para Insertar una nueva categoría
  @param $conexion <- Conexion establecida con la base de datos
  @param $ID_Categoria <- Clave primaria de la categoria
  @param $Nombre <- Nombre de la categoria
  @param $Descripcion <- Descripcion de la categoría
*/
function inserCat($conexion, $ID_Categoria,$Nombre,$Descripcion){
    mysqli_query($conexion,"INSERT INTO categoria
    values(".$ID_Categoria.",'".$Nombre."','".$Descripcion."')")
    or die ("Error al insertar la categoría.");
}
/**
  @brief  Función para Insertar un nuevo cliente
  @param $conexion <- Conexion establecida con la base de datos
  @param $ID_Cliente <- Clave primaria del cliente
  @param $Nombre <- Nombre del cliente
  @param $Ap_Paterno <- Apellido paterno del cliente
  @param $Telefono <- Numero telefonico del cliente.
  @param $ID_Administrador <- ID del administrador (Debe de existir)
  @param $ID_Vendedor <- ID del vendedor (Debe de existir)

*/
function inserCliente($conexion, $ID_Cliente,$Nombre,$Ap_Paterno,$Telefono,$ID_Administrador,$ID_Vendedor){
    mysqli_query($conexion,"INSERT INTO cliente
    values(".$ID_Cliente.",'".$Nombre."','".$Ap_Paterno."','".$Telefono."',".$ID_Administrador.",".$ID_Vendedor.")")
    or die ("Error al insertar el cliente.");
}

/**
  @brief  Función para Insertar una compra.
  @param $conexion <- Conexion establecida con la base de datos
  @param $ticket <- Identificador de la compra
  @param $ID_Venta <- Referencia a los productos comprados
  @param $ID_Cliente <- Referencia al cliente que realizo la compra.
*/
function inserCompra($conexion, $tiket,$ID_Venta,$ID_Cliente){
    mysqli_query($conexion,"INSERT INTO compra
    values(".$tiket.",".$ID_Venta.",".$ID_Cliente.")")
    or die ("Error al insertar la compra.");
}

/**
  @brief  Función para Insertar una nueva dirección
  @param $conexion <- Conexion establecida con la base de datos
  @param $Estado <- Nombre del estado de la direccion
  @param $Ciudad <-  Nombre de la ciudad
  @param $Calle <- Nombre de la calle
  @param $Numero <- Numero de calle
*/
function inserDireccion($conexion, $Estado,$Ciudad,$Calle,$Numero){
    mysqli_query($conexion,"INSERT INTO direccion
    values(".$Estado.",'".$Ciudad."','".$Calle."','".Numero."')") or die ("Error al insertar la direccion.");
}


/**
  @brief  Función para Insertar un nuevo registro a la tabla pedidos
  @param $conexion <- Conexion establecida con la base de datos
  @param $ID_Pedido <- Identificador del pedido
  @param $Cantidad <- Cantidad de productos pedidos
  @param $Monto_Final <- Cantidad totol de costo
  @param $ID_Producto <- Producto comprado
  @param $ID_Venta <- Referencia al ticket de venta
*/
function inserPedidos($conexion, $ID_Pedido,$Cantidad,$Monto_Final,$ID_Producto,$ID_Venta){
    mysqli_query($conexion,"INSERT INTO pedidos
    values(".$ID_Pedido.",'".$Cantidad."',".$Monto_Final.",".ID_Producto.",".ID_Venta.")")
    or die ("Error al insertar el pedido.");
}


/**
  @brief  Función para Insertar producto
  @param $conexion <- Conexion establecida con la base de datos
  @param $ID_Producto <- Identificador del producto
  @param $Nombre <- Nombre del producto
  @param $Precio <-Precio de venta del producto
  @param $Costo <- Costo de compra del producto
  @param $Stock <- Numero de productos totales
  @param $Cantidad <- Cantidad del producto (Gramos, Piezas, Litros etc.)
  @param $Monto_Total <- Valor monetario del stock
  @param $ID_Categoria <- Referencia la categoria a la que pertenece
  @param $ID_Proveedor <- Referencia el proveedor que lo vende
*/
function inserProducto($conexion, $ID_Producto,$Nombre,$Precio,$Costo,$Stock,$Cantidad,$Monto_Total,$ID_Categoria,$ID_Proveedor){
    mysqli_query($conexion,"INSERT INTO producto
    values(".$ID_Producto.",'".$Nombre."','".$Precio."',".$Costo.",'".$Stock."','".$Cantidad."',".$Monto_Total.",'".$ID_Categoria."','".$ID_Proveedor."')")
    or die ("Error al insertar el producto.");
}


/**
  @brief  Función para Insertar un nuevo Proveedor
  @param $conexion <- Conexion establecida con la base de datos
  @param $ID_Proveedor <- Identificador del proveedor
  @param $Nombre <- Nombre del proveedor
  @param $Telefono <- Numero de contacto del proveedor
*/
function inserProveedor($conexion, $ID_Proveedor,$Nombre,$Telefono){
    mysqli_query($conexion,"INSERT INTO categoria
    values(".$ID_Proveedor.",'".$Nombre."','".$Telefono."')")
    or die ("Error al insertar el proveedor.");
}
/**
  @brief  Función para Insertar un nuevo Vendedor
  @param $conexion <- Conexion establecida con la base de datos
  @param $ID_Vendedor <- ID del vendedor
  @param $Nombre <- Nombre del vendedor
  @param $Ap_Paterno<- Apellido Materno del vendedor
  @param $Ap_Materno <-  Apellido paterno del vendedor
  @param $Telefono <- Numero telefonico del vendedor
  @param $Email <-  Email de contacto del vendedor
  @param $Edad <- Edad del vendedor en años
  @param $ID_Administrador <-  Referencia a quien coordina al vendedor
*/
function inserCat($conexion, $ID_Vendedor,$Nombre,$Ap_Paterno,$Ap_Materno,$Telefono,$Email,$Edad,$ID_Administrador){
    mysqli_query($conexion,"INSERT INTO vendedor
    values(".$ID_Vendedor.",'".$Nombre."','".$Ap_Paterno."',".$Ap_Materno.",'".$Telefono."','".$Email."',".$ID_Administrador.")")
    or die ("Error al insertar el vendedor.");
}
/**
  @brief  Función para Insertar una nueva venta
  @param $conexion <- Conexion establecida con la base de datos
  @param $ID_Venta <- Identificador de la venta
  @param $Fecha <- Fecha en que se efectuo la compra
  @param $Descuento <- Descuento en base al costo total.
  @param $Monto_Final <-  Total de dinero a pagar
  @param $ID_Producto <- Producto comprado
  @param $ID_Administrador <- Referencia al administrador a cargo
  @param $ID_Vendedor <- Vendedor que vendio el producto
*/
function inserVenta($conexion, $ID_Venta,$Fecha,$Descuento,$Monto_Final,$ID_Producto,$ID_Administrador,$ID_Vendedor){
    mysqli_query($conexion,"INSERT INTO venta
    values(".$ID_Venta.",'".$Fecha."','".$Descuento."',".$Monto_Final.",'".$ID_Producto."','".$ID_Administrador."',".$ID_Vendedor.")")
    or die ("Error al insertar la venta.");
}


?>
