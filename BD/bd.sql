/*create database proyecto;
use proyecto;
CREATE TABLE `categoria_producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ;
insert into categoria_producto values (null,'telefonos');
CREATE TABLE `producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(40) DEFAULT NULL,
  `descripcion` varchar(120) DEFAULT NULL,
  `precio` double DEFAULT NULL,
  `stock` int DEFAULT NULL,
  `marca` varchar(40) DEFAULT NULL,
  `idcategoria` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_CategoriaP_Producto_idx` (`idcategoria`),
  CONSTRAINT `FK_CategoriaP_Producto` FOREIGN KEY (`idcategoria`) REFERENCES `categoria_producto` (`id`)
);
insert into producto values(null,'mazamorra','añañin',20,10,'el tilin',1);
select * from categoria_producto;
CREATE TABLE `entrada_producto` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idproducto` int NOT NULL,
  `descripcion` varchar(120) NOT NULL,
  `stock` int NOT NULL,
  `precio_entrada` double NOT NULL,
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
  `stock` int DEFAULT NULL,
  `id_usuario` int DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_Producto_Salidaproducto_idx` (`idproducto`),
  KEY `FK_Usuario_Salidaproducto_idx` (`id_usuario`),
  CONSTRAINT `FK_Producto_Salidaproducto` FOREIGN KEY (`idproducto`) REFERENCES `producto` (`id`),
  CONSTRAINT `FK_Usuario_Salidaproducto` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
) ;