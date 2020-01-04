CREATE DATABASE IF NOT EXISTS `cats`;

USE `cats`;
SET NAMES utf8;

CREATE TABLE IF NOT EXISTS `owners`
(
    `id`   INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL
) ENGINE InnoDB;

CREATE TABLE IF NOT EXISTS `cats`
(
    `id`       INT AUTO_INCREMENT PRIMARY KEY,
    `name`     VARCHAR(255) NOT NULL,
    `ownerId` INT,
    FOREIGN KEY (`ownerId`)
        REFERENCES `owners` (`id`)
        ON DELETE SET NULL
        ON UPDATE CASCADE
) ENGINE InnoDB;

INSERT INTO `owners` (`name`)
VALUES ('Brad'),
       ('Mark'),
       ('Daisy');

INSERT INTO `cats` (`name`, `ownerId`)
VALUES ('Molly', 1),
       ('Felix', NULL),
       ('Sooty', 3),
       ('Tigger', 3),
       ('Misty', 3);

