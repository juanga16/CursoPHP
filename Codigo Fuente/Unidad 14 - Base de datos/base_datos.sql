// Creacion de la tabla
CREATE TABLE `peliculas`.`pelicula` ( `id` INT NOT NULL AUTO_INCREMENT , `titulo` VARCHAR(100) NOT NULL , `fecha_estreno` DATETIME NOT NULL , `calificacion` DECIMAL(2,1) NOT NULL , `nacionalidad` VARCHAR(50) NOT NULL , `poster` VARCHAR(100) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

// Insertamos dos registros
INSERT INTO `pelicula` 
(`titulo`, `fecha_estreno`, `calificacion`, `nacionalidad`, `poster`) 
VALUES 
('El señor de los anillos: el retorno del rey', '2003-12-17 16:30', 8.9, 'Nueva Zelanda', 'elretornodelrey.jpg'), 
('Billy Madison', '1995-2-10 20:15', 6.4, 'Estados Unidos', 'billymadison.jpg');