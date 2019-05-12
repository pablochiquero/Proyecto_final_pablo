-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema BD_Proyecto
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `BD_Proyecto` ;

-- -----------------------------------------------------
-- Schema BD_Proyecto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `BD_Proyecto` DEFAULT CHARACTER SET utf8 ;
USE `BD_Proyecto` ;

-- -----------------------------------------------------
-- Table `BD_Proyecto`.`UsuariosArtistas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`UsuariosArtistas` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`UsuariosArtistas` (
  `Id` INT NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(100) NULL,
  `Password` VARCHAR(45) NULL,
  PRIMARY KEY (`Id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`Generos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`Generos` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`Generos` (
  `idGeneros` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idGeneros`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`Generos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`Generos` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`Generos` (
  `idGeneros` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`idGeneros`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`Categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`Categorias` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`Categorias` (
  `idCategorias` INT NOT NULL AUTO_INCREMENT,
  `NombreCategoria` VARCHAR(45) NULL,
  `idGeneros` INT NOT NULL,
  PRIMARY KEY (`idCategorias`),
  INDEX `fk_Categorias_Generos1_idx` (`idGeneros` ASC),
  CONSTRAINT `fk_Categorias_Generos1`
    FOREIGN KEY (`idGeneros`)
    REFERENCES `BD_Proyecto`.`Generos` (`idGeneros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`Artistas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`Artistas` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`Artistas` (
  `IdUsuarios` INT NOT NULL,
  `Descripción` VARCHAR(100) NULL,
  `Número` INT(9) NULL,
  `idGeneros` INT NOT NULL,
  `Nombre_Apellidos` VARCHAR(100) NULL,
  PRIMARY KEY (`IdUsuarios`),
  INDEX `fk_Artistas_Generos1_idx` (`idGeneros` ASC),
  CONSTRAINT `fk_Artistas_Usuarios1`
    FOREIGN KEY (`IdUsuarios`)
    REFERENCES `BD_Proyecto`.`UsuariosArtistas` (`Id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Artistas_Generos1`
    FOREIGN KEY (`idGeneros`)
    REFERENCES `BD_Proyecto`.`Generos` (`idGeneros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`UsuariosClub`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`UsuariosClub` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`UsuariosClub` (
  `idUsuariosClub` INT NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(100) NULL,
  `Password` VARCHAR(45) NULL,
  PRIMARY KEY (`idUsuariosClub`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`Club`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`Club` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`Club` (
  `idUsuariosClub` INT NOT NULL,
  `Descripción` VARCHAR(100) NULL,
  `Número` INT(9) NULL,
  `Nombre_Club` VARCHAR(100) NULL,
  PRIMARY KEY (`idUsuariosClub`),
  CONSTRAINT `fk_table1_UsuariosClub1`
    FOREIGN KEY (`idUsuariosClub`)
    REFERENCES `BD_Proyecto`.`UsuariosClub` (`idUsuariosClub`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`UsuariosArtistas`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`UsuariosArtistas` (`Id`, `Email`, `Password`) VALUES (DEFAULT, 'Pablo', NULL);
INSERT INTO `BD_Proyecto`.`UsuariosArtistas` (`Id`, `Email`, `Password`) VALUES (DEFAULT, 'asd', NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`Generos`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Musica');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Baile');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Pintura');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Fotografia');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Interpretativo');

COMMIT;


-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`Generos`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Musica');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Baile');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Interpretación');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Pintura');

COMMIT;


-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`Categorias`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (1, 'Rap', 1);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (2, 'Pop', 1);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (3, 'Danza Moderna', 2);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (4, 'Flamenco', 2);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (5, 'Danza del Vientre', 2);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (6, 'Actriz', 3);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (7, 'Actor', 3);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (8, 'Figurante', 3);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (9, 'Pintura al Oleo', 4);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (10, 'Pintura Lumínica', 4);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (11, 'Realismo', 4);

COMMIT;

select*from  UsuariosArtistas;

select*from  UsuariosClub;

delete from UsuariosArtistas where id>0;
