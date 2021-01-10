-- MySQL Script generated by MySQL Workbench
-- Sun Jan 10 11:11:23 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema HORSCH_DB
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema HORSCH_DB
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `HORSCH_DB` DEFAULT CHARACTER SET utf8 ;
USE `HORSCH_DB` ;

-- -----------------------------------------------------
-- Table `HORSCH_DB`.`carts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HORSCH_DB`.`carts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `amount` INT NOT NULL,
  `cartcol` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `HORSCH_DB`.`customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HORSCH_DB`.`customers` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fname` VARCHAR(45) NOT NULL,
  `lname` VARCHAR(45) NOT NULL,
  `gender` CHAR NOT NULL,
  `phone` VARCHAR(20) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `HORSCH_DB`.`administrators`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HORSCH_DB`.`administrators` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `HORSCH_DB`.`accounts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HORSCH_DB`.`accounts` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NOT NULL,
  `passwordHash` VARCHAR(255) NOT NULL,
  `carts_id` INT NOT NULL,
  `customers_id` INT NOT NULL,
  `administrators_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_accounts_carts1_idx` (`carts_id` ASC),
  INDEX `fk_accounts_customers1_idx` (`customers_id` ASC),
  INDEX `fk_accounts_administrators1_idx` (`administrators_id` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  CONSTRAINT `fk_accounts_carts1`
    FOREIGN KEY (`carts_id`)
    REFERENCES `HORSCH_DB`.`carts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_accounts_customers1`
    FOREIGN KEY (`customers_id`)
    REFERENCES `HORSCH_DB`.`customers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_accounts_administrators1`
    FOREIGN KEY (`administrators_id`)
    REFERENCES `HORSCH_DB`.`administrators` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `HORSCH_DB`.`orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HORSCH_DB`.`orders` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(15) NOT NULL,
  `datetime` DATETIME NOT NULL,
  `amount` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `HORSCH_DB`.`images`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HORSCH_DB`.`images` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `filename` VARCHAR(255) NOT NULL,
  `altText` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `HORSCH_DB`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HORSCH_DB`.`products` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(2000) NOT NULL,
  `category` VARCHAR(45) NOT NULL,
  `stdPrice` DECIMAL(10,2) NOT NULL,
  `images_id` INT NOT NULL,
  PRIMARY KEY (`id`, `images_id`),
  INDEX `fk_products_images1_idx` (`images_id` ASC),
  CONSTRAINT `fk_products_images1`
    FOREIGN KEY (`images_id`)
    REFERENCES `HORSCH_DB`.`images` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = '	';


-- -----------------------------------------------------
-- Table `HORSCH_DB`.`orders_has_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HORSCH_DB`.`orders_has_products` (
  `orders_id` INT NOT NULL,
  `products_id` INT NOT NULL,
  PRIMARY KEY (`orders_id`, `products_id`),
  INDEX `fk_orders_has_products_products1_idx` (`products_id` ASC),
  INDEX `fk_orders_has_products_orders1_idx` (`orders_id` ASC),
  CONSTRAINT `fk_orders_has_products_orders1`
    FOREIGN KEY (`orders_id`)
    REFERENCES `HORSCH_DB`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_products_products1`
    FOREIGN KEY (`products_id`)
    REFERENCES `HORSCH_DB`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `HORSCH_DB`.`carts_has_products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HORSCH_DB`.`carts_has_products` (
  `carts_id` INT NOT NULL,
  `products_id` INT NOT NULL,
  PRIMARY KEY (`carts_id`, `products_id`),
  INDEX `fk_carts_has_products_products1_idx` (`products_id` ASC),
  INDEX `fk_carts_has_products_carts1_idx` (`carts_id` ASC),
  CONSTRAINT `fk_carts_has_products_carts1`
    FOREIGN KEY (`carts_id`)
    REFERENCES `HORSCH_DB`.`carts` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_carts_has_products_products1`
    FOREIGN KEY (`products_id`)
    REFERENCES `HORSCH_DB`.`products` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `HORSCH_DB`.`addresses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HORSCH_DB`.`addresses` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `street` VARCHAR(64) NULL,
  `streetnumber` VARCHAR(10) NULL,
  `city` VARCHAR(64) NULL,
  `zip` VARCHAR(5) NULL,
  `reciever` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `HORSCH_DB`.`orders_has_addresses`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `HORSCH_DB`.`orders_has_addresses` (
  `orders_id` INT NOT NULL,
  `address_id` INT NOT NULL,
  PRIMARY KEY (`orders_id`, `address_id`),
  INDEX `fk_orders_has_address_address1_idx` (`address_id` ASC),
  INDEX `fk_orders_has_address_orders1_idx` (`orders_id` ASC),
  CONSTRAINT `fk_orders_has_address_orders1`
    FOREIGN KEY (`orders_id`)
    REFERENCES `HORSCH_DB`.`orders` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_orders_has_address_address1`
    FOREIGN KEY (`address_id`)
    REFERENCES `HORSCH_DB`.`addresses` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
