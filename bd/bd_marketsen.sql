-- script para para la base de datos de la appventas

create database bd_market;

use bd_market;

# DATETIME DD-MM-YYYY

create table tb_marca (
	codigo_marca char(5) not null primary key,
    marca varchar(35) not null);
    
create table tb_categoria (
	codigo_categoria char(5) not null primary key,
    categoria varchar(40) not null);
drop table tb_producto;    
create table tb_producto (
	codigo_producto char(5) not null primary key,
    producto varchar(50) not null,
    stock_disponible int,
    costo float,
    ganancia float,
    producto_codigo_marca char(5) not null,
    producto_codigo_categoria char(5) not null,
    foreign key (producto_codigo_marca) references tb_marca(codigo_marca),
    foreign key (producto_codigo_categoria) references tb_categoria(codigo_categoria));
 -- --------------------------------------------------------------------------------
CREATE TABLE tb_metodoPago(
metodo_pago varchar(20) PRIMARY KEY,
NombreDeServicio varchar(100),
TipoDeServicio varchar(50));

CREATE TABLE tb_cliente(
codigo_cliente char(5) PRIMARY KEY,
nombre varchar(50),
apellido_Pa varchar(50),
apellido_Ma varchar(50),
tipo_documento varchar(50),
numero_documento char(20),
email varchar(100),
telefono char(15),
sexo varchar(10),
direccion varchar(200)
);

drop table tb_cliente;

CREATE TABLE tb_boleta(
codigo_boleta char(5) PRIMARY KEY,
nombre_producto varchar(50),
precioTotal float,
codigo_cliente char(5),
FOREIGN KEY (codigo_cliente) REFERENCES tb_cliente(codigo_cliente),
metodo_pago varchar(20),
FOREIGN KEY (metodo_pago) REFERENCES tb_metodopago(metodo_pago),
fecha datetime
);

CREATE TABLE tb_detalleboleta(
codigo_boleta char(5),
FOREIGN KEY (codigo_boleta) REFERENCES tb_boleta(codigo_boleta),
codigo_producto char(5),
FOREIGN KEY (codigo_producto) REFERENCES tb_producto(codigo_producto),
cantidad int,
precioUni float,
descuento char(5),
precioTotal float,
preToDesc float,
codigo_cliente char(5),
FOREIGN KEY (codigo_cliente) REFERENCES tb_cliente(codigo_cliente),
fecha datetime
);

CREATE TABLE tb_incidencias(
codigo_incidencias char(5) PRIMARY KEY,
codigo_cliente char(5),
FOREIGN KEY (codigo_cliente) REFERENCES tb_cliente (codigo_cliente),
descripcion varchar(100),
fecha datetime
);



 create table tb_usuario(
usuario varchar(30) not null,
correo varchar(100) not null,
contra varchar(20)not null);

insert into usuario VALUES
('roy', 'rc@gmail.com', '123'),
('roys', 'rcs@gmail.com', '1234');



-- ---------------------------------------------------------------------------------- 
insert into tb_marca values 
('M0001','Bosch'),
('M0002','Indurama'),
('M0003','LG'),
('M0004','Samsung'), 
('M0005','Oster'),
('M0006','Thomas'),
('M0007','Minari'),
('M0008','Kitchenaid');

drop table tb_marca;

insert into tb_categoria values 
('C0001','Línea Blanca'),
('C0002','Electrodomésticos'),
('C0003','Pequeños Electrodomésticos'), 
('C0004','Tecnología');


insert into tb_producto values
('P0001','Licuadora', '40', '150', '0.50', 'M0005','C0003'),
('P0002','Arrocera', '30', '90', '0.30', 'M0006','C0003'),
('P0003','Waflera', '35', '60', '0.30', 'M0007','C0003'),
('P0004','Batidora', '40', '200', '0.30', 'M0008','C0003'),
('P0005','Cafetera', '40', '100', '0.30', 'M0005','C0003'),
('P0006','Extractor', '40', '160', '0.20', 'M0001','C0003'),
('P0007','Lavadora', '40', '1200', '0.20', 'M0003','C0002'),
('P0008','Refrigeradora', '40', '1800', '0.20', 'M0002','C0001');

INSERT INTO tb_cliente VALUES ('C001','Alexander','Zerpa','Bernal','DNI', '75422154','alex.ZerB@gmail.com', '933652147','M','Urb.Los Portales'),
('C002','Diana','Chavez','Romero','DNI', '78655241','achavez_Dia@gmail.com', '944885471','F','Las Lomas Mz 3 Lt 4'),
('C003','María','Lopez','Vasquez','DNI', '10584725','MariLo23@gmail.com', '944857412','F','Av.Universitaria'),
('C004','Manuel','Jara','Díaz','DNI', '85633241','Manuel.jadi@outlook.com', '933687452','M','Jiron Chasquis 234');

INSERT INTO tb_incidencias VALUES ('I001','C001','',''), ('I002','C002','',''),('I003','C003','Golpeado',CURRENT_TIMESTAMP()), ('I004','C004','','');
TRUNCATE tb_incidencias;

-- Procedimientos almacenados (LISTADOS) 
-- ----------------------------------------------
delimiter $$
create procedure sp_ListarMarcas()
begin
	select * from tb_marca order by codigo_marca;
end; $$

call sp_ListarMarcas();	

-- ----------------------------------------------
delimiter $$
create procedure sp_ListarCategoria()
begin
	select * from tb_categoria order by categoria;
end; $$

call sp_ListarCategoria();

-- ----------------------------------------------
delimiter $$
create procedure sp_ListarProducto()
begin
	select * from tb_producto order by codigo_producto;
end; $$

call sp_ListarProducto();
drop procedure sp_ListarProducto;

-- ----------------------------------------------

delimiter $$
create procedure sp_ListarIncidencias()
begin
	select * from tb_incidencias order by Fecha;
end; $$

call sp_ListarProducto();
drop procedure sp_ListarProducto;

-- ----------------------------------------------

delimiter $$
create procedure sp_ListarClientes()
begin
	select * from tb_cliente order by codigo_cliente;
end; $$

call sp_ListarClientes();
drop procedure sp_ListarProducto;

-- ----------------------------------------------
-- Procedimientos almacenados (Busqueda) 
-- ----------------------------------------------

delimiter $$
create procedure sp_BuscarMarcaPorCodigo(in cod char(5))
begin
	select * from tb_marca where codigo_marca = cod;
end; $$

call sp_BuscarMarcaPorCodigo('M0002');
-- ----------------------------------------------
delimiter $$
create procedure sp_BuscarProductoPorCodigo(in cod char (5))
begin
	select * from tb_producto where codigo_producto = cod;
end; $$

call sp_BuscarProductoPorCodigo('P0003');
drop procedure sp_BuscarProductoPorCodigo;

-- ----------------------------------------------
delimiter $$
create procedure sp_BuscarCategoriaPorCodigo(in cod char(5))
begin
	select * from tb_categoria where codigo_categoria = cod;
end; $$

call sp_BuscarCategoriaPorCodigo('C0002');
-- ----------------------------------------------
delimiter $$
create procedure sp_BuscarClientePorCodigo(in cod char(5))
begin
	select * from tb_cliente where codigo_cliente = cod;
end; $$

call sp_BuscarClientePorCodigo('C002');

-- ----------------------------------------------
delimiter $$
create procedure sp_BuscarProducto(in cod char (5))
begin
	select * from tb_producto where codigo_producto = cod;
end; $$

call sp_BuscarProducto('P0003');
-- ----------------------------------------------
-- Procedimientos almacenados (Editar) 
-- ----------------------------------------------
delimiter $$
create procedure sp_EditarProducto(
	in codprod char (5), in prod varchar (50),
    in stk int, in cst float, in gnc float, codmar char(5), codcat char(5))
begin
	update tb_producto set producto = prod,  stock_disponible= stk, costo = cst ,ganancia = gnc, producto_codigo_marca= codmar, producto_codigo_categoria = codcat
    where codigo_producto = codprod;
end; $$

drop procedure sp_EditarProducto;
call sp_EditarProducto('P0003','Smartphone Galaxy S22',40,2581.47,0.123,'M0002','C0001');
-- ----------------------------------------------
-- Procedimientos almacenados (Borrar) 
-- ----------------------------------------------
delimiter $$
Create procedure sp_BorrarProducto(in codprod char (5)) 
begin
	delete from tb_producto where codigo_producto = codprod;
end ;$$

drop procedure sp_BorrarProducto;    
call sp_BorrarProducto('P0004');

-- ----------------------------------------------
-- Procedimientos almacenados (Insertar) 
-- ----------------------------------------------
delimiter $$
CREATE PROCEDURE sp_InsertarProducto(
in _codigo_producto char(5),
in _producto  varchar(50),
in _stock_disponible int,
in _costo float,
in _ganancia float,
in _producto_codigo_marca char(5),
in _producto_codigo_categoria char(5)
)
BEGIN
	INSERT INTO tb_producto VALUES
    (_codigo_producto, _producto, _stock_disponible, _costo, _ganancia, _producto_codigo_marca, _producto_codigo_categoria);
END; $$
drop procedure sp_InsertarProducto;
-- ----------------------------------------------
delimiter $$
CREATE PROCEDURE sp_InsertarMarca(
in _codigo_marca char(5),
in _marca  varchar(50))
BEGIN
	INSERT INTO tb_marca VALUES
    (_codigo_marca, _marca);
END; $$

-- ----------------------------------------------
delimiter $$
CREATE PROCEDURE sp_InsertarCategoria(
in _codigo_categoria char(5),
in _categoria  varchar(50))
BEGIN
	INSERT INTO tb_categoria VALUES
    (_codigo_categoria, _categoria);
END; $$
drop procedure sp_InsertarCategoria;

-- ----------------------------------------------
delimiter $$
CREATE PROCEDURE sp_InsertarCliente(
in _codigo_cliente char(5),
in _nombre  varchar(50),
in _apellido_Pa varchar(50),
in _apellido_Ma varchar(50),
in _tipo_documento varchar(50),
in _numero_documento char(20),
in _email varchar(100),
in _telefono char(15),
in _sexo varchar(10),
in _direccion varchar(200))
BEGIN
	INSERT INTO tb_cliente VALUES
    (_codigo_cliente, _nombre, _apellido_Pa, _apellido_Ma, _tipo_documento, _numero_documento, _email, _telefono, _sexo, _direccion);
END; $$


drop procedure sp_InsertarCliente;

-- ----------------------------------------------
-- Procedimientos almacenados (Actualizar) 
-- ----------------------------------------------
delimiter $$
CREATE PROCEDURE sp_ActualizarProducto(
in _codigo_producto char(5),
in _producto  varchar(50),
in _stock_disponible int,
in _costo float,
in _ganancia float,
in _producto_codigo_marca char(5),
in _producto_codigo_categoria char(5)
)
BEGIN
	update tb_producto set producto = _producto, 
						   stock_disponible = _stock_disponible, 
                           costo = _costo, 
                           ganancia = _ganancia,
                           producto_codigo_marca = _producto_codigo_marca, 
                           producto_codigo_categoria = _producto_codigo_categoria 
	where codigo_producto = _codigo_producto;
END; $$

drop procedure sp_ActualizarProducto;
-- ----------------------------------------------
delimiter $$
CREATE PROCEDURE sp_ActualizarMarca(
in _codigo_marca char(5),
in _marca  varchar(50))
BEGIN
	update tb_marca set marca = _marca, producto_codigo_categoria = _producto_codigo_categoria 
	where codigo_marca = _codigo_marca;
END; $$
-- ----------------------------------------------
delimiter $$
CREATE PROCEDURE sp_ActualizarCategoria(
in _codigo_categoria char(5),
in _categoria  varchar(50))
BEGIN
	update tb_categoria set categoria = _categoria 
	where codigo_categoria = _codigo_categoria;
END; $$
-- ----------------------------------------------
delimiter $$
CREATE PROCEDURE sp_ActualizarCliente(
in _codigo_cliente char(5),
in _nombre  varchar(50),
in apellido_Pa varchar(50),
in apellido_Ma varchar(50),
in tipo_documento varchar(50),
in numero_documento char(20),
in email varchar(100),
in telefono char(15),
in sexo varchar(10),
in direccion varchar(200))
BEGIN
	update tb_cliente set nombre = _nombre, 
						  apellido_Pa = _apellidoPa, 
                          apellido_Ma = _apellidoMa, 
                          tipo_documento = _tipo_documento,
						  numero_documento = _numero_documento, 
						  email = _email,
                          telefono = _telefono,
                          sexo = _sexo,
                          direccion = _direccion
	where codigo_cliente = _codigo_cliente;
END; $$
-- ----------------------------------------------
-- Procedimientos almacenados (Filtrar) 
-- ----------------------------------------------
delimiter $$
Create procedure sp_FiltrarProducto(in valor varchar (50)) 
begin
	select * from tb_producto where producto like concat(valor, '%');
end ;$$

call sp_FiltrarProducto('c');

drop procedure sp_FiltrarMarca;
-- ----------------------------------------------
delimiter $$
Create procedure sp_FiltrarMarca(in valorm varchar (50)) 
begin
	select * from tb_marca where marca like concat(valorm, '%');
end ;$$

call sp_FiltrarMarca('i');
-- ---------------------------------------------------
delimiter $$
Create procedure sp_FiltrarCategoria(in valorc varchar (50)) 
begin
	select * from tb_categoria where categoria like concat(valorc, '%');
end ;$$

drop procedure sp_FiltrarCategoria;
call sp_FiltrarCategoria('l');

-- ----------------------------------------------


