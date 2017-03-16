/* --------------------------------------------------
 * DATABASE `_api`
 * --------------------------------------------------
 * Drop any database with the same name and
 * create a new one and select it.
 */
DROP DATABASE IF EXISTS `cres_pass`;
CREATE DATABASE `cres_pass` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `cres_pass`;

/* --------------------------------------------------
 * TABLE `test`
 * --------------------------------------------------
 * Use this table for testing.
 */
CREATE TABLE IF NOT EXISTS `test`(
	`test_id` INT(11) PRIMARY KEY AUTO_INCREMENT,
	`test_name` VARCHAR(50) NULL DEFAULT NULL
)ENGINE INNODB DEFAULT CHAR SET 'utf8' AUTO_INCREMENT=10;

INSERT INTO `test` (`test_name`) VALUES ('teste1'),('teste2'),('teste3'),('teste4'),('teste5');

/* --------------------------------------------------
 * TABLE `user`
 * --------------------------------------------------
 */
CREATE TABLE IF NOT EXISTS `user`(
	`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
	/* Login infos */
	`email` VARCHAR(50) NOT NULL UNIQUE,
	`password` VARCHAR(50) NOT NULL,
	/* Personal infos */
	`name` VARCHAR(50) NOT NULL,
	`last_name` VARCHAR(50) NOT NULL,
	`type` ENUM('pai', 'mae', 'outro') NOT NULL,
	`cpf` VARCHAR(15) NOT NULL,
	`rg` VARCHAR(15) NOT NULL,
	`ddd_1` TINYINT(2) NOT NULL,
	`tel_1` INT(11) NOT NULL,
	`ddd_2` TINYINT(2) NULL DEFAULT NULL,
	`tel_2` INT(11) NULL DEFAULT NULL,
	/* Adress */
	`cep` VARCHAR(50) NOT NULL,
	`street` VARCHAR(50) NOT NULL,
	`number` VARCHAR(50) NOT NULL,
	`complement` VARCHAR(50) NOT NULL,
	`neighborhood` VARCHAR(50) NOT NULL,
	`city` VARCHAR(50) NOT NULL,
	`state` VARCHAR(50) NOT NULL,
	`reference` VARCHAR(50) NOT NULL,
	/* Additional */
	`signup_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE INNODB DEFAULT CHAR SET 'utf8' AUTO_INCREMENT=10;

/* --------------------------------------------------
 * TABLE `store`
 * --------------------------------------------------
 */
CREATE TABLE IF NOT EXISTS `store`(
	`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL UNIQUE
)ENGINE INNODB DEFAULT CHAR SET 'utf8' AUTO_INCREMENT=10;

/* --------------------------------------------------
 * TABLE `product`
 * --------------------------------------------------
 */
CREATE TABLE IF NOT EXISTS `product`(
	`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(50) NOT NULL UNIQUE
)ENGINE INNODB DEFAULT CHAR SET 'utf8' AUTO_INCREMENT=10;

/* --------------------------------------------------
 * TABLE `user_store`
 * --------------------------------------------------
 */
CREATE TABLE IF NOT EXISTS `user_store`(
	`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
	`user_id` INT(11) NOT NULL,
	`store_id` INT(11) NOT NULL,
	CONSTRAINT `fk_user_id`
		FOREIGN KEY (`user_id`)
		REFERENCES `user`(`id`),
	CONSTRAINT `fk_store_id`
		FOREIGN KEY (`store_id`)
		REFERENCES `store`(`id`)
)ENGINE INNODB DEFAULT CHAR SET 'utf8' AUTO_INCREMENT=10;