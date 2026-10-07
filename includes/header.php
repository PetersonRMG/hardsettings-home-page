<?php
require_once __DIR__ . '/functions.php';
$pageTitle = $pageTitle ?? 'Hardsettings — Tecnologia, Design e Soluções Digitais';
$pageDescription = $pageDescription ?? 'A Hardsettings cria sites, sistemas, aplicações e experiências digitais sob medida.';
$ogTitle = $ogTitle ?? $pageTitle;
$ogDescription = $ogDescription ?? $pageDescription;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= e($pageTitle) ?></title>
    <meta name="description" content="<?= e($pageDescription) ?>">
    <meta name="author" content="Hardsettings">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="<?= e((isset($_SERVER['HTTPS']) ? 'https' : 'http').'://'.($_SERVER['HTTP_HOST'] ?? '').($_SERVER['REQUEST_URI'] ?? '')) ?>">
    <link rel="icon" href="<?= e(asset_url('img/logo/favicon.ico')) ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= e(asset_url('img/logo/favicon-16x16.png')) ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= e(asset_url('img/logo/favicon-32x32.png')) ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= e(asset_url('img/logo/favicon-96x96.png')) ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= e(asset_url('img/logo/apple-icon-180x180.png')) ?>">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:site_name" content="Hardsettings">
    <meta property="og:title" content="<?= e($ogTitle) ?>">
    <meta property="og:description" content="<?= e($ogDescription) ?>">
    <meta property="og:image" content="<?= e(asset_url('img/logo/fundoPC (46).png')) ?>">
    <meta name="theme-color" content="#050505">
    <link rel="stylesheet" href="<?= e(asset_url('css/style.css')) ?>">
</head>
<body>
<a href="#conteudo-principal" class="skip-link">Ir para o conteúdo</a>
<header class="site-header" data-header>
    <div class="container site-header__inner">
        <a href="<?= e(route_url('home')) ?>" class="site-header__brand" aria-label="Hardsettings - Página inicial">
            <img src="<?= e(asset_url('img/logo/simbolo.png')) ?>" alt="" class="site-header__logo-symbol" width="42" height="42">
            <span class="site-header__brand-name">Hardsettings</span>
        </a>
        <nav class="site-nav" id="main-navigation" data-menu aria-label="Navegação principal">
            <a href="<?= e(route_url('home')) ?>" class="<?= is_active('home') ? 'is-active' : '' ?>">Home</a>
            <a href="<?= e(route_url('sobre')) ?>" class="<?= is_active('sobre') ? 'is-active' : '' ?>">Sobre</a>
            <a href="<?= e(route_url('servicos')) ?>" class="<?= is_active('servicos') ? 'is-active' : '' ?>">Serviços</a>
            <a href="<?= e(route_url('projetos')) ?>" class="<?= is_active('projetos') ? 'is-active' : '' ?>">Projetos</a>
            <a href="<?= e(route_url('processo')) ?>" class="<?= is_active('processo') ? 'is-active' : '' ?>">Processo</a>
            <a href="<?= e(route_url('contato')) ?>" class="<?= is_active('contato') ? 'is-active' : '' ?>">Contato</a>
        </nav>
        <div class="site-header__actions">
            <a href="<?= e(route_url('contato')) ?>" class="header-cta">Iniciar projeto <span aria-hidden="true">↗</span></a>
            <button type="button" class="menu-toggle" data-menu-toggle aria-controls="main-navigation" aria-expanded="false" aria-label="Abrir menu"><span></span><span></span></button>
        </div>
    </div>
</header>
<div class="menu-backdrop" data-menu-backdrop aria-hidden="true"></div>
<main id="conteudo-principal">
