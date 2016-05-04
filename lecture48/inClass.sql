use ittalents_php;

create table `people` (
	`id` int(11) unsigned not null auto_increment,
    `name` varchar(255) not null ,
    `date_of_birth` DATE NOT NULL,
    primary key(`id`)
);

SHOW CREATE TABLE people;

INSERT INTO people VALUES(null, 'Ivan', '1987-12-15');

INSERT INTO people (date_of_birth, name) VALUES('1987-12-15', 'Dragan');

SELECT * FROM people;

TRUNCATE people;

CREATE TABLE people_duplicate LIKE people;

SHOW CREATE TABLE people_duplicate;

INSERT INTO people_duplicate SELECT * FROM people;
SELECT * FROM people
UNION ALL
SELECT * FROM people_duplicate;

SELECT * FROM people_duplicate;

INSERT INTO people(date_of_birth, name) VALUES
('1987-12-15', 'Penka'),
('1987-12-15', 'Maria');

UPDATE people SET name='Yordan' WHERE id = 2;

DELETE FROM people WHERE id = 1;