/*SQL Database*/
CREATE DATABASE IF NOT EXISTS Notes_Database;
CREATE TABLE Notes_Table (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Title VARCHAR(100) NOT NULL UNIQUE,
    Notes VARCHAR(max) NOT NULL,
    Author  VARCHAR(100) NOT NULL
)ENGINE=InnoDB DEFAULT CHARSET=latin1;
  
 