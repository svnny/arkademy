-- table categories
CREATE TABLE `categories` (
  `id` INT(1) NOT NULL PRIMARY KEY,
  `name` VARCHAR(16) NOT NULL,
) ENGINE=InnoDB;

-- insert data
INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'nurhadi'),
(2, 'aldo'),
(3, 'dodi');

-- table hobbies
CREATE TABLE `hobbies` (
  `id` INT(1) NOT NULL PRIMARY KEY,
  `person_id` INT(1) NOT NULL,
  `name` VARCHAR(16) NOT NULL,
   FOREIGN KEY person_hobbies(person_id) REFERENCES categories(id)
) ENGINE=InnoDB;

-- insert data
INSERT INTO `hobbies` (`id`, `person_id`, `name`) VALUES
(1, 1, 'Bird watching'),
(2, 1, 'Martial arts'),
(3, 2, 'Hiking'),
(4, 1, 'Archery'),
(5, 2, 'Beekeeping'),
(6, 3, 'Book restoration');

-- join
SELECT categories.name, categories.id, GROUP_CONCAT(hobbies.name SEPARATOR ', ') AS hobbies_name
FROM categories
LEFT JOIN hobbies ON categories.id=hobbies.person_id
GROUP BY categories.id
ORDER BY categories.id ASC
