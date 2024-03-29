<?php

namespace templates;

use libraries\korn\client\KornHeader;

?>

<!DOCTYPE html>
<html lang="th">

<head>
	<!-- Metas -->
	<meta charset="utf-8">

	<title><?php echo KornHeader::getTitle() ?></title>

	<meta name="title" content="<?php echo KornHeader::getTitle() ?>">
	<meta name="author" content="<?php echo KornHeader::getAuthor() ?>">
	<meta name="owner" content="<?php echo KornHeader::getOwner() ?>">

	<meta name="description" content="<?php echo KornHeader::getDescription() ?>">
	<meta name="abstract" content="<?php echo KornHeader::getAbstract() ?>">
	<meta name="keywords" content="<?php echo KornHeader::getKeywords() ?>">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous" defer async></script>

	<!-- CSS -->
	<link href="/static/css/root.css" rel="stylesheet">

	<!-- Script -->
	<script src="/static/js/script.js" defer async></script>

	<!-- Favicon -->
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-config" content="/static/favicons/browserconfig.xml">
	<meta name="theme-color" content="#FFFFFF">

	<link rel="apple-touch-icon" sizes="180x180" href="/static/favicons/apple-touch-icon.png">
	<link rel="icon" sizes="any" href="/static/favicons/favicon.ico">
	<link rel="mask-icon" href="/static/favicons/safari.svg" color="#5BBAD5">
	<link rel="shortcut icon" href="/static/favicons/favicon.ico">

	<link rel="manifest" href="/static/favicons/site.webmanifest">

	<!-- Canonical -->
	<link rel="canonical" href="https://kobcooling.com/<?php echo KornHeader::getCanonical() ?>">
</head>

<body>

<script>0</script>

<!-- Navigation -->
<nav class="navbar navbar-dark sticky-top navbar-expand-lg bg-dark">
	<div class="container-md">
		<a class="navbar-brand" href="/home">kobcooling.com</a>
		<button
			class="navbar-toggler"
			type="button"
			data-bs-toggle="collapse"
			data-bs-target="#navbar"
			aria-controls="navbar"
			aria-expanded="false"
			aria-label="Toggle navigation"
		><span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbar">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="nav-link" href="/home">หน้าหลัก</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/products">สินค้า</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/services">บริการ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/chemicals">เคมีภัณฑ์</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/works">ผลงาน</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="/contact">ติดต่อเรา</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- Main -->
<main class="main-body" id="main">
	<div class="container-md my-4">
		<div class="row gy-3">
