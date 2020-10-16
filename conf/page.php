<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) {
    case 'view_employee':
      include 'pages/employees/view_employee.php';
      break;

    case 'view_detail_employee':
      include 'pages/employees/view_detail_employee.php';
      break;

    case 'add_employee':
      include 'pages/employees/add_employee.php';
      break;

    case 'update_employee';
      include 'pages/employees/update_employee.php';
      break;

    case 'delete_employee';
      include 'pages/employees/delete_employee.php';
      break;


    case 'view_user':
      include 'pages/users/view_user.php';
      break;

    case 'add_user':
      include 'pages/users/add_user.php';
      break;

    case 'update_user';
      include 'pages/users/update_user.php';
      break;

    case 'delete_user';
      include 'pages/users/delete_user.php';
      break;

    case 'change_password_user';
      include 'pages/users/change_password_user.php';
      break;
  }
} else {
  include "pages/dashboard.php";
}
