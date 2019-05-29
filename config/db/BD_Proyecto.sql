-- MySQL Workbench Forward Engineering
SET SQL_SAFE_UPDATES = 0;
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
USE `BD_Proyecto` ;

-- -----------------------------------------------------
-- Table `BD_Proyecto`.`Generos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`Generos` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`Generos` (
  `idGeneros` INT(11) NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NULL DEFAULT NULL,
  PRIMARY KEY (`idGeneros`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`Categorias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`Categorias` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`Categorias` (
  `idCategorias` INT(11) NOT NULL AUTO_INCREMENT,
  `NombreCategoria` VARCHAR(45) NULL DEFAULT NULL,
  `idGeneros` INT(11) NOT NULL,
  PRIMARY KEY (`idCategorias`),
  INDEX `fk_Categorias_Generos1_idx` (`idGeneros` ASC),
  CONSTRAINT `fk_Categorias_Generos1`
    FOREIGN KEY (`idGeneros`)
    REFERENCES `BD_Proyecto`.`Generos` (`idGeneros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 24
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`UsuariosArtistas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`UsuariosArtistas` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`UsuariosArtistas` (
  `idUsuariosArtistas` INT(11) NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(100) NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `NombreArtistico` VARCHAR(45) NULL DEFAULT NULL,
  `Descrip` VARCHAR(100) NULL DEFAULT NULL,
  `Num` INT(11) NULL DEFAULT NULL,
  `Imagen` VARCHAR(200) NOT NULL DEFAULT 'data-user/img/no-image.jpg',
  `idCategorias` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`idUsuariosArtistas`),
  INDEX `fk_UsuariosArtistas_Categorias1_idx` (`idCategorias` ASC),
  CONSTRAINT `fk_UsuariosArtistas_Categorias1`
    FOREIGN KEY (`idCategorias`)
    REFERENCES `BD_Proyecto`.`Categorias` (`idCategorias`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`UsuariosClub`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`UsuariosClub` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`UsuariosClub` (
  `idUsuariosClub` INT(11) NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(100) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `Nombre` VARCHAR(100) NOT NULL,
  `NombreLocal` VARCHAR(100) NULL DEFAULT NULL,
  `Descrip` VARCHAR(100) NULL DEFAULT NULL,
  `Num` INT(11) NULL DEFAULT NULL,
  `Imagen` VARCHAR(200) NULL DEFAULT 'data-user/img/no-image.jpg',
  PRIMARY KEY (`idUsuariosClub`))
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`Generos`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Musical');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Arte');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Interpretación');
INSERT INTO `BD_Proyecto`.`Generos` (`idGeneros`, `Nombre`) VALUES (DEFAULT, 'Baile');

COMMIT;


-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`Categorias`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Dj', 1);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Pop', 1);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Pintura al oleo', 2);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Pintura luminica', 2);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Actriz', 3);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Actor', 3);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Danza moderna', 4);
INSERT INTO `BD_Proyecto`.`Categorias` (`idCategorias`, `NombreCategoria`, `idGeneros`) VALUES (DEFAULT, 'Break-Dance', 4);

COMMIT;

select * from usuariosartistas;

select * from UsuariosClub;



select * from usuariosartistas join categorias on usuariosartistas.idCategorias = categorias.idCategorias;

SELECT * FROM `UsuariosArtistas` WHERE Nombre LIKE concat('%', 'Rafael', '%') ;