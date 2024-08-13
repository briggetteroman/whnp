-- SQL Script  for project de Sistema de autenticação de teste

create database live_crowsec;

CREATE TABLE `live_crowsec`.`users` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(45) NOT NULL UNIQUE,
    `password` VARCHAR(45) NOT NULL,
    `role` VARCHAR(45) NULL,
    PRIMARY KEY (`id`),
    UNIQUE INDEX `id_UNIQUE` (`id` ASC) VISIBLE
);


INSERT INTO users (`username`, `password`, `role`) VALUES ('admin', 'senha@123', 'admin');
INSERT INTO users (`username`, `password`, `role`) VALUES ('user', '1234', 'user');

