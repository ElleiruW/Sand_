//CREATING A TABLE FOR DATABASE

CREATE TABLE movies (
	id INT AUTO_INCREMENT PRIMARY KEY,
	title VARCHAR(255),
	actors VARCHAR(250),
	director VARCHAR(250),
	producer VARCHAR(250),
	year_of_prod TIME,
	language VARCHAR (220),
	category ENUM,
	storyline TEXT,
	video VARCHAR(255)
)ENGINE = INNODB CHARACTER SET utf8 COLLATE utf8_bin;
