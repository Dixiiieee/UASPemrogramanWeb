<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
</head>
<body>
    <div id="container">
    <header>
    <img src="<?= base_url('/logo1.png');?>" title="S Logo" alt="S Logo" width="75"style="float: left; margin-right:10px;">
    <h1>Iuran Kas RT 22</h1>
    </header>
    <nav>
        <a href="<?= base_url('/warga');?>"class="active">Daftar Warga</a>
        <a href="<?= base_url('/admin/kas');?>">Daftar Kas Warga</a>
        <a href="<?= base_url('/admin/warga');?>">Halaman Admin</a>
    </nav>
    <section id="wrapper">
        <section id="main"> 