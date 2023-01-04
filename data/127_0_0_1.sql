CREATE DATABASE IF NOT EXISTS `MYSQL_DATABASE` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `MYSQL_DATABASE`;

CREATE TABLE profiles (
  `id` MEDIUMINT NOT NULL AUTO_INCREMENT,
  `name` varchar(255),
  `age` int,
  `gender` varchar(255),
     PRIMARY KEY (id)
 );

INSERT INTO `profiles` (`name`, `age`,`gender`) VALUES
('Adam', '20','Male'),
('Eve', '19','Female');


GRANT USAGE ON *.* TO `MYSQL_USER`@`%` IDENTIFIED BY PASSWORD 'MYSQL_PASSWORD';

GRANT SELECT, INSERT, UPDATE, DELETE ON `MYSQL_DATABASE`.* TO `MYSQL_USER`@`%`;