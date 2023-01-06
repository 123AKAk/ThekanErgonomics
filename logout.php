<?php 
ob_start();
session_start();
include 'admin/inc/config.php';
unset($_SESSION['customer']);
// echo '<script>window.location.replace("'.BASE_URL.'+login.php");"<script>';
header("location: login.php"); 
?>