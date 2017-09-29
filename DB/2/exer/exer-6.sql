SELECT Employee.name, Department.name 
FROM Employee 
LEFT JOIN Department ON Employee.department_id = Department.department_id;