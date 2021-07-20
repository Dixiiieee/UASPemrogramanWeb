<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/adminstyle.css');?>">
</head>
<body>
    <div id="container">
    <header>
    <img src="<?= base_url('/logo1.png');?>" title="S Logo" alt="S Logo" width="75"style="float: left; margin-right:10px;"><h1>Halaman Admin</h1>
    </header>
    <navbar>
        <a href="<?= base_url('/admin/warga');?>" class="active">Data Warga</a>
        <a href="<?= base_url('/admin/iuran');?>">Data Iuran Warga</a>
        <a href="<?= base_url('/warga');?>">Halaman User</a>
    </navbar>
    <section id="wrapper">