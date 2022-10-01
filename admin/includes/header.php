<!DOCTYPE html>
<html lang="en">

<?php
$title = $title ?? 'Admin panel';
?>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= $title ?></title>
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/evo-calendar.min.css" rel="stylesheet">
	<link href="css/evo-calendar.royal-navy.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
</head>

<body>
  <?php if ($title === 'Dashboard') { ?>
	<div class="container-fluid header-bar">
    <h3>Welcome To Admin Panel</h3>
	</div>
  <?php } ?>