use hr;

select * from employees;
select * FROM locations;
SELECT * FROM departments;

SELECT * FROM (SELECT
	concat_ws(' ', e.first_name, e.last_name) AS full_name,
    d.department_name,
    l.city,
    c.country_name
FROM
	employees e
LEFT JOIN departments d ON (e.department_id = d.department_id)
LEFT JOIN locations l ON (d.location_id = l.location_id)
LEFT JOIN countries c ON(l.country_id = c.country_id)) AS employees_worldwide;

SELECT
	concat_ws(' ', e.first_name, e.last_name) AS full_name,
	concat_ws(' ', m.first_name, m.last_name) AS manager_full_name
FROM employees e
LEFT JOIN employees m ON (m.employee_id = e.manager_id)
WHERE m.employee_id = 100;