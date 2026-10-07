</main>
<footer class="site-footer">
    <div class="container">
        <div class="site-footer__main">
            <div class="site-footer__brand">
                <a href="<?= e(route_url('home')) ?>" class="site-footer__brand-link" aria-label="Hardsettings - Página inicial">
                    <img src="<?= e(asset_url('img/logo/simbolo.png')) ?>" alt="" class="site-footer__logo-symbol" width="46" height="46" loading="lazy">
                    <span class="site-footer__brand-name">Hardsettings</span>
                </a>
                <p>Estratégia, design e tecnologia para transformar ideias em produtos digitais.</p>
                <div class="site-footer__socials" aria-label="Redes sociais da Hardsettings">
                    <?php foreach ([
                        'whatsapp'=>['WhatsApp','img/social/whatsapp.svg'],
                        'instagram'=>['Instagram','img/social/instagram.svg'],
                        'linkedin'=>['LinkedIn','img/social/linkedin.svg'],
                        'x'=>['X','img/social/x.svg'],
                        'github'=>['GitHub','img/social/github.svg'],
                    ] as $key=>$data): $url=SOCIAL_LINKS[$key] ?? ''; ?>
                        <?php if ($url): ?><a href="<?= e($url) ?>" class="site-footer__social-link site-footer__social-link--<?= e($key) ?>" target="_blank" rel="noopener noreferrer" aria-label="<?= e($data[0]) ?>"><img src="<?= e(asset_url($data[1])) ?>" alt="" class="site-footer__social-icon" width="19" height="19" loading="lazy"><span class="site-footer__social-tooltip" aria-hidden="true"><?= e($data[0]) ?></span></a>
                        <?php else: ?><span class="site-footer__social-link site-footer__social-link--disabled" aria-label="<?= e($data[0]) ?> ainda não configurado"><img src="<?= e(asset_url($data[1])) ?>" alt="" class="site-footer__social-icon" width="19" height="19" loading="lazy"><span class="site-footer__social-tooltip" aria-hidden="true"><?= e($data[0]) ?></span></span><?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <nav class="site-footer__navigation" aria-label="Navegação do rodapé">
                <h2>Navegação</h2>
                <?php foreach (['home'=>'Home','sobre'=>'Sobre','servicos'=>'Serviços','projetos'=>'Projetos','processo'=>'Processo','contato'=>'Contato'] as $route=>$label): ?>
                    <a href="<?= e(route_url($route)) ?>" class="<?= is_active($route) ? 'is-active' : '' ?>" <?= is_active($route) ? 'aria-current="page"' : '' ?>><?= e($label) ?></a>
                <?php endforeach; ?>
            </nav>
            <div class="site-footer__project"><h2>Tem um projeto?</h2><p>Conte sua ideia para a Hardsettings e vamos entender o melhor caminho para transformá-la em produto.</p><a href="<?= e(route_url('contato')) ?>" class="site-footer__cta"><span class="site-footer__cta-label">Iniciar conversa</span><span class="site-footer__cta-icon" aria-hidden="true">↗</span></a></div>
        </div>
        <div class="site-footer__bottom"><p class="site-footer__copyright">© <?= date('Y') ?> Hardsettings. Todos os direitos reservados.</p><div class="site-footer__meta"><span class="site-footer__since">Desde 2025</span><span class="site-footer__meta-separator" aria-hidden="true"></span><p class="site-footer__location"><span class="site-footer__location-dot" aria-hidden="true"></span>São Miguel Paulista, SP — Brasil</p></div></div>
    </div>
</footer>
<script src="<?= e(asset_url('js/app.js')) ?>" defer></script>
</body>
</html>
