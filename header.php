<?php
session_start();
date_default_timezone_set('UTC');
include "includes/config.php";
if (!isset($_SESSION['sname']) and !isset($_SESSION['spass'])) {
    header("location: login.php");
    exit();
}
$usrid = mysqli_real_escape_string($dbcon, $_SESSION['sname']);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=10; IE=9; IE=8; IE=7; IE=EDGE" /> 
 <meta name="referrer" content="no-referrer" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>FeluxShop</title>
    <link rel="stylesheet" href="files/bootstrap/3/css/bootstrap.css?1" />
    <link rel="stylesheet" href="layout/css/main.css" />
    <link rel="stylesheet" href="layout/css/util.css" />

    <link rel="stylesheet" href="files/bootstrap/3/css/bootstrap.css?1" />
    <link rel="stylesheet" href="files/bootstrap/3/css/bootstrap.css?1" />
    <link rel="stylesheet" href="files/bootstrap/3/css/bootstrap.css?1" />
<link rel="stylesheet" href="files/bootstrap/3/css/bootstrap.css?1" />

<link rel="stylesheet" href="files/css/flags.css" />

<Link tel="stylesheet" 
    
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    
    />


<script type="text/javascript" src="files/js/jquery.js?1"></script>
<script type="text/javascript" src="files/bootstrap/3/js/bootstrap.js?1"></script>
<script type="text/javascript" src="files/js/sorttable.js"></script>
<script type="text/javascript" src="files/js/table-head.js?3334"></script>
<script type="text/javascript" src="files/js/bootbox.min.js"></script>
<script type="text/javascript" src="files/js/clipboard.min.js"></script>

<link rel="shortcut icon" href="files/img/favicon.ico" />


</head>


<style>

