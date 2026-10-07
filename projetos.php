<?php
$currentPage = 'projetos';
$pageTitle = 'Projetos — Hardsettings';
$pageDescription = 'Conheça projetos de websites, experiências mobile e produtos digitais desenvolvidos pela Hardsettings.';
$ogTitle = 'Projetos — Hardsettings';
$ogDescription = 'Projetos digitais desenvolvidos para diferentes segmentos, desafios e experiências.';
require __DIR__ . '/includes/header.php';
?>



    

    <?php render_page_hero('Projetos', 'Ideias transformadas em <span>experiências.</span>', 'Projetos digitais desenvolvidos para diferentes contextos, segmentos e formas de interação.'); ?>



   

<section
    class="projects-intro"
    aria-labelledby="projects-intro-title"
>

    <div class="container">

        <div class="projects-intro__grid">

            <div class="projects-intro__heading">

                <span class="section-heading__eyebrow">
                    Portfólio
                </span>

                <h2 id="projects-intro-title">
                    Diferentes desafios.
                    <br>
                    Diferentes
                    <span>caminhos.</span>
                </h2>

            </div>


            <div class="projects-intro__content">

                <div class="projects-intro__lead">

                    <span
                        class="projects-intro__accent"
                        aria-hidden="true"
                    ></span>

                    <p>
                        Cada projeto nasce de um contexto diferente.
                        Por isso, não existe uma única fórmula
                        para transformar uma ideia em produto digital.
                    </p>

                </div>


                <p class="projects-intro__support">
                    Não partimos de uma solução pronta.
                    Cada desafio define sua própria combinação
                    entre estratégia, experiência e tecnologia.
                </p>


                <div
                    class="projects-intro__pillars"
                    aria-label="Dimensões dos projetos"
                >

                    <div class="projects-intro__pillar">

                        <span class="projects-intro__pillar-index">
                            01
                        </span>

                        <div>
                            <strong>
                                Produto
                            </strong>

                            <span>
                                Problema, contexto e direção.
                            </span>
                        </div>

                    </div>


                    <div class="projects-intro__pillar">

                        <span class="projects-intro__pillar-index">
                            02
                        </span>

                        <div>
                            <strong>
                                Interface
                            </strong>

                            <span>
                                Clareza, experiência e identidade.
                            </span>
                        </div>

                    </div>


                    <div class="projects-intro__pillar">

                        <span class="projects-intro__pillar-index">
                            03
                        </span>

                        <div>
                            <strong>
                                Tecnologia
                            </strong>

                            <span>
                                Estrutura, desenvolvimento e evolução.
                            </span>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>






    

    <section
        class="projects-index"
        aria-labelledby="projects-index-title"
    >

        <div class="container">

            <header class="section-heading">

                <span class="section-heading__eyebrow">
                    Projetos selecionados
                </span>

                <h2 id="projects-index-title">
                    Quatro projetos.
                    Quatro propostas diferentes.
                </h2>

            </header>


            <div class="projects-index__grid">


                <a
                    href="#dax"
                    class="projects-index-card"
                >

                    <span class="projects-index-card__number">
                        01
                    </span>

                    <div>

                        <span class="projects-index-card__category">
                            Website • Imobiliário
                        </span>

                        <h3>
                            DAX Residencial Complex
                        </h3>

                    </div>

                    <span
                        class="projects-index-card__arrow"
                        aria-hidden="true"
                    >
                        ↓
                    </span>

                </a>



                <a
                    href="#kaza-up"
                    class="projects-index-card"
                >

                    <span class="projects-index-card__number">
                        02
                    </span>

                    <div>

                        <span class="projects-index-card__category">
                            Website • Imobiliário
                        </span>

                        <h3>
                            KZU Kaza Up
                        </h3>

                    </div>

                    <span
                        class="projects-index-card__arrow"
                        aria-hidden="true"
                    >
                        ↓
                    </span>

                </a>



                <a
                    href="#advocacia"
                    class="projects-index-card"
                >

                    <span class="projects-index-card__number">
                        03
                    </span>

                    <div>

                        <span class="projects-index-card__category">
                            Mobile • Jurídico
                        </span>

                        <h3>
                            Advocacia Exponencial
                        </h3>

                    </div>

                    <span
                        class="projects-index-card__arrow"
                        aria-hidden="true"
                    >
                        ↓
                    </span>

                </a>



                <a
                    href="#the-gusta"
                    class="projects-index-card"
                >

                    <span class="projects-index-card__number">
                        04
                    </span>

                    <div>

                        <span class="projects-index-card__category">
                            Mobile • Food
                        </span>

                        <h3>
                            The Gusta
                        </h3>

                    </div>

                    <span
                        class="projects-index-card__arrow"
                        aria-hidden="true"
                    >
                        ↓
                    </span>

                </a>


            </div>

        </div>

    </section>



    

    <section
        class="project-case"
        id="dax"
        aria-labelledby="project-dax-title"
    >

        <div class="container">

            <div class="project-case__header">

                <div>

                    <span class="project-case__index">
                        01
                    </span>

                    <span class="project-case__category">
                        Website • Imobiliário
                    </span>

                </div>


                <h2 id="project-dax-title">
                    DAX Residencial
                    Complex
                </h2>

            </div>


            <div class="project-case__visual">

                <img
                    src="<?= e(asset_url('img/projetos/dax.png')) ?>"
                    alt="Interface do projeto DAX Residencial Complex"
                    loading="lazy"
                    decoding="async"
                >

            </div>


            <div class="project-case__info">

                <div>

                    <span class="project-case__label">
                        Contexto
                    </span>

                    <p>
                        Uma experiência digital voltada à
                        apresentação de um empreendimento
                        residencial e de sua proposta visual.
                    </p>

                </div>


                <div>

                    <span class="project-case__label">
                        Direção
                    </span>

                    <p>
                        A interface utiliza o próprio empreendimento
                        como protagonista, combinando grandes imagens,
                        navegação direta e chamadas de ação bem definidas.
                    </p>

                </div>


                <div>

                    <span class="project-case__label">
                        Experiência
                    </span>

                    <p>
                        Uma composição visual pensada para destacar
                        arquitetura, apresentação do projeto e acesso
                        rápido às principais informações.
                    </p>

                </div>

            </div>

        </div>

    </section>



    

    <section
        class="project-case project-case--alternate"
        id="kaza-up"
        aria-labelledby="project-kaza-title"
    >

        <div class="container">

            <div class="project-case__header">

                <div>

                    <span class="project-case__index">
                        02
                    </span>

                    <span class="project-case__category">
                        Website • Imobiliário
                    </span>

                </div>


                <h2 id="project-kaza-title">
                    KZU
                    Kaza Up
                </h2>

            </div>


            <div class="project-case__visual">

                <img
                    src="<?= e(asset_url('img/projetos/kaza-up.png')) ?>"
                    alt="Interface do projeto KZU Kaza Up"
                    loading="lazy"
                    decoding="async"
                >

            </div>


            <div class="project-case__info">

                <div>

                    <span class="project-case__label">
                        Contexto
                    </span>

                    <p>
                        Uma experiência digital direcionada
                        ao mercado imobiliário e à apresentação
                        de propriedades.
                    </p>

                </div>


                <div>

                    <span class="project-case__label">
                        Direção
                    </span>

                    <p>
                        A interface combina conteúdo visual,
                        navegação por categorias e uma área
                        de busca como elemento central da experiência.
                    </p>

                </div>


                <div>

                    <span class="project-case__label">
                        Experiência
                    </span>

                    <p>
                        O projeto organiza descoberta, navegação
                        e apresentação de imóveis em uma interface
                        com forte presença visual.
                    </p>

                </div>

            </div>

        </div>

    </section>



    

    <section
        class="project-case"
        id="advocacia"
        aria-labelledby="project-advocacia-title"
    >

        <div class="container">

            <div class="project-case__header">

                <div>

                    <span class="project-case__index">
                        03
                    </span>

                    <span class="project-case__category">
                        Mobile • Jurídico
                    </span>

                </div>


                <h2 id="project-advocacia-title">
                    Advocacia
                    Exponencial
                </h2>

            </div>


            <div class="project-case__visual project-case__visual--mobile">

                <img
                    src="<?= e(asset_url('img/projetos/advocacia-exponencial.png')) ?>"
                    alt="Interface mobile do projeto Advocacia Exponencial"
                    loading="lazy"
                    decoding="async"
                >

            </div>


            <div class="project-case__info">

                <div>

                    <span class="project-case__label">
                        Contexto
                    </span>

                    <p>
                        Uma proposta mobile direcionada
                        ao universo jurídico e a uma experiência
                        de acesso e networking.
                    </p>

                </div>


                <div>

                    <span class="project-case__label">
                        Direção
                    </span>

                    <p>
                        A identidade utiliza uma linguagem visual
                        escura com elementos dourados para construir
                        uma experiência mais sofisticada.
                    </p>

                </div>


                <div>

                    <span class="project-case__label">
                        Experiência
                    </span>

                    <p>
                        A interface prioriza entrada, cadastro
                        e posicionamento da proposta logo nos
                        primeiros pontos de contato.
                    </p>

                </div>

            </div>

        </div>

    </section>



    

    <section
        class="project-case project-case--alternate"
        id="the-gusta"
        aria-labelledby="project-gusta-title"
    >

        <div class="container">

            <div class="project-case__header">

                <div>

                    <span class="project-case__index">
                        04
                    </span>

                    <span class="project-case__category">
                        Mobile • Food
                    </span>

                </div>


                <h2 id="project-gusta-title">
                    The Gusta
                </h2>

            </div>


            <div class="project-case__visual project-case__visual--mobile">

                <img
                    src="<?= e(asset_url('img/projetos/the-gusta.png')) ?>"
                    alt="Interface mobile do projeto The Gusta"
                    loading="lazy"
                    decoding="async"
                >

            </div>


            <div class="project-case__info">

                <div>

                    <span class="project-case__label">
                        Contexto
                    </span>

                    <p>
                        Uma experiência mobile voltada
                        à apresentação e descoberta
                        de produtos de confeitaria.
                    </p>

                </div>


                <div>

                    <span class="project-case__label">
                        Direção
                    </span>

                    <p>
                        A interface utiliza cores quentes,
                        imagens de produto e categorias visuais
                        para criar uma navegação direta.
                    </p>

                </div>


                <div>

                    <span class="project-case__label">
                        Experiência
                    </span>

                    <p>
                        Busca, categorias, destaques e navegação
                        inferior organizam o conteúdo principal
                        em uma estrutura familiar para mobile.
                    </p>

                </div>

            </div>

        </div>

    </section>



    

    <section
        class="projects-philosophy"
        aria-labelledby="projects-philosophy-title"
    >

        <div class="container projects-philosophy__grid">

            <div>

                <span class="section-heading__eyebrow">
                    Nossa abordagem
                </span>

                <h2 id="projects-philosophy-title">
                    O visual muda.
                    O cuidado permanece.
                </h2>

            </div>


            <div class="projects-philosophy__content">

                <p>
                    Um projeto imobiliário não precisa se parecer
                    com um aplicativo jurídico.
                    Um produto de alimentação não precisa seguir
                    a linguagem de uma plataforma corporativa.
                </p>

                <p>
                    A identidade de cada solução deve responder
                    ao contexto do negócio, ao público e à
                    experiência que precisa ser construída.
                </p>


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
        class="page-cta"
        aria-labelledby="projects-cta-title"
    >

        <div class="container">

            <span class="page-cta__eyebrow">
                Seu projeto pode ser o próximo
            </span>


            <h2 id="projects-cta-title">
                Tem uma ideia para
                transformar em produto?
            </h2>


            <p>
                Conte o desafio para a Hardsettings.
                Vamos entender o contexto antes
                de definir como construir a solução.
            </p>


            <a
                href="<?= e(route_url('contato')) ?>"
                class="button button--primary"
            >
                Iniciar um projeto

                <span aria-hidden="true">
                    ↗
                </span>
            </a>

        </div>

    </section>



<?php require __DIR__ . '/includes/footer.php'; ?>
