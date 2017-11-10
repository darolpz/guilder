-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema proyecto
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `proyecto` DEFAULT CHARACTER SET utf8 ;
USE `proyecto` ;

-- -----------------------------------------------------
-- Table `proyecto`.`carrera`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`carrera` (
  `idcarrera` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(80) NOT NULL,
  PRIMARY KEY (`idcarrera`),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `proyecto`.`rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`rol` (
  `idrol` INT(11) NOT NULL AUTO_INCREMENT,
  `rol` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idrol`),
  UNIQUE INDEX `rol_UNIQUE` (`rol` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `proyecto`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`user` (
  `iduser` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(25) NOT NULL,
  `password` VARCHAR(64) NOT NULL,
  `is_active` TINYINT(1) NOT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `legajo` INT(11) NULL DEFAULT NULL,
  `carrera_idcarrera` INT(11) NULL DEFAULT NULL,
  `rol_idrol` INT(11) NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `UNIQ_2DA17977F85E0677` (`username` ASC),
  INDEX `fk_user_carrera1_idx` (`carrera_idcarrera` ASC),
  INDEX `fk_user_rol1_idx` (`rol_idrol` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  CONSTRAINT `fk_user_carrera1`
    FOREIGN KEY (`carrera_idcarrera`)
    REFERENCES `proyecto`.`carrera` (`idcarrera`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_user_rol1`
    FOREIGN KEY (`rol_idrol`)
    REFERENCES `proyecto`.`rol` (`idrol`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `proyecto`.`materiaElegida`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`materiaElegida` (
  `idmateriaElegida` INT NOT NULL,
  `nombreMateria` VARCHAR(50) NOT NULL,
  `codigoMateria` INT(11) NOT NULL,
  `turno` INT(11) NOT NULL,
  PRIMARY KEY (`idmateriaElegida`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`encuesta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`encuesta` (
  `idEncuesta` INT(11) NOT NULL,
  `fecha` DATETIME NOT NULL,
  `idOpcion` INT(11) NOT NULL,
  PRIMARY KEY (`idEncuesta`),
  INDEX `idOpcion_idx` (`idOpcion` ASC),
  CONSTRAINT `idOpcion`
    FOREIGN KEY (`idOpcion`)
    REFERENCES `proyecto`.`materiaElegida` (`idmateriaElegida`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`encuestaUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`encuestaUsuario` (
  `idEncuesta` INT(11) NOT NULL,
  `idUsuario` INT(11) NOT NULL,
  `idencuestaUsuario` INT(11) NOT NULL,
  INDEX `idUsuario_idx` (`idUsuario` ASC),
  INDEX `idEncuesta_idx` (`idEncuesta` ASC),
  PRIMARY KEY (`idencuestaUsuario`),
  CONSTRAINT `idUsuario`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `proyecto`.`user` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idEncuesta`
    FOREIGN KEY (`idEncuesta`)
    REFERENCES `proyecto`.`encuesta` (`idEncuesta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `proyecto`.`materia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`materia` (
  `idmateria` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(80) NOT NULL,
  `codigo` VARCHAR(10) NOT NULL,
  `coordinador` VARCHAR(45) NULL DEFAULT NULL,
  `anio` INT(1) NOT NULL,
  PRIMARY KEY (`idmateria`),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC),
  UNIQUE INDEX `codigo_UNIQUE` (`codigo` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 53
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `proyecto`.`carrera_has_materia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`carrera_has_materia` (
  `carrera_idcarrera` INT(11) NOT NULL,
  `materia_idmateria` INT(11) NOT NULL,
  PRIMARY KEY (`carrera_idcarrera`, `materia_idmateria`),
  INDEX `fk_carrera_has_materia_materia1_idx` (`materia_idmateria` ASC),
  INDEX `fk_carrera_has_materia_carrera1_idx` (`carrera_idcarrera` ASC),
  CONSTRAINT `fk_carrera_has_materia_carrera1`
    FOREIGN KEY (`carrera_idcarrera`)
    REFERENCES `proyecto`.`carrera` (`idcarrera`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carrera_has_materia_materia1`
    FOREIGN KEY (`materia_idmateria`)
    REFERENCES `proyecto`.`materia` (`idmateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `proyecto`.`comision`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`comision` (
  `idcomision` INT(11) NOT NULL AUTO_INCREMENT,
  `numero` INT(11) NOT NULL,
  `profesor` VARCHAR(45) NULL DEFAULT NULL,
  `cuatrimestre` INT(11) NOT NULL,
  `year` INT(4) NOT NULL,
  `materia_idmateria` INT(11) NOT NULL,
  PRIMARY KEY (`idcomision`),
  INDEX `fk_comision_materia1_idx` (`materia_idmateria` ASC),
  CONSTRAINT `fk_comision_materia1`
    FOREIGN KEY (`materia_idmateria`)
    REFERENCES `proyecto`.`materia` (`idmateria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `proyecto`.`dia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`dia` (
  `iddia` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iddia`),
  UNIQUE INDEX `nombre_UNIQUE` (`nombre` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `proyecto`.`horario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`horario` (
  `idhorario` INT(11) NOT NULL AUTO_INCREMENT,
  `inicio` TIME NOT NULL,
  `fin` TIME NOT NULL,
  `comision_idcomision` INT(11) NOT NULL,
  `dia_iddia` INT(11) NOT NULL,
  PRIMARY KEY (`idhorario`),
  INDEX `fk_horario_comision_idx` (`comision_idcomision` ASC),
  INDEX `fk_horario_dia1_idx` (`dia_iddia` ASC),
  CONSTRAINT `fk_horario_comision`
    FOREIGN KEY (`comision_idcomision`)
    REFERENCES `proyecto`.`comision` (`idcomision`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_horario_dia1`
    FOREIGN KEY (`dia_iddia`)
    REFERENCES `proyecto`.`dia` (`iddia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `proyecto`.`token`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `proyecto`.`token` (
  `idtoken` INT(11) NOT NULL AUTO_INCREMENT,
  `creado` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `token` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`idtoken`),
  UNIQUE INDEX `token_UNIQUE` (`token` ASC))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
