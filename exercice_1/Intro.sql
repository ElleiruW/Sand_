<?php
//CREATE A TABLE
CREATE TABLE movies (
    id INT AUTO_INCREMENT PRIMARY KEY;
    firstname VARCHAR(255);
    lastname VARCHAR(250),
    address VARCHAR(250),
    postcode INT(4),
    city ENUM,
    email VARCHAR (220),
    telephone INT(12),
    DOB DATETIME()
    )ENGINE = INNODB CHARACTER SET utf8 COLLATE utf8_bin;
    
    
    