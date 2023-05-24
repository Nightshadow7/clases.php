CREATE DATABASE campus2;
DROP TABLE IF EXISTS camper;
CREATE TABLE camper(
    id INT NOT NULL AUTO_INCREMENT,
    nombres VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    logros VARCHAR(255) NOT NULL,
    review VARCHAR(255) NOT NULL,
    ser SMALLINT(2) NOT NULL,
    ingles VARCHAR(255) NOT NULL,
    skills SMALLINT(2) NOT NULL,
    asistencia VARCHAR(255) NOT NULL,
    especialidad VARCHAR(255) NOT NULL,
    PRIMARY KEY(id) 
);
