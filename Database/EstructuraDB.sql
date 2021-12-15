CREATE DATABASE Punto_Venta;

USE Punto_Venta;

CREATE TABLE Administrador (
ID_Administrador INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(20),
Ap_Paterno VARCHAR(20),
Ap_Materno VARCHAR(20),
Telefono INT(15),
Email VARCHAR(50),
Edad INT(10));

describe administrador;

CREATE TABLE Vendedor(
ID_Vendedor INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(20),
Ap_Paterno VARCHAR(20),
Ap_Materno VARCHAR(20),
Telefono INT(15),
Email VARCHAR(50),
Edad INT(10),
ID_Administrador INT NOT NULL,
FOREIGN KEY (ID_Administrador) REFERENCES Administrador(ID_Administrador));

describe Vendedor;

CREATE TABLE Proveedor(
ID_Proveedor INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(30),
Telefono INT(15),
ID_Administrador INT NOT NULL,
ID_Vendedor INT NOT NULL,
FOREIGN KEY (ID_Administrador) REFERENCES Administrador(ID_Administrador),
FOREIGN KEY (ID_Vendedor) REFERENCES Vendedor(ID_Vendedor));

describe Proveedor;

CREATE TABLE Categoria(
ID_Categoria INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(30),
Descripcion VARCHAR(50));

describe Categoria;


CREATE TABLE Producto(
ID_Producto INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(30),
Precio FLOAT(8,3),
Costo FLOAT(8,3),
Stock FLOAT(8,3),
Cantidad INT(10),
Monto_Total FLOAT(8,3),
ID_Categoria INT NOT NULL,
ID_Proveedor INT NOT NULL,
ID_Administrador INT NOT NULL,
ID_Vendedor INT NOT NULL,
FOREIGN KEY (ID_Categoria) REFERENCES Categoria(ID_Categoria),
FOREIGN KEY (ID_Proveedor) REFERENCES Proveedor(ID_Proveedor),
FOREIGN KEY (ID_Administrador) REFERENCES Administrador(ID_Administrador),
FOREIGN KEY (ID_Vendedor) REFERENCES Vendedor(ID_Vendedor));

describe Producto;

CREATE TABLE Venta(
ID_Venta INT PRIMARY KEY NOT NULL,
Fecha DATE,
Descuento INT(10),
Monto_Final FLOAT(8,2),
ID_Producto INT NOT NULL,
ID_Administrador INT NOT NULL,
ID_Vendedor INT NOT NULL,
FOREIGN KEY (ID_Producto) REFERENCES Producto(ID_Producto),
FOREIGN KEY (ID_Administrador) REFERENCES Administrador(ID_Administrador),
FOREIGN KEY (ID_Vendedor) REFERENCES Vendedor(ID_Vendedor));

describe Venta;

CREATE TABLE Pedidos(
ID_Pedido INT PRIMARY KEY NOT NULL,
Cantidad INT(10),
Monto_Final FLOAT(8,3),
ID_Producto INT NOT NULL,
ID_Venta INT NOT NULL,
FOREIGN KEY (ID_Producto) REFERENCES Producto(ID_Producto),
FOREIGN KEY (ID_Venta) REFERENCES Venta(ID_Venta));

describe Pedidos;

CREATE TABLE Cliente(
ID_Cliente INT PRIMARY KEY NOT NULL,
Nombre VARCHAR(20),
Ap_Paterno VARCHAR(20),
Telefono INT(15),
ID_Administrador INT NOT NULL,
ID_Vendedor INT NOT NULL,
FOREIGN KEY (ID_Administrador) REFERENCES Administrador(ID_Administrador),
FOREIGN KEY (ID_Vendedor) REFERENCES Vendedor(ID_Vendedor));

describe Cliente;

CREATE TABLE Compra(
Ticket VARCHAR(100),
ID_Venta INT NOT NULL,
ID_Cliente INT NOT NULL,
FOREIGN KEY (ID_Venta) REFERENCES Venta(ID_Venta),
FOREIGN KEY (ID_Cliente) REFERENCES Cliente(ID_Cliente));

describe Compra;

CREATE TABLE Direccion(
Estado VARCHAR(50),
Ciudad VARCHAR(50),
Calle VARCHAR(50),
Numero VARCHAR(20),
ID_Administrador INT NOT NULL,
ID_Vendedor INT NOT NULL,
ID_Proveedor INT NOT NULL,
ID_Cliente INT NOT NULL,
FOREIGN KEY (ID_Administrador) REFERENCES Administrador(ID_Administrador),
FOREIGN KEY (ID_Vendedor) REFERENCES Vendedor(ID_Vendedor),
FOREIGN KEY (ID_Proveedor) REFERENCES Proveedor(ID_Proveedor),
FOREIGN KEY (ID_Cliente) REFERENCES Cliente(ID_Cliente));

describe Direccion;

show tables;
