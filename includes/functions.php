<?php
require_once __DIR__ . '/../config.php';

function base_path_url(): string
{
    if (BASE_PATH !== '') {
        return '/' . trim(BASE_PATH, '/');
    }

    $script = str_replace('\\', '/', $_SERVER['SCRIPT_NAME'] ?? '');
    $dir = rtrim(dirname($script), '/.');
    return $dir === '' ? '' : $dir;
}

function url_for(string $path = ''): string
{
    $base = base_path_url();
    $path = ltrim($path, '/');
    return $base . ($path !== '' ? '/' . $path : '');
}

function asset_url(string $path): string
{
    return url_for($path);
}

function route_url(string $route): string
{
    $routes = [
        'home' => 'index.php',
        'sobre' => 'sobre.php',
        'servicos' => 'servicos.php',
        'projetos' => 'projetos.php',
        'processo' => 'processo.php',
        'contato' => 'contato.php',
        'contato.enviar' => 'contato.php',
    ];
    return url_for($routes[$route] ?? 'index.php');
}

function e(?string $value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, 'UTF-8');
}

function is_active(string $page): bool
{
    return ($GLOBALS['currentPage'] ?? '') === $page;
}

function render_page_hero(string $eyebrow, string $title, ?string $description = null): void
{
    ?>
<section class="page-hero">
    <div class="page-hero__glow page-hero__glow--blue"></div>
    <div class="page-hero__glow page-hero__glow--purple"></div>
    <div class="container page-hero__container">
        <div class="page-hero__content">
            <span class="page-hero__eyebrow"><?= e($eyebrow) ?></span>
            <h1 class="page-hero__title"><?= $title ?></h1>
            <?php if ($description): ?>
                <p class="page-hero__description"><?= e($description) ?></p>
            <?php endif; ?>
        </div>
        <div class="page-hero__visual" aria-hidden="true">
            <div class="page-hero__grid"></div>
            <div class="page-hero__orbit"></div>
            <img src="<?= e(asset_url('img/logo/fundoPC (46).png')) ?>" alt="" class="page-hero__symbol">
        </div>
    </div>
</section>
    <?php
}

function render_team_card(array $member): void
{
    $socials = [
        ['label'=>'LinkedIn','url'=>$member['linkedin'] ?? '', 'icon'=>'img/social/linkedin.svg'],
        ['label'=>'GitHub','url'=>$member['github'] ?? '', 'icon'=>'img/social/github.svg'],
        ['label'=>'Instagram','url'=>$member['instagram'] ?? '', 'icon'=>'img/social/instagram.svg'],
    ];
    ?>
<article class="team-card">
    <div class="team-card__media">
        <img src="<?= e(asset_url($member['image'])) ?>" alt="Retrato de <?= e($member['name']) ?>" class="team-card__image" loading="lazy" decoding="async">
        <div class="team-card__overlay" aria-hidden="true"></div>
        <span class="team-card__brand">HARDSETTINGS</span>
    </div>
    <div class="team-card__content">
        <span class="team-card__role"><?= e($member['role']) ?></span>
        <h3><?= e($member['name']) ?></h3>
        <?php if (!empty($member['bio'])): ?><p class="team-card__bio"><?= e($member['bio']) ?></p><?php endif; ?>
        <?php if (!empty($member['education']) || !empty($member['skills'])): ?>
        <div class="team-card__details">
            <?php if (!empty($member['education'])): ?>
            <div class="team-card__detail"><span class="team-card__detail-label">Formação</span><span class="team-card__detail-value"><?= e($member['education']) ?></span></div>
            <?php endif; ?>
            <?php if (!empty($member['skills'])): ?>
            <div class="team-card__detail"><span class="team-card__detail-label">Especialidades</span><span class="team-card__detail-value"><?= e($member['skills']) ?></span></div>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <div class="team-card__socials" aria-label="Redes sociais de <?= e($member['name']) ?>">
            <?php foreach ($socials as $social): ?>
                <?php if ($social['url']): ?>
                    <a href="<?= e($social['url']) ?>" target="_blank" rel="noopener noreferrer" class="team-card__social" aria-label="<?= e($social['label'].' de '.$member['name']) ?>">
                        <img src="<?= e(asset_url($social['icon'])) ?>" alt="" aria-hidden="true"><span class="team-card__social-tooltip"><?= e($social['label']) ?></span>
                    </a>
                <?php else: ?>
                    <span class="team-card__social team-card__social--disabled" aria-label="<?= e($social['label'].' de '.$member['name'].' ainda não configurado') ?>">
                        <img src="<?= e(asset_url($social['icon'])) ?>" alt="" aria-hidden="true"><span class="team-card__social-tooltip"><?= e($social['label']) ?></span>
                    </span>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
</article>
    <?php
}
