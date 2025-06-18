<?php
session_start();
session_unset(); 
session_destroy(); 
header('location: C:\xampp\htdocs\plant-ecommerce-main\admin\login.php');
?>