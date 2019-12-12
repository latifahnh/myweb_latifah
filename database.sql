/* Create Database and Table */
use latifahdb;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `major` varchar(100),
  PRIMARY KEY  (`id`)
);