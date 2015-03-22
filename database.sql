CREATE DATABASE IF NOT EXISTS `mpwarfwk`;

USE mpwarfwk;

grant all on `mpwarfwk`.* to 'mpwarfwk'@'localhost' identified by 'mpwarfwkPWD';

CREATE TABLE IF NOT EXISTS `users`
(
	id INT(10) PRIMARY KEY AUTO_INCREMENT,
	user VARCHAR(255) NOT NULL,
	pass VARCHAR(255) NOT NULL
);

insert into users set user = 'Pablo', pass = 'test';
