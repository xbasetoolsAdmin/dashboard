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
          <link rel="shortcut icon" href="files/img/favicon.ico" />
    <link rel="stylesheet" href="files/bootstrap/3/css/bootstrap.css?1" />
    <link rel="stylesheet" href="layout/css/main.css" />
    <link rel="stylesheet" href="layout/css/util.css" />

    <link rel="stylesheet" href="files/bootstrap/3/css/bootstrap.css?1" />
    <link rel="stylesheet" href="files/bootstrap/3/css/bootstrap.css?1" />
    <link rel="stylesheet" href="files/bootstrap/3/css/bootstrap.css?1" />
    <link rel="stylesheet" href="files/bootstrap/3/css/bootstrap.css?1" />
      
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
     <script src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
     <link rel="stylesheet" href="files/css/flags.css" />
      <Link tel="stylesheet" 
                  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    />
<script src="layout/js/bootstrap.min.js"></script>
<script src="js/jquery.datatables.min.js"></script>
<script src="layout/js/bootbox.min.js"></script>
<script src="layout/js/clipboard.min.js"></script>
    <style>
        body {
            padding-top: 80px
        }
    </style>
    <link rel="stylesheet" href="layout/fonts/iconic/css/material-design-iconic-font.min.css">
    <script src="layout/js/main.js"></script>
    <script type="text/javascript">
        // Notice how this gets configured before we load Font Awesome
        window.FontAwesomeConfig = {
            autoReplaceSvg: false
        }
    </script>
    <style>
        @import url(//fonts.googleapis.com/css?family=Roboto:400);
 
        .navbar-nav .dropdown-menu {
            margin: 0 !important
        }
    </style>

</head>


<style>

