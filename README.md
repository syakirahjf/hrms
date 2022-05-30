# Final Project Proposal-Group 2

## Group Members
- Muhammad Amirul Bin Mohd Ali - 1914119
- Jamilah Syakirah binti Ja'afar - 1818436
- Nurul Yuhana Natasha binti Yusri - 1812590
- Nurhidayu binti Ishak - 1912604
- Muhammad Najmi Saniy bin Mohd Nazrul - 1823617

<br>

## Project Title: Company E-Leave Management System

<hr>

### 1. Introduction

> Introduction goes here

<br>

### 2. Objectives

- Obj 1
- Obj 2
- Obj 3

<br>

### 3. Features and Functionalities

- Obj 1
- Obj 2
- Obj 3

<br>

### 4. Views, Controllers, Routes and Models

<li> Views </li> 
<ol> 
  <li> Login Page </li>
      >A view for users either employee or HR to login the system
  <li> Homepage </li>
	    >A view to display a sidebar with menus and list of departments or staff profile 
  <li> UpdateApplication Page </li>
      >A view for HR that contains list of leave applications and to update status for the application whether it is accepted or cancelled.
  <li> ApplyLeaveApplication Page </li> 
      >A view that contains a form for employee to apply leave 
  <li> ViewLeaveApplication Page </li>
      >To display all the leave application made by the employees
  <li> AddStaff Page </li>
      >A view for HR that contains form to add new staff 
</ol>
<br> 

<li> Controllers </li> 
> A Controller is that which controls the behavior of a request. It handles the requests coming from the Routes. In Laravel, a controller is in the ‘app/Http/Controllers’ directory.
<ol> 
  <li> EmployeeController </li>
  <li> HR_Controller </li>
  <li> DepartmentController </li>
  <li> LeaveAppController </li>
  <li> ConfirmPasswordController </li>
  <li> ForgotPasswordController </li>
  <li> LoginController </li>
  <li> ResetPasswordController </li> 
  <li> VerificationController </li>
</ol>
<br>

<li> Routes </li>
<ol> 
  <li> route/web.php </li> 
      >The routes/web.php file defines routes that are for our web interface.
  <li> route/api.php </li>
      >Routes defined in the routes/api.php file are nested within a route group by the RouteServiceProvider. 
</ol>
<br>

<li> Models </li>
>Model is a class that represents the logical structure and relationship of underlying data table. 
>All of the Laravel Models are stored in the main app directory.
<ol> 
  <li> Employee </li>
  <li> HR </li>
  <li> Department </li>
  <li> Leave </li>
  <li> Authentication </li>
</ol>

### 5. ER Diagram

<br>
<img src="https://github.com/syakirahjf/hrms/blob/main/resources/ERD.png?raw=true">

### 6. Sequence Diagram

<br>

>Below is the sequence diagram for the proposed web application that generally describes the interactions between the users and the application.

![Sequence diagram image](https://github.com/syakirahjf/hrms/blob/main/resources/HRSM%20Seq%20Diagram.png)

<br>

### 7. Mock-Up
<br>
<a href="https://hrms.my.canva.site/">Mockup Link</a>

### 8. References
<li> https://github.com/akashdeepnandi/Employee-Management-System-in-Laravel </li>
<li> https://code.visualstudio.com/docs/languages/markdown </li>
<li> https://github.com/NaveenKumarK219/leave-management-system/blob/master/README.md </li>
<li> https://www.surfsidemedia.in/post/laravel-8-e-commerce-admin-and-user-authentication </li>

