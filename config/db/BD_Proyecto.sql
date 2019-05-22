-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema BD_Proyecto
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `BD_Proyecto` ;

-- -----------------------------------------------------
-- Schema BD_Proyecto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BD_Proyecto` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema examen
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `examen` ;

-- -----------------------------------------------------
-- Schema examen
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `examen` DEFAULT CHARACTER SET utf8 ;
USE `BD_Proyecto` ;

-- -----------------------------------------------------
-- Table `BD_Proyecto`.`Generos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`Generos` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`Generos` (
  `idGeneros` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idGeneros`))
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`Categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`Categorias` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`Categorias` (
  `idCategorias` INT NOT NULL AUTO_INCREMENT,
  `NombreCategoria` VARCHAR(45) NULL DEFAULT NULL,
  `idGeneros` INT NOT NULL,
  PRIMARY KEY (`idCategorias`),
  INDEX `fk_Categorias_Generos1_idx` (`idGeneros` ASC),
  CONSTRAINT `fk_Categorias_Generos1`
    FOREIGN KEY (`idGeneros`)
    REFERENCES `BD_Proyecto`.`Generos` (`idGeneros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`UsuariosClub`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`UsuariosClub` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`UsuariosClub` (
  `idUsuariosClub` INT NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(100) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `Nombre` VARCHAR(100) NOT NULL,
  `Descripción` VARCHAR(100) NULL DEFAULT NULL,
  `Número` INT NULL DEFAULT NULL,
  `Imagen` VARCHAR(200) NULL DEFAULT 'data-user/img/no-image.jpg',
  PRIMARY KEY (`idUsuariosClub`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`UsuariosArtistas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`UsuariosArtistas` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`UsuariosArtistas` (
  `idUsuariosArtistas` INT NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(100) NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `NombreArtistico` VARCHAR(45) NULL,
  `Descripción` VARCHAR(100) NULL,
  `Número` INT NULL,
  `Imagen` VARCHAR(200) NULL DEFAULT 'data-user/img/no-image.jpg',
  `idGenerosart` INT NULL,
  PRIMARY KEY (`idUsuariosArtistas`),
  INDEX `fk_UsuariosArtistas_Generos1_idx` (`idGenerosart` ASC),
  CONSTRAINT `fk_UsuariosArtistas_Generos1`
    FOREIGN KEY (`idGenerosart`)
    REFERENCES `BD_Proyecto`.`Generos` (`idGeneros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `examen` ;

-- -----------------------------------------------------
-- Table `examen`.`empleados`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `examen`.`empleados` ;

CREATE TABLE IF NOT EXISTS `examen`.`empleados` (
  `id` INT(11) NOT NULL,
  `fecha_nacimiento` VARCHAR(10) NOT NULL,
  `apellido` VARCHAR(100) NOT NULL,
  `nombre` VARCHAR(100) NOT NULL,
  `departamento` VARCHAR(1) NOT NULL,
  `fecha_entrada` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`Generos`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (1, 'Musical');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (2, 'Arte');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (3, 'Baile');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (4, 'Interpretación');

COMMIT;


-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`Categorias`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Dj', 1);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Pop', 1);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Rock', 1);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Pintura al oleo', 2);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Pintura luminica', 2);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Pintor de auto retratos', 2);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Break Dance', 3);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Danza moderna', 3);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Zumba', 3);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Actriz', 4);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Actor', 4);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Figurante', 4);

COMMIT;


-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`UsuariosClub`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`UsuariosClub` (`idUsuariosClub`, `Email`, `Password`, `Nombre`, `Descripción`, `Número`, `Imagen`) VALUES (DEFAULT, 'siatelo@gmail.com', 'siatelo', 'Siatelo', NULL, NULL, NULL);
INSERT INTO `BD_Proyecto`.`UsuariosClub` (`idUsuariosClub`, `Email`, `Password`, `Nombre`, `Descripción`, `Número`, `Imagen`) VALUES (DEFAULT, 'gorgroup@gmail.com', 'gor', 'Gorgroup', NULL, NULL, NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`UsuariosArtistas`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`UsuariosArtistas` (`idUsuariosArtistas`, `Email`, `Nombre`, `Password`, `NombreArtistico`, `Descripción`, `Número`, `Imagen`, `idGenerosart`) VALUES (DEFAULT, '06chiquero@gmail.com', 'Pablo Chiquero Mateo', 'todo', NULL, NULL, NULL, NULL, NULL);

COMMIT;

