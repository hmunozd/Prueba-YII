-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Versión del servidor: 5.7.36
-- Versión de PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

-- -----------------------------------------------------
-- Schema prueba_yii
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `prueba_yii` DEFAULT CHARACTER SET utf8 ;
USE `prueba_yii` ;

-- -----------------------------------------------------
-- Table `prueba_yii`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` INT(11) NOT NULL AUTO_INCREMENT,
  `cedula` VARCHAR(50) NOT NULL,
  `nombre` VARCHAR(150) NOT NULL,
  `telefono` VARCHAR(20) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `genero` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id_cliente`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `prueba_yii`.`campos_extra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `campos_extra` (
  `id_campo` INT(11) NOT NULL AUTO_INCREMENT,
  `articulo` VARCHAR(100) NULL DEFAULT NULL,
  `precio` FLOAT NULL DEFAULT NULL,
  `metodo_pago` VARCHAR(50) NULL DEFAULT NULL,
  `motivo_negatividad` VARCHAR(100) NULL DEFAULT NULL,
  `id_externo` INT(11) NOT NULL,
  PRIMARY KEY (`id_campo`, `id_externo`),
  CONSTRAINT `fk_campos_extra_clientes`
    FOREIGN KEY (`id_externo`)
    REFERENCES `prueba_yii`.`clientes` (`id_cliente`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
