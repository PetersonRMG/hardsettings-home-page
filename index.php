<?php
$currentPage = 'home';
$pageTitle = 'Hardsettings — Tecnologia, Design e Produtos Digitais';
$pageDescription = 'A Hardsettings une estratégia, design e tecnologia para criar sites, sistemas, aplicações e experiências digitais sob medida.';
$ogTitle = 'Hardsettings — Tecnologia, Design e Produtos Digitais';
$ogDescription = 'Transformamos ideias em produtos digitais com estratégia, design e tecnologia.';
require __DIR__ . '/includes/header.php';
?>



    

    <section
        class="hero"
        aria-labelledby="hero-title"
    >

        <div class="hero__glow hero__glow--blue"></div>
        <div class="hero__glow hero__glow--purple"></div>


        <div class="container hero__container">

            <div class="hero__content">

                <div class="hero__eyebrow">

                    <span class="hero__eyebrow-dot"></span>

                    Agência digital & tecnologia

                </div>


                <h1
                    id="hero-title"
                    class="hero__title"
                >

                    Ideias grandiosas

                    <span>
                        merecem tecnologia
                    </span>

                    à altura.

                </h1>


                <p class="hero__description">

                    Estratégia, design e desenvolvimento se encontram
                    para transformar ideias em produtos digitais modernos,
                    rápidos e preparados para evoluir.

                </p>


                <div class="hero__actions">

                    <a
                        href="<?= e(route_url('contato')) ?>"
                        class="button button--primary"
                    >

                        Iniciar um projeto

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </a>


                    <a
                        href="<?= e(route_url('projetos')) ?>"
                        class="button button--secondary"
                    >

                        Explorar projetos

                        <span aria-hidden="true">
                            ↓
                        </span>

                    </a>

                </div>


                <div class="hero__meta">

                    <div>

                        <strong>
                            Web
                        </strong>

                        <span>
                            Sites & plataformas
                        </span>

                    </div>


                    <div>

                        <strong>
                            Software
                        </strong>

                        <span>
                            Sistemas sob medida
                        </span>

                    </div>


                    <div>

                        <strong>
                            Branding
                        </strong>

                        <span>
                            Identidade & experiência
                        </span>

                    </div>

                </div>

            </div>


            <div
                class="hero__visual"
                aria-hidden="true"
            >

                <div class="hero__visual-grid"></div>

                <div class="hero__orbit hero__orbit--one"></div>
                <div class="hero__orbit hero__orbit--two"></div>


                <div class="hero__symbol-wrapper">

                    <div class="hero__symbol-glow"></div>

                    <img
                        src="<?= e(asset_url('img/logo/fundoPC (46).png')) ?>"
                        alt=""
                        class="hero__symbol"
                    >

                </div>


                <span
                    class="hero__floating-label hero__floating-label--one"
                >
                    DIGITAL
                </span>


                <span
                    class="hero__floating-label hero__floating-label--two"
                >
                    EXPERIENCE
                </span>

            </div>

        </div>

    </section>



    

    <section
        class="home-proof"
        aria-label="Pilares da Hardsettings"
    >

        <div class="container">


            <article class="home-proof__item">

                <span class="home-proof__number">
                    01
                </span>

                <div>

                    <strong>
                        Estratégia
                    </strong>

                    <span>
                        Decisões antes do código.
                    </span>

                </div>

            </article>


            <article class="home-proof__item">

                <span class="home-proof__number">
                    02
                </span>

                <div>

                    <strong>
                        Experiência
                    </strong>

                    <span>
                        Design centrado no usuário.
                    </span>

                </div>

            </article>


            <article class="home-proof__item">

                <span class="home-proof__number">
                    03
                </span>

                <div>

                    <strong>
                        Tecnologia
                    </strong>

                    <span>
                        Arquitetura preparada para evoluir.
                    </span>

                </div>

            </article>


            <article class="home-proof__item">

                <span class="home-proof__number">
                    04
                </span>

                <div>

                    <strong>
                        Evolução
                    </strong>

                    <span>
                        O lançamento é apenas o começo.
                    </span>

                </div>

            </article>

        </div>

    </section>



    

    <section
        class="home-section"
        id="servicos"
        aria-labelledby="servicos-title"
    >

        <div class="container">


            <header class="section-heading">

                <span class="section-heading__eyebrow">
                    O que fazemos
                </span>


                <h2 id="servicos-title">

                    Tecnologia para transformar
                    desafios em produtos digitais.

                </h2>


                <p>

                    Da estratégia ao desenvolvimento,
                    combinamos criatividade e engenharia
                    para construir soluções digitais sob medida.

                </p>

            </header>


            <div class="services-preview">


                <article class="service-preview-card">

                    <span class="service-preview-card__number">
                        01
                    </span>


                    <h3>
                        Sites & Plataformas
                    </h3>


                    <p>

                        Experiências web rápidas,
                        responsivas e desenvolvidas
                        para representar sua marca.

                    </p>


                    <a
                        href="<?= e(route_url('servicos')) ?>"
                        class="service-preview-card__arrow"
                        aria-label="Conhecer serviços de sites e plataformas"
                    >
                        ↗
                    </a>

                </article>



                <article class="service-preview-card">

                    <span class="service-preview-card__number">
                        02
                    </span>


                    <h3>
                        Sistemas
                    </h3>


                    <p>

                        Soluções personalizadas para
                        automatizar operações e criar
                        novos produtos digitais.

                    </p>


                    <a
                        href="<?= e(route_url('servicos')) ?>"
                        class="service-preview-card__arrow"
                        aria-label="Conhecer serviços de sistemas"
                    >
                        ↗
                    </a>

                </article>



                <article class="service-preview-card">

                    <span class="service-preview-card__number">
                        03
                    </span>


                    <h3>
                        Landing Pages
                    </h3>


                    <p>

                        Páginas de alta performance
                        estruturadas para campanhas
                        e geração de oportunidades.

                    </p>


                    <a
                        href="<?= e(route_url('servicos')) ?>"
                        class="service-preview-card__arrow"
                        aria-label="Conhecer serviços de landing pages"
                    >
                        ↗
                    </a>

                </article>



                <article class="service-preview-card">

                    <span class="service-preview-card__number">
                        04
                    </span>


                    <h3>
                        Branding & UI/UX
                    </h3>


                    <p>

                        Identidades e interfaces capazes
                        de tornar produtos e marcas
                        mais memoráveis.

                    </p>


                    <a
                        href="<?= e(route_url('servicos')) ?>"
                        class="service-preview-card__arrow"
                        aria-label="Conhecer serviços de branding e UI UX"
                    >
                        ↗
                    </a>

                </article>

            </div>


            <div class="home-section__footer">

                <a
                    href="<?= e(route_url('servicos')) ?>"
                    class="text-link"
                >

                    Conhecer todos os serviços

                    <span aria-hidden="true">
                        ↗
                    </span>

                </a>

            </div>

        </div>

    </section>



    

    <section
        class="home-section home-projects"
        id="projetos"
        aria-labelledby="projetos-title"
    >

        <div class="container">

            <header class="section-heading projects-heading">

                <div>

                    <span class="section-heading__eyebrow">
                        Projetos selecionados
                    </span>


                    <h2 id="projetos-title">

                        Produtos digitais construídos
                        para diferentes desafios.

                    </h2>

                </div>


                <div class="projects-heading__aside">

                    <p>

                        Websites e experiências mobile desenvolvidas
                        com diferentes propostas visuais e objetivos.

                    </p>


                    <a
                        href="<?= e(route_url('projetos')) ?>"
                        class="text-link"
                    >

                        Ver todos os projetos

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </a>

                </div>

            </header>


            <div class="portfolio-grid">


                

                <a
                    href="<?= e(route_url('projetos')) ?>"
                    class="portfolio-card portfolio-card--featured"
                    aria-label="Ver projeto DAX Residencial Complex"
                >

                    <div class="portfolio-card__media">

                        <img
                            src="<?= e(asset_url('img/projetos/kaza-up.png')) ?>"
                            alt="Interface do projeto DAX Residencial Complex"
                            class="portfolio-card__image"
                            loading="lazy"
                            decoding="async"
                        >

                        <div
                            class="portfolio-card__overlay"
                            aria-hidden="true"
                        ></div>


                        <span class="portfolio-card__index">
                            01
                        </span>


                        <span
                            class="portfolio-card__arrow"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </div>


                    <div class="portfolio-card__content">

                        <div>

                            <span class="portfolio-card__category">
                                Website • Imobiliário
                            </span>

                            <h3>
                                Kaza Up
                            </h3>

                        </div>


                        <p>

                            Experiência web voltada à apresentação
                            visual de um empreendimento residencial.

                        </p>

                    </div>

                </a>



                

                <a
                    href="<?= e(route_url('projetos')) ?>"
                    class="portfolio-card"
                    aria-label="Ver projeto Advocacia Exponencial"
                >

                    <div class="portfolio-card__media">

                        <img
                            src="<?= e(asset_url('img/projetos/advocacia-exponencial.png')) ?>"
                            alt="Interface mobile do projeto Advocacia Exponencial"
                            class="portfolio-card__image portfolio-card__image--mobile"
                            loading="lazy"
                            decoding="async"
                        >

                        <div
                            class="portfolio-card__overlay"
                            aria-hidden="true"
                        ></div>


                        <span class="portfolio-card__index">
                            02
                        </span>


                        <span
                            class="portfolio-card__arrow"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </div>


                    <div class="portfolio-card__content">

                        <div>

                            <span class="portfolio-card__category">
                                Mobile • Jurídico
                            </span>

                            <h3>
                                Advocacia Exponencial
                            </h3>

                        </div>


                        <p>

                            Interface mobile com linguagem visual
                            premium para uma experiência jurídica digital.

                        </p>

                    </div>

                </a>



                

                <a
                    href="<?= e(route_url('projetos')) ?>"
                    class="portfolio-card"
                    aria-label="Ver projeto The Gusta"
                >

                    <div class="portfolio-card__media">

                        <img
                            src="<?= e(asset_url('img/projetos/the-gusta.png')) ?>"
                            alt="Interface mobile do projeto The Gusta"
                            class="portfolio-card__image portfolio-card__image--mobile"
                            loading="lazy"
                            decoding="async"
                        >

                        <div
                            class="portfolio-card__overlay"
                            aria-hidden="true"
                        ></div>


                        <span class="portfolio-card__index">
                            03
                        </span>


                        <span
                            class="portfolio-card__arrow"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </div>


                    <div class="portfolio-card__content">

                        <div>

                            <span class="portfolio-card__category">
                                Mobile • Food
                            </span>

                            <h3>
                                The Gusta
                            </h3>

                        </div>


                        <p>

                            Experiência mobile para navegação
                            por produtos, categorias e destaques.

                        </p>

                    </div>

                </a>

            </div>


            <div class="projects-mobile-link">

                <a
                    href="<?= e(route_url('projetos')) ?>"
                    class="button button--secondary"
                >

                    Explorar todos os projetos

                    <span aria-hidden="true">
                        ↗
                    </span>

                </a>

            </div>

        </div>

    </section>



    

    <section
        class="home-section"
        id="processo"
        aria-labelledby="processo-title"
    >

        <div class="container">


            <header class="section-heading">

                <span class="section-heading__eyebrow">
                    Processo
                </span>


                <h2 id="processo-title">

                    Do problema
                    ao produto.

                </h2>


                <p>

                    Um processo claro reduz incertezas
                    e mantém estratégia, design
                    e desenvolvimento na mesma direção.

                </p>

            </header>


            <div class="process-grid">


                <article class="process-card">

                    <span>
                        01
                    </span>


                    <h3>
                        Diagnóstico
                    </h3>


                    <p>

                        Entendemos objetivos,
                        público, contexto e
                        desafios do projeto.

                    </p>

                </article>



                <article class="process-card">

                    <span>
                        02
                    </span>


                    <h3>
                        Estratégia
                    </h3>


                    <p>

                        Definimos experiência,
                        arquitetura, escopo
                        e direção técnica.

                    </p>

                </article>



                <article class="process-card">

                    <span>
                        03
                    </span>


                    <h3>
                        Construção
                    </h3>


                    <p>

                        Design e desenvolvimento
                        trabalham juntos para transformar
                        estratégia em produto.

                    </p>

                </article>



                <article class="process-card">

                    <span>
                        04
                    </span>


                    <h3>
                        Evolução
                    </h3>


                    <p>

                        Lançamos, acompanhamos
                        e preparamos a solução
                        para continuar crescendo.

                    </p>

                </article>

            </div>


            <div class="home-section__footer">

                <a
                    href="<?= e(route_url('processo')) ?>"
                    class="text-link"
                >

                    Conhecer nosso processo

                    <span aria-hidden="true">
                        ↗
                    </span>

                </a>

            </div>

        </div>

    </section>



    

    <section
        class="home-team"
        aria-labelledby="home-team-title"
    >

        <div class="container">

            <header class="home-team__heading">

                <div>

                    <span class="section-heading__eyebrow">
                        Por trás da Hardsettings
                    </span>


                    <h2 id="home-team-title">

                        Tecnologia é construída
                        por <span>pessoas.</span>

                    </h2>

                </div>


                <div class="home-team__intro">

                    <p>

                        Diferentes habilidades trabalhando
                        juntas para transformar estratégia,
                        criatividade e tecnologia em produto.

                    </p>


                    <a
                        href="<?= e(route_url('sobre')) ?>#equipe"
                        class="text-link"
                    >

                        Conhecer toda a equipe

                        <span aria-hidden="true">
                            ↗
                        </span>

                    </a>

                </div>

            </header>


            <div class="team-preview-grid">

                <?php render_team_card([
        'name' => 'Integrante 01',
        'role' => 'Desenvolvimento',
        'image' => 'img/equipe/membro-01.jpg'
    ]); ?>


                <?php render_team_card([
        'name' => 'Integrante 02',
        'role' => 'Design & Experiência',
        'image' => 'img/equipe/membro-01.jpg'
    ]); ?>


                <?php render_team_card([
        'name' => 'Integrante 03',
        'role' => 'Estratégia & Tecnologia',
        'image' => 'img/equipe/membro-01.jpg'
    ]); ?>

            </div>

        </div>

    </section>



    

    <section
        class="home-cta"
        id="contato"
        aria-labelledby="home-cta-title"
    >

        <div class="container">

            <span class="home-cta__eyebrow">
                Próximo projeto
            </span>


            <h2 id="home-cta-title">

                Tem uma ideia que merece
                sair do papel?

            </h2>


            <p>

                Conte o que você pretende construir.
                Vamos entender o desafio e encontrar
                o caminho digital mais adequado.

            </p>


            <a
                href="<?= e(route_url('contato')) ?>"
                class="button button--primary"
            >

                Falar com a Hardsettings

                <span aria-hidden="true">
                    ↗
                </span>

            </a>

        </div>

    </section>



<?php require __DIR__ . '/includes/footer.php'; ?>
