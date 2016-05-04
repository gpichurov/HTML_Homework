select * from employees;

select max(salary), min(salary), avg(salary), sum(salary) from employees;

select sum(commission_pct) from employees;

select sum(commission_pct) from employees where commission_pct is not null;

select sum(t.commission_pct) from
(select commission_pct from employees where commission_pct is not null) as t;

select count(ifnull(commission_pct, 0)) from employees;

select count(*) from employees;

select min(first_name) from employees;

select
	job_id,
	department_id,
	sum(salary)
from employees
group by department_id, job_id;

select * from departments, jobs;

select
	departments.department_name,
    departments.department_id,
    count(distinct employees.job_id) as positions_count,
    group_concat(distinct employees.job_id) as position
from
	departments
inner join employees on (employees.department_id = departments.department_id)
group by departments.department_id having count(distinct employees.job_id) >= 2;

select distinct job_id from employees where department_id = 50;