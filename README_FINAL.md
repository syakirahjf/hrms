<h1> FINAL PROJECT REPORT - Group 2</h1>

## Group Members
- Muhammad Amirul Bin Mohd Ali - 1914119
- Jamilah Syakirah binti Ja'afar - 1818436
- Nurul Yuhana Natasha binti Yusri - 1812590
- Nurhidayu binti Ishak - 1912604
- Muhammad Najmi Saniy bin Mohd Nazul - 1823617

<br>

## Project Title: Company E-Leave Management System

<hr> 

### 1. Introduction

Company E-Leave Management System is a system where an employee in the company can apply for leave via online. This website use login authentication when user accessing the website using their staff id and password. Employee can set the date of their leave and reason for applying the leave. Employee can also view their application to see the detail of the application. On the side of human resource department, they can list out the application made by the employees and the status of application whether it is pending, accepted, or rejected. They will decide whether the application of the employees is approved or not based on the reason given by them.

<br>

### 2. Objectives

- Reduce the usage of paper
- Centralize the company leave application
- Simplifies leave application procedure

<br>

### 3. Features & Functionalities
- Allows multi authentication.
- Allows HR admin to view list of leave applications.
- Allows HR admin to modify application status from pending to approved or declined and undo the action.
- Allows HR admin to delete leave applications.
- Allows HR admin to add, edit and delete staff information.
- Allows Employee to view profile

<br>

### 4. Views, Controllers, Routes and Models
1. VIEWS
  - Layout:
    - master.blade.php
    - messages.blade.php
    - app.blade.php
    - employee.blade.php
  
  - Dashboard:
    - dashboardAdmin.blade.php
    - dashboardEmployee.blade.php

  - Leave Applications:
    - ShowAppList.blade.php
    - ShowLeaveApp.blade.php

<br>

2. CONTROLLERS
  - LeaveController.php
  - DepartmentController.php
  - EmployeeController.php
  - HomeController.php
  - MasterController.php
  - Default authentication controllers

<br>

3. ROUTES
  - web.php

<br>

4. MODELS:
  - Leave
  - Department
  - Employee
  - User

<br>

### 5. Entity Relationship Diagram (ERD)

<br>

>Entity Relationship Diagram (ERD) is a diagram that depicts the relationship between entities in a database. ERD is built on three fundamental concepts:
<ol type="1">
	<li>Entities – represent in the pattern of a rectangle with the name entity set.</li>
	<li>Attributes – the properties of entities represented by ellipses. Each ellipse represents a single attribute and is linked to its corresponding entity.</li>
	<li>Relationship - represent a diamond-shaped box. The line connects all of the entities associated with the relationship. The following are the types of entity relationships:</li>
	<ul>
		<li>One-to-one</li>
		<li>One-to-many</li>
		<li>Many-to-one</li>
		<li>Many-to-many</li>
	</ul>
</ol>  

>The figure below depicts the Entity Relationship Diagram (ERD) for the Company E-Leave Management System, which involves the entities Authentication, HR, Employee, Department, and Leave.

<img src="https://github.com/syakirahjf/hrms/blob/main/resources/ERD.png?raw=true">

### 6. Sequence Diagram

<br>

>Below is the sequence diagram for the web application that generally describes the interactions between the users and the application.

![Sequence diagram image](https://github.com/syakirahjf/hrms/blob/main/resources/Seq%20Diagram.png)

<br>

### 7. Mockup
<br>
<a href="https://hrms.my.canva.site/">Mockup Link</a>
<br>

### 8. References
<li> https://github.com/akashdeepnandi/Employee-Management-System-in-Laravel </li>
<li> https://code.visualstudio.com/docs/languages/markdown </li>
<li> https://github.com/NaveenKumarK219/leave-management-system/blob/master/README.md </li>
<li> https://www.surfsidemedia.in/post/laravel-8-e-commerce-admin-and-user-authentication </li>
