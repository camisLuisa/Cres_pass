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
	`ddd_1` VARCHAR(2) NOT NULL,
	`tel_1` VARCHAR(11) NOT NULL,
	`ddd_2` VARCHAR(2) NULL DEFAULT NULL,
	`tel_2` VARCHAR(11) NULL DEFAULT NULL,
	/* Adress */
	`cep` VARCHAR(50) NOT NULL,
	`street` VARCHAR(50) NOT NULL,
	`number` VARCHAR(50) NOT NULL,
	`complement` VARCHAR(50) NULL DEFAULT NULL,
	`neighborhood` VARCHAR(50) NOT NULL,
	`city` VARCHAR(50) NOT NULL,
	`state` VARCHAR(50) NOT NULL,
	`reference` VARCHAR(50) NULL DEFAULT NULL,
	/* Additional */
	`signup_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)ENGINE INNODB DEFAULT CHAR SET 'utf8' AUTO_INCREMENT=10;

INSERT INTO `user`(`email`, `password`, `name`, `last_name`, `type`, `cpf`, `rg`, `ddd_1`, `tel_1`, `cep`, `street`, `number`, `neighborhood`, `city`, `state`)
VALUES ('admin@admin.com', '123', 'Admin', 'da Silva', 'outro', '419.430.324-59', '37.372.845-1', '81', '98765-4321', '52071-200', 'Rua Baturité', '183', 'Monteiro', 'Recife', 'PE'),
('test@test.com', '123', 'Test', 'Almeida', 'outro', '493.612.164-90', '13.984.716-9', '81', '94321-8765', '51190-250', 'Rua José Fernandes Portugal', '625', 'Imbiribeira', 'Recife', 'PE');


/* --------------------------------------------------
 * TABLE `store`
 * --------------------------------------------------
 */
CREATE TABLE IF NOT EXISTS `store`(
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
	CONSTRAINT `fk_user_store_user_id`
		FOREIGN KEY (`user_id`)
		REFERENCES `user`(`id`),
	CONSTRAINT `fk_user_store_store_id`
		FOREIGN KEY (`store_id`)
		REFERENCES `store`(`id`)
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
 * TABLE `store_product`
 * --------------------------------------------------
 */
CREATE TABLE IF NOT EXISTS `store_product`(
	`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
	`store_id` INT(11) NOT NULL,
	`product_id` INT(11) NOT NULL,
	CONSTRAINT `fk_store_product_store_id`
		FOREIGN KEY (`store_id`)
		REFERENCES `store`(`id`),
	CONSTRAINT `fk_store_product_product_id`
		FOREIGN KEY (`product_id`)
		REFERENCES `product`(`id`)
)ENGINE INNODB DEFAULT CHAR SET 'utf8' AUTO_INCREMENT=10;