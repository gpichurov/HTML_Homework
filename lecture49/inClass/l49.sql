use season5_php;

INSERT INTO users(name, email, password, created_at)
VALUES ('GeorgiP', 'georgi@abv.bg', 'georgipass', '2016-03-21');

UPDATE (users) SET `password` = MD5('pass') WHERE email = 'georgi@abv.bg';

SELECT (SELECT password FROM users WHERE id = 12) = MD5('pass');

SELECT * FROM users;
SELECT * FROM hero_types;
SELECT * FROM heroes;

INSERT INTO heroes(user_id, hero_type_id, name, health, speed, attack, defence)
VALUES ('12', '1', 'Knight', '0', '0', '0', '0');
INSERT INTO heroes(user_id, hero_type_id, name, health, speed, attack, defence)
VALUES ('12', '2', 'Archer', '0', '0', '0', '0');
INSERT INTO heroes(user_id, hero_type_id, name, health, speed, attack, defence)
VALUES ('12', '3', 'Wizard', '0', '0', '0', '0');

SELECT 
	heroes.name AS 'hero_name',
	hero_types.name AS 'hero_type',
	users.name AS 'user_name'
FROM heroes
LEFT JOIN users ON heroes.user_id = users.id
LEFT JOIN hero_types ON heroes.hero_type_id = hero_types.id
WHERE users.id = 12;

select * from heroes where user_id = 12;

INSERT INTO items (id, user_id, hero_id, name, health, speed, attack, defence)
VALUES (null, 12, 79, 'item1', 100, 200, 100, 200);
INSERT INTO items (id, user_id, hero_id, name, health, speed, attack, defence)
VALUES (null, 12, 80, 'item2', 200, 200, 100, 200);
INSERT INTO items (id, user_id, hero_id, name, health, speed, attack, defence)
VALUES (null, 12, 81, 'item3', 300, 200, 100, 200);

select * from items where user_id = 12;
select * from hero_types;

SELECT 
	heroes.name AS 'hero_name',
	hero_types.name AS 'hero_type',
	users.name AS 'user_name',
    heroes.health + hero_types.health + SUM(items.health) as 'health',
    heroes.speed + hero_types.speed + SUM(items.speed) as 'speed',
    heroes.attack + hero_types.attack + SUM(items.attack) as 'attack',
    heroes.defence + hero_types.defence + SUM(items.defence) as 'defence'
FROM heroes
LEFT JOIN users ON heroes.user_id = users.id
LEFT JOIN hero_types ON heroes.hero_type_id = hero_types.id
LEFT JOIN items ON heroes.id = items.hero_id
WHERE users.id = 12 GROUP BY heroes.id;