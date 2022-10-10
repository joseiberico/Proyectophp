create database proyecto;
use proyecto;
CREATE TABLE `categoria_producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tipo` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ;

CREATE TABLE `producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `descripcion` varchar(120) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `stock` int DEFAULT 0,
  `marca` varchar(40) DEFAULT NULL,
  `idcategoria` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CategoriaP_Producto_idx` (`idcategoria`),
  CONSTRAINT `FK_CategoriaP_Producto` FOREIGN KEY (`idcategoria`) REFERENCES `categoria_producto` (`id`)
);

/*Listado de de productos con categoria*/
select P.id, P.nombre,P.descripcion , P.precio , P.stock , P.marca , C.tipo 
from producto P 
inner join categoria_producto C on C.id = P.idcategoria;
/*Listado de Entradas*/
select E.id , P.nombre , E.descripcion , E.stockE , U.username
from entrada_producto E
inner join producto P on P.id = E.idproducto 
inner join usuario U on U.id = E.id_usuario ;
/*Listado de salidas*/
select S.id , P.nombre , S.descripcion , S.stockS , U.username
from salida_producto S
inner join producto P on P.id = S.idproducto 
inner join usuario U on U.id = S.id_usuario ;


CREATE TABLE `entrada_producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idproducto` int NOT NULL,
  `descripcion` varchar(120) NOT NULL,
  `stockE` int NOT NULL,
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Usuario_Entradaproductos_idx` (`id_usuario`),
  KEY `FK_Producto_Entradaproducto_idx` (`idproducto`),
  CONSTRAINT `FK_Producto_Entradaproducto` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`id`),
  CONSTRAINT `FK_Usuario_Entradaproducto` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ;

ALTER TABLE usuario add id int auto_increment;
CREATE TABLE `usuario` (
  `id` int  auto_increment,
  `nombre` varchar(45) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `estado` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_UNIQUE` (`username`)
) ;


CREATE TABLE `salida_producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idproducto` int DEFAULT NULL,
  `descripcion` varchar(120) DEFAULT NULL,
  `stockS` int DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Producto_Salidaproducto_idx` (`idproducto`),
  KEY `FK_Usuario_Salidaproducto_idx` (`id_usuario`),
  CONSTRAINT `FK_Producto_Salidaproducto` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`id`),
  CONSTRAINT `FK_Usuario_Salidaproducto` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ;