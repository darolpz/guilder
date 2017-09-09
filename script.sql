-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `symfony` DEFAULT CHARACTER SET utf8 ;
-- -----------------------------------------------------
-- Schema symfony
-- -----------------------------------------------------
USE `symfony` ;

-- -----------------------------------------------------
-- Table `mydb`.`Materia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `symfony`.`Materia` (
  `idMateria` INT AUTO_INCREMENT NOT NULL,
  `Nombre` VARCHAR(45) NOT NULL,
  `Codigo` VARCHAR(10) NOT NULL,
  `Coordinador` VARCHAR(45) NULL,
  PRIMARY KEY (`idMateria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Comision`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `symfony`.`Comision` (
  `idComision` INT NOT NULL AUTO_INCREMENT,
  `Materia` INT NOT NULL,
  `Numero` INT NOT NULL,
  `Profesor` VARCHAR(45) NULL,
  `Cuatrimestre` INT NOT NULL,
  `Year` INT NOT NULL,
  PRIMARY KEY (`idComision`),
  INDEX `fk_Comision_Materia_idx` (`Materia` ASC),
  CONSTRAINT `fk_Comision_Materia`
    FOREIGN KEY (Materia) REFERENCES Materia(idMateria)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Carrera`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `symfony`.`Carrera` (
  `idCarrera` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCarrera`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Dia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `symfony`.`Dia` (
  `idDia` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idDia`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Horario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `symfony`.`Horario` (
  `idHorario` INT NOT NULL AUTO_INCREMENT,
  `Inicio` TIME(0) NOT NULL,
  `Fin` TIME(0) NOT NULL,
  `Dia` INT NOT NULL,
  `Comision` INT NOT NULL,
  PRIMARY KEY (`idHorario`),
  INDEX `fk_Horario_Dia1_idx` (`Dia` ASC),
  INDEX `fk_Horario_Comision1_idx` (`Comision` ASC),
  CONSTRAINT `fk_Horario_Dia1`
    FOREIGN KEY (`Dia`)
    REFERENCES `mydb`.`Dia` (`idDia`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Horario_Comision1`
  FOREIGN KEY (Comision) REFERENCES Comision(idComision)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Token`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `symfony`.`Token` (
  `idToken` INT NOT NULL AUTO_INCREMENT,
  `Creado` TIMESTAMP(0) NOT NULL,
  `Token` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`idToken`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
