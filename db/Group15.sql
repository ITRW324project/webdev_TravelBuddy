-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema new_schema1
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema Group15_Database_Travel
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Group15_Database_Travel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Group15_Database_Travel` ;
USE `Group15_Database_Travel` ;

-- -----------------------------------------------------
-- Table `Group15_Database_Travel`.`Users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Group15_Database_Travel`.`Users` (
  `User_ID` INT NOT NULL,
  `User_username` VARCHAR(45) NOT NULL,
  `User_surname` VARCHAR(45) NOT NULL,
  `User_firstname` VARCHAR(45) NULL DEFAULT NULL,
  `User_email` VARCHAR(45) NOT NULL,
  `User_password` VARCHAR(45) NOT NULL,
  `User_Contact` INT(10) NOT NULL,
  `User_Town` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`User_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Group15_Database_Travel`.`Plan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Group15_Database_Travel`.`Plan` (
  `Plan_ID` INT NOT NULL,
  `Plan_Name` VARCHAR(45) NULL DEFAULT NULL,
  `User_ID` INT NOT NULL,
  PRIMARY KEY (`Plan_ID`),
  INDEX `fk_Plan_Users1_idx` (`User_ID` ASC),
  CONSTRAINT `fk_Plan_Users1`
    FOREIGN KEY (`User_ID`)
    REFERENCES `Group15_Database_Travel`.`Users` (`User_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Group15_Database_Travel`.`Locations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Group15_Database_Travel`.`Locations` (
  `Loc_ID` INT NOT NULL,
  `Loc_name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Loc_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Group15_Database_Travel`.`Attractions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Group15_Database_Travel`.`Attractions` (
  `Attr_ID` INT NOT NULL,
  `Attr_name` VARCHAR(45) NOT NULL,
  `Attr_Description` TEXT NOT NULL,
  PRIMARY KEY (`Attr_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Group15_Database_Travel`.`Hotels`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Group15_Database_Travel`.`Hotels` (
  `Hotel_ID` INT NOT NULL,
  `Hotel_Name` VARCHAR(45) NOT NULL,
  `Hotel_Description` TEXT NOT NULL,
  PRIMARY KEY (`Hotel_ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Group15_Database_Travel`.`Plan_Hotels`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Group15_Database_Travel`.`Plan_Hotels` (
  `Hotels_ID` INT NOT NULL,
  `Plan_ID` INT NOT NULL,
  `Booking_ref` VARCHAR(45) NOT NULL,
  `Start_time` INT NOT NULL,
  `End_time` INT NULL,
  PRIMARY KEY (`Hotels_ID`, `Plan_ID`),
  INDEX `fk_Plan_Hotels_Plan1_idx` (`Plan_ID` ASC),
  CONSTRAINT `fk_Plan_Hotels_Hotels1`
    FOREIGN KEY (`Hotels_ID`)
    REFERENCES `Group15_Database_Travel`.`Hotels` (`Hotel_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Plan_Hotels_Plan1`
    FOREIGN KEY (`Plan_ID`)
    REFERENCES `Group15_Database_Travel`.`Plan` (`Plan_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Group15_Database_Travel`.`Reviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Group15_Database_Travel`.`Reviews` (
  `Review_ID` INT NOT NULL,
  `Review` VARCHAR(45) NULL DEFAULT NULL,
  `Plan_ID` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `Heading` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`Review_ID`),
  INDEX `fk_Reviews_Plan1_idx` (`Plan_ID` ASC),
  CONSTRAINT `fk_Reviews_Plan1`
    FOREIGN KEY (`Plan_ID`)
    REFERENCES `Group15_Database_Travel`.`Plan` (`Plan_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Group15_Database_Travel`.`Plan_Attractions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Group15_Database_Travel`.`Plan_Attractions` (
  `Plan_ID` INT NOT NULL,
  `Attr_ID` INT NOT NULL,
  PRIMARY KEY (`Plan_ID`, `Attr_ID`),
  INDEX `fk_Plan_Attractions_Attractions1_idx` (`Attr_ID` ASC),
  CONSTRAINT `fk_Plan_Attractions_Plan1`
    FOREIGN KEY (`Plan_ID`)
    REFERENCES `Group15_Database_Travel`.`Plan` (`Plan_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Plan_Attractions_Attractions1`
    FOREIGN KEY (`Attr_ID`)
    REFERENCES `Group15_Database_Travel`.`Attractions` (`Attr_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Group15_Database_Travel`.`Plan_Loc`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Group15_Database_Travel`.`Plan_Loc` (
  `Plan_ID` INT NOT NULL,
  `Loc_ID` INT NOT NULL,
  `Start_time` INT NULL,
  `End_time` INT NULL,
  PRIMARY KEY (`Plan_ID`, `Loc_ID`),
  INDEX `fk_Plan_Loc_Locations1_idx` (`Loc_ID` ASC),
  CONSTRAINT `fk_Plan_Loc_Plan1`
    FOREIGN KEY (`Plan_ID`)
    REFERENCES `Group15_Database_Travel`.`Plan` (`Plan_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Plan_Loc_Locations1`
    FOREIGN KEY (`Loc_ID`)
    REFERENCES `Group15_Database_Travel`.`Locations` (`Loc_ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
