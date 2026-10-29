<?php
$activePage = $activePage ?? 'home';
$pageTitle = $pageTitle ?? 'JELITA | Jendela Inovasi Kota Semarang';
?>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#c9001b">
  <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="site-header">
  <div class="nav-wrap">
    <a class="brand" href="index.php" aria-label="JELITA, beranda">
      <span class="brand-seal" aria-hidden="true">✦</span>
      <span><strong>jelita</strong><small>Jendela Inovasi Kota</small></span>
    </a>
    <nav class="main-nav" aria-label="Navigasi utama">
      <a class="<?= $activePage === 'home' ? 'is-active' : '' ?>" href="index.php">Beranda</a>
      <a href="index.php#about">Tentang</a>
      <a href="index.php#categories">Kategori</a>
      <a href="index.php#data">Data Inovasi</a>
      <a class="nav-faq <?= $activePage === 'faq' ? 'is-active' : '' ?>" href="faq.php" <?= $activePage === 'faq' ? 'aria-current="page"' : '' ?>>FAQ</a>
    </nav>
  </div>
</header>
<main>
