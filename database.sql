/* Color Tones
 * primary_blue = #87ceeb
 * primary_pink = #f8c1c6
 * secondary_blue = #6ca4bc
 * secondary_pink = #c69a9e
 */

/* --------------------------------------------------
 * DATABASE `_api`
 * --------------------------------------------------
 * Drop any database with the same name and
 * create a new one and select it.
 */
DROP DATABASE IF EXISTS `crescend_main_db`;
CREATE DATABASE `crescend_main_db` CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `crescend_main_db`;

/* --------------------------------------------------
 * TABLE `user`
 * --------------------------------------------------
 */
CREATE TABLE IF NOT EXISTS `user`(
	`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
	/* Login infos */
	`email` VARCHAR(50) NOT NULL UNIQUE,
	`password` VARCHAR(255) NOT NULL,
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
VALUES ('admin@admin.com', '$2y$10$5/oe0cWGklbKntGamphVR.7ZusFckOuefh3aInUG598ldYV07C4fi', 'Admin', 'da Silva', 'outro', '419.430.324-59', '37.372.845-1', '81', '98765-4321', '52071-200', 'Rua Baturité', '183', 'Monteiro', 'Recife', 'PE'),
('test@test.com', '$2y$10$D1G2WAqEp3T846fz6sQBNe9sgnxRJII9dwv7mTyJ/THkrawDt4uQ6', 'Test', 'Almeida', 'outro', '493.612.164-90', '13.984.716-9', '81', '94321-8765', '51190-250', 'Rua José Fernandes Portugal', '625', 'Imbiribeira', 'Recife', 'PE');


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
		REFERENCES `user`(`id`)
		ON DELETE CASCADE
		ON UPDATE CASCADE,
	CONSTRAINT `fk_user_store_store_id`
		FOREIGN KEY (`store_id`)
		REFERENCES `store`(`id`)
		ON DELETE CASCADE
		ON UPDATE CASCADE
)ENGINE INNODB DEFAULT CHAR SET 'utf8' AUTO_INCREMENT=10;

/* --------------------------------------------------
 * TABLE `category`
 * --------------------------------------------------
 */
CREATE TABLE IF NOT EXISTS `category`(
	`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
	`name` VARCHAR(50) 
)ENGINE INNODB DEFAULT CHAR SET 'utf8';

INSERT INTO `category`(`id`, `name`) VALUES
	(1, "Acessórios"),(2, "Alimentação"),(3, "Banho e Higiene"),(4, "Brinquedos"),(5, "Cama e Decoração"),
	(6, "Carrinho e Cia"),(7, "Festas Infantis"),(8, "Livros e DVD`s"),(9, "Móveis"),(10, "Roupas"),
	(11, "Sapatos");

/* --------------------------------------------------
 * TABLE `product`
 * --------------------------------------------------
 */
CREATE TABLE IF NOT EXISTS `product`(
	`id` INT(11) PRIMARY KEY AUTO_INCREMENT,
	`store_id` INT(11) NOT NULL,
	`name` VARCHAR(50) NOT NULL UNIQUE,
	`mark` VARCHAR(50) NULL DEFAULT NULL,
	`category_id` INT(11) NOT NULL,
	`gender` ENUM('meninos', 'meninas', 'unisex') NOT NULL,
	`use_time` ENUM('nunca usado', 'em bom estado', 'com marcas de uso') NOT NULL,
	`original_price` DECIMAL(7,2) NULL DEFAULT NULL,
	`price` DECIMAL(7,2) NOT NULL,
	`shipping_local` TINYINT(1) NOT NULL,
	`shipping_delivery` TINYINT(1) NOT NULL,
	`description` VARCHAR(255) NOT NULL,
	`length` DECIMAL(7,2) NOT NULL,
	`width` DECIMAL(7,2) NOT NULL,
	`height` DECIMAL(7,2) NOT NULL,
	`length_opened` DECIMAL(7,2) NULL DEFAULT NULL,
	`width_opened` DECIMAL(7,2) NULL DEFAULT NULL,
	`height_opened` DECIMAL(7,2) NULL DEFAULT NULL,
	`weight` DECIMAL(5,2) NOT NULL,
	CONSTRAINT `fk_product_store_id`
		FOREIGN KEY (`store_id`)
		REFERENCES `store`(`id`)
		ON DELETE CASCADE
		ON UPDATE CASCADE,
	CONSTRAINT `fk_product_category_id`
		FOREIGN KEY (`category_id`)
		REFERENCES `category`(`id`)
		ON DELETE CASCADE
		ON UPDATE CASCADE
)ENGINE INNODB DEFAULT CHAR SET 'utf8' AUTO_INCREMENT=10;
