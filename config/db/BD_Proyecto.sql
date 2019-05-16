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
USE `BD_Proyecto` ;

-- -----------------------------------------------------
-- Table `BD_Proyecto`.`Generos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`Generos` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`Generos` (
  `idGeneros` INT NOT NULL,
  `Nombre` VARCHAR(45) NULL DEFAULT NULL,
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
  `Email` VARCHAR(100) NULL DEFAULT NULL,
  `Password` VARCHAR(45) NULL DEFAULT NULL,
  `Nombre` VARCHAR(100) NULL,
  PRIMARY KEY (`idUsuariosClub`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`Club`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`Club` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`Club` (
  `Descripción` VARCHAR(100) NULL DEFAULT NULL,
  `Número` INT(9) NULL DEFAULT NULL,
  `idUsuariosClub` INT NOT NULL,
  INDEX `fk_Club_UsuariosClub1_idx` (`idUsuariosClub` ASC),
  CONSTRAINT `fk_Club_UsuariosClub1`
    FOREIGN KEY (`idUsuariosClub`)
    REFERENCES `BD_Proyecto`.`UsuariosClub` (`idUsuariosClub`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`UsuariosArtistas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`UsuariosArtistas` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`UsuariosArtistas` (
  `idUsuariosArtistas` INT NOT NULL AUTO_INCREMENT,
  `Email` VARCHAR(100) NULL,
  `Nombre` VARCHAR(45) NULL,
  `Password` VARCHAR(45) NULL,
  PRIMARY KEY (`idUsuariosArtistas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `BD_Proyecto`.`perfilArtistas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `BD_Proyecto`.`perfilArtistas` ;

CREATE TABLE IF NOT EXISTS `BD_Proyecto`.`perfilArtistas` (
  `idUsuariosArtistas` INT NOT NULL,
  `idGeneros` INT NOT NULL,
  `NombreArtistico` VARCHAR(45) NULL,
  `Descripción` VARCHAR(100) NULL,
  `Número` INT NULL,
  PRIMARY KEY (`idUsuariosArtistas`, `idGeneros`),
  INDEX `fk_UsuariosArtistas_has_Generos_Generos1_idx` (`idGeneros` ASC),
  INDEX `fk_UsuariosArtistas_has_Generos_UsuariosArtistas1_idx` (`idUsuariosArtistas` ASC),
  CONSTRAINT `fk_UsuariosArtistas_has_Generos_UsuariosArtistas1`
    FOREIGN KEY (`idUsuariosArtistas`)
    REFERENCES `BD_Proyecto`.`UsuariosArtistas` (`idUsuariosArtistas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_UsuariosArtistas_has_Generos_Generos1`
    FOREIGN KEY (`idGeneros`)
    REFERENCES `BD_Proyecto`.`Generos` (`idGeneros`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


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
INSERT INTO `BD_Proyecto`.`UsuariosClub` (`idUsuariosClub`, `Email`, `Password`, `Nombre`) VALUES (DEFAULT, 'siatelo@gmail.com', 'siatelo', 'Siatelo');
INSERT INTO `BD_Proyecto`.`UsuariosClub` (`idUsuariosClub`, `Email`, `Password`, `Nombre`) VALUES (DEFAULT, 'gorgroup@gmail.com', 'gor', 'Gorgroup');

COMMIT;


-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`Club`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`Club` (`Descripción`, `Número`, `idUsuariosClub`) VALUES ('asdasdasdasd', 651471031, 1);
INSERT INTO `BD_Proyecto`.`Club` (`Descripción`, `Número`, `idUsuariosClub`) VALUES ('rtetreterte', 651471031, 2);

COMMIT;


-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`UsuariosArtistas`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`UsuariosArtistas` (`idUsuariosArtistas`, `Email`, `Nombre`, `Password`) VALUES (DEFAULT, '06chiquero@gmail.com', 'Pablo Chiquero Mateo', 'todo');

COMMIT;


-- -----------------------------------------------------
-- Data for table `BD_Proyecto`.`perfilArtistas`
-- -----------------------------------------------------
START TRANSACTION;
USE `BD_Proyecto`;
INSERT INTO `BD_Proyecto`.`perfilArtistas` (`idUsuariosArtistas`, `idGeneros`, `NombreArtistico`, `Descripción`, `Número`) VALUES (1, 1, 'Pable', 'asdasdasdasdasdasdas', 651471031);

COMMIT;


select * from usuariosartistas,perfilartistas;


DELETE FROM GENEROS WHERE Idgeneros = 5;
SELECT * FROM GENEROS;

SELECT * FROM Club;

select *from UsuariosClub;

select *from UsuariosClub, Club;


delete from club where idUsuariosClub>0;

-- INSERT EN TABLA CLUB 

INSERT INTO Club (`Descripción`, `Número`, `idUsuariosClub`) VALUES ('Maravilloso local en el que encontraras una especialidad en la comida Indu mientras disfrutas de unos
espectaculos increibles', 651471032, 1);

INSERT INTO Club (`Descripción`, `Número`, `idUsuariosClub`) VALUES ('Maravilloso local en el que encontraras una especialidad en la comida Indu mientras disfrutas de unos
espectaculos increibles', 651471032, 2);

INSERT INTO Club (`Descripción`, `Número`, `idUsuariosClub`) VALUES ('Maravilloso local en el que encontraras una especialidad en la comida Indu mientras disfrutas de unos
espectaculos increibles', 651471032, 3);

INSERT INTO Club (`Descripción`, `Número`, `idUsuariosClub`) VALUES ('Maravilloso local en el que encontraras una especialidad en la comida Indu mientras disfrutas de unos
espectaculos increibles', 651471032, 4);



INSERT INTO `BD_Proyecto`.`UsuariosArtistas` (`idUsuariosArtistas`, `Email`, `Nombre`, `Password`) VALUES (DEFAULT, 'albadm21@gmail.com', 'Alaba Delgado Manzano', 'alba');

delete from UsuariosArtistas where idUsuariosArtistas=8;


