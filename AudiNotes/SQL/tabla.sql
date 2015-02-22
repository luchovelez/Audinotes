CREATE  TABLE IF NOT EXISTS `elementos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NULL ,
  `orden` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `orden_UNIQUE` (`orden` ASC) )
ENGINE = InnoDB;
INSERT INTO  `elementos` (`id`, `nombre`, `orden`)
VALUES 
	(NULL ,  'luis velez',  '1'), 
	(NULL ,  'Monica',  '2'), 
	(NULL ,  'Tres Cuartos',  '3'), 
	(NULL ,  'unal',  '4'), 
	(NULL ,  'perro',  '5');