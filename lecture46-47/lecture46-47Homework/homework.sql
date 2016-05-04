USE hr;

# 1. Write a SQL query to display all information about all departments.
SELECT * FROM departments; 

# 2. Write a SQL query to find all department names.
SELECT department_name FROM departments;

# 3. Write a SQL query to find the salary of each employee by month, by day
# and hour. Consider that one month has 20 workdays and each workday has 8 work hours.
SELECT 
	CONCAT_WS(' ', first_name, last_name) as full_name,
    salary AS 'month_salary',
    salary / 20 AS 'day_salary',
    salary / 160 AS 'hour_salary'
FROM employees;

# 4. Write a SQL query to find the email addresses of each employee. 
# Consider that the mail domain is mail.somecompany.com. Emails 
# should look like "bernst@mail.somecompany.com". 
# The produced column should be named "Full Email Address".

SELECT CONCAT_WS('', email, '@mail.somecompany.com') FROM employees;

# 5. Write a SQL query to find all different salaries that are paid to
# the employees. Use DISTINCT.

SELECT DISTINCT salary FROM employees;

# 6. Write a SQL query to find all departments and all region
# names, country names and city names as a single list. Use UNION.

SELECT department_name AS 'names' FROM departments
UNION
SELECT region_name FROM regions
UNION
SELECT country_name FROM countries
UNION
SELECT city FROM locations;

# 7. Write a SQL query to find all information about the
# employees whose position is "AC_MGR" (Accounting Manager).

SELECT * FROM employees WHERE job_id = 'AC_MGR';

# 8. Write a SQL query to find the names of all employees whose
# first name starts with "Sa". Use LIKE.

SELECT CONCAT_WS(' ', first_name, last_name) AS full_name 
FROM employees 
WHERE first_name 
LIKE 'Sa%';

# 9. Write a SQL query to find the names of all employees whose last name
# contains the character sequence "ei". Use LIKE

SELECT CONCAT_WS(' ', first_name, last_name) AS full_name 
FROM employees 
WHERE last_name
LIKE '%ei%';

# 10. Write a SQL query to find the names of all employees whose
# salary is in the range [3000...5000]. Use BETWEEN.

SELECT CONCAT_WS(' ', first_name, last_name) AS full_name, salary
FROM employees 
WHERE salary
BETWEEN 3000 AND 5000;

# 11. Write a SQL query to find the names of all employees whose salary
# is in the range [2000...15000] but is not in range [5000 … 10000]. Use MINUS.

SELECT CONCAT_WS(' ', first_name, last_name) AS full_name, salary
FROM employees 
WHERE (salary BETWEEN 2000 AND 15000)
AND NOT salary
BETWEEN 5000 AND 10000;

# 12. Write a SQL query to find the names of all employees whose
# salary is 2500, 4000 or 5000. Use IN.

SELECT CONCAT_WS(' ', first_name, last_name) AS full_name, salary
FROM employees 
WHERE salary IN(2500, 4000, 5000);

# 13. Write a SQL query to find all locations that have no state or
# post code defined. Use IS NULL.

SELECT * FROM locations WHERE state_province IS NULL OR postal_code IS NULL;

# 14. Write a SQL query to find all employees that are paid more
# than 10 000. Order them in decreasing order by salary. Use ORDER BY.

SELECT CONCAT_WS(' ', first_name, last_name) AS full_name, salary
FROM employees 
WHERE salary > 10000
ORDER BY salary DESC;

-- 15. Write a SQL query to find the first 10 employees joined the
-- company (most senior people).

SELECT CONCAT_WS(' ', first_name, last_name) AS full_name, hire_date
FROM employees 
ORDER BY hire_date ASC
LIMIT 10;

-- 16. Write a SQL query to find all departments and the town of
-- their location. Use NATURAL JOIN.

SELECT department_name, city
FROM departments NATURAL JOIN locations;

-- 17. Write a SQL query to find all departments and the town of
-- their location. Use join with USING clause.


-- 18. Write a SQL query to find all departments and the town of
-- their location. Use inner join with ON clause.

-- 19. Modify the last SQL query to include also the name of the
-- manager for each department.

-- 20. Write a SQL query to find all the locations and the
-- departments for each location along with the locations that do not have
-- department. User right outer join.

-- 21. Rewrite the last SQL query to use left outer join.
-- 
-- 22. Rewrite the last query to use WHERE instead of JOIN.
-- 
-- 23. Write a SQL query to find the manager name of each
-- department.
-- 24. Modify the last SQL query to find also the location of each
-- department manager.
-- 
-- 25. Write a SQL query to find the names of all employees from the 
-- departments "Sales" and "Finance" whose hire year is between 1995 and 2000.

-- 26. Find all employees that have worked in the past in the
-- department “Sales”. Use complex join condition.

-- 27. Write a SQL query to display all employees (first and last
-- name) along with their corresponding manager (first and last name). Use self-join.

-- 28. Combine all first names with all last names of the employees
-- with a CROSS JOIN.

-- 29. Write a SQL query to display all employees, along with their
-- job title, department, location, country and region. Use multiple joins.

-- 30. Modify the last SQL query to display also the manager name
-- for each employee or “No manager” in case there is no manager.

-- 31. Write a SQL query to find all employees that have worked in
-- the past at job position “AC_ACCOUNT” and at some time later at job
-- position “AC_MGR”. Display the employees’ names and current job title.
-- Hint: first self-join JOB_HISTORY table, then apply filtering and finally
-- join the result with EMPLOYEES and JOBS tables.