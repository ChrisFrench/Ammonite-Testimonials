-- -----------------------------------------------------
-- Table `#__testimonials_config`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `#__testimonials_config` (
  `config_id` INT(11) NOT NULL AUTO_INCREMENT ,
  `config_name` VARCHAR(255) NOT NULL ,
  `value` TEXT NOT NULL ,
  PRIMARY KEY (`config_id`) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;

-- -----------------------------------------------------
-- Table `#__testimonials_testimonials`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `#__testimonials_testimonials` (
  `testimonial_id` int NOT NULL AUTO_INCREMENT,
	`user_id` int NOT NULL,
	`user_name` varchar(255) NOT NULL,
	`category_id` int NOT NULL,
	`rating` int NOT NULL,
	`title` varchar(255) NOT NULL,
    `body` varchar(255) NOT NULL,
	`address` varchar(255) NOT NULL,
	`city` varchar(255) NOT NULL,
	`state` varchar(255) NOT NULL,
	`zip` varchar(255) NOT NULL,
	`country` varchar(255) NOT NULL,
	`datecreated` datetime NOT NULL,
	`datemodified` datetime NOT NULL,
	`enabled` tinyint NOT NULL,
  PRIMARY KEY (`testimonial_id`) )
ENGINE = MyISAM
DEFAULT CHARACTER SET = utf8;

