<!DOCTYPE html>

<head>
	<!-- Metadata -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $config_web->short_title; ?> | <?= $title; ?></title>

	<!-- CSS Files -->
    <link href="<?= base_url(); ?>assets/bootstrap-4.4.1-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

	<!-- Your Custom CSS -->
	<link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/css/home.css">
</head>

<body>
	<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">Gebang-Berkreasi.com</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mx-auto mt-2 mt-lg-0 ">
                <li class="nav-item <?= $mode == 'index' ? 'active' : '' ;?>">
                    <a class="nav-link" href="<?= base_url(); ?>home">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item <?= $mode == 'blog' ? 'active' : '' ;?>">
                    <a class="nav-link" href="<?= base_url(); ?>home/blog">Blog</a>
                </li>
                <li class="nav-item <?= $mode == 'gallery' ? 'active' : '' ;?>">
                    <a class="nav-link" href="<?= base_url(); ?>home/gallery">Galeri</a>
                </li>
                <li class="nav-item <?= $mode == 'about' ? 'active' : '' ;?>">
                    <a class="nav-link" href="<?= base_url(); ?>home/tentang">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar Endline -->
