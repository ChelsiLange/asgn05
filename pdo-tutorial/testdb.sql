CREATE DATABASE IF NOT EXISTS `testdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `testdb`;

DROP TABLE IF EXISTS `names`;

CREATE TABLE IF NOT EXISTS `names` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `postcode` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

TRUNCATE TABLE `names`;

INSERT INTO `names` (`id`, `firstname`, `lastname`, `postcode`) VALUES
(1, 'Andy', 'Smith', 'SN1 3QA'),
(2, 'Brian', 'Tomkins', 'TR45 8IY'),
(3, 'Colin', 'Edwards', 'SW1 1AA'),
(4, 'Dippy', 'Donut', 'No fixed abode'),
(5, 'Emma', 'McElroy', 'ED23 7YH'),
(6, 'Freddie', 'Finkelstein', 'FL19 1TY'),
(7, 'Godfrey', 'Gorbals', 'GY12 8UK'),
(8, 'Hettie', 'Hatrack', 'SE99 9RW');