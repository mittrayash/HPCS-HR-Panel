<?php


	session_start();
	require_once('../includes/function.inc.php');
	checkLoginStatusAndRedirect();
	require_once('../includes/config.inc.php');

	require_once('../html/header.html');

?>

<body id="body" background="..\images\lb.jpg">
<div class="container">

    <div class="panel panel-default col-sm-12  panel-primary" id="panel1">
        <div class="panel-heading"><span class="heading2"><b>Add New Employee</b></span></div>
        <div class="panel-body col-sm-offset-2">