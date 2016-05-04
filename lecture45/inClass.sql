USE hr;

SELECT
	first_name AS 'Име',
    last_name AS Lastname,
    email AS 'Поща',
    1 + 1
FROM
	employees;
    
SELECT DISTINCT first_name from employees where first_name = 'John';

select 1 + 1;

select version();

SELECT
	first_name,
    last_name,
    concat_ws(' ', first_name, last_name) as full_name,
    salary,
    salary * 0.1 as bonus
FROM employees;

select 1 + ifnull(null, 0);

select job_id, job_title from jobs
union
select region_id, region_name from regions;

SELECT
	*
FROM employees

WHERE department_id = 40;