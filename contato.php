<?php
require_once __DIR__ . '/includes/functions.php';
$currentPage = 'contato';
$pageTitle = 'Contato — Hardsettings';
$pageDescription = 'Conte seu projeto para a Hardsettings. Vamos entender o contexto, o desafio e o melhor caminho para transformar sua ideia em produto digital.';
$ogTitle = 'Contato — Hardsettings';
$ogDescription = 'Vamos conversar sobre seu próximo projeto digital.';
$formErrors = [];
$successMessage = '';
$formData = [
    'name' => '', 'email' => '', 'company' => '', 'project_type' => '', 'message' => '', 'website' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($formData as $key => $unused) {
        $formData[$key] = trim((string)($_POST[$key] ?? ''));
    }
    if ($formData['website'] !== '') {
        $formErrors[] = 'Não foi possível enviar a mensagem.';
    }
    if ($formData['name'] === '') $formErrors[] = 'Informe seu nome.';
    if (!filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) $formErrors[] = 'Informe um e-mail válido.';
    if ($formData['project_type'] === '') $formErrors[] = 'Selecione o tipo de projeto.';
    if ($formData['message'] === '') $formErrors[] = 'Conte um pouco sobre o projeto.';

    if (!$formErrors) {
        if (CONTACT_EMAIL === '') {
            $formErrors[] = 'O envio do formulário ainda não foi configurado. Use um dos canais de contato disponíveis.';
        } else {
            $subject = 'Novo contato pelo site Hardsettings';
            $messageBody = "Nome: " . $formData['name'] . "\nE-mail: " . $formData['email'] . "\nEmpresa: " . $formData['company'] . "\nProjeto: " . $formData['project_type'] . "\n\nMensagem:\n" . $formData['message'];
            $headers = "From: noreply@" . ($_SERVER['HTTP_HOST'] ?? 'localhost') . "\r\n";
            $headers .= "Reply-To: " . $formData['email'] . "\r\n";
            if (@mail(CONTACT_EMAIL, $subject, $messageBody, $headers)) {
                $successMessage = 'Recebemos sua mensagem e retornaremos assim que possível.';
                foreach ($formData as $key => $unused) $formData[$key] = '';
            } else {
                $formErrors[] = 'Não foi possível enviar agora. Tente um dos canais de contato disponíveis.';
            }
        }
    }
}

require __DIR__ . '/includes/header.php';
?>



    

    <?php render_page_hero('Contato', 'Vamos construir algo <span>relevante.</span>', 'Conte o que você pretende criar e vamos entender o contexto, o desafio e o melhor caminho para o projeto.'); ?>



    

    <section
        class="contact-section"
        aria-labelledby="contact-title"
    >

        <div class="container contact-section__grid">

            

            <div class="contact-section__intro">

                <span class="section-heading__eyebrow">
                    Vamos conversar
                </span>


                <h2 id="contact-title">

                    Todo projeto começa
                    com uma boa conversa.

                </h2>


                <p>
                    Você não precisa chegar com todas as respostas.
                    Pode trazer uma ideia, um problema, uma operação
                    que precisa melhorar ou um produto que ainda
                    precisa sair do papel.
                </p>


                <p>
                    Nosso primeiro passo é entender o cenário
                    antes de sugerir tecnologia, arquitetura
                    ou formato de solução.
                </p>


                <div class="contact-section__steps">

                    <div>

                        <span>
                            01
                        </span>

                        <p>
                            Você apresenta
                            o contexto.
                        </p>

                    </div>


                    <div>

                        <span>
                            02
                        </span>

                        <p>
                            Entendemos
                            o desafio.
                        </p>

                    </div>


                    <div>

                        <span>
                            03
                        </span>

                        <p>
                            Definimos
                            os próximos passos.
                        </p>

                    </div>

                </div>


                <div class="contact-section__availability">

                    <span class="contact-section__status"></span>

                    <p>
                        Aberto para novos projetos.
                    </p>

                </div>

            </div>



            

            <div class="contact-form-wrapper">
                <?php if ($successMessage): ?>
                    <div class="contact-alert contact-alert--success" role="status"><span>✓</span><div><strong>Mensagem recebida.</strong><p><?= e($successMessage) ?></p></div></div>
                <?php endif; ?>
                <?php if ($formErrors): ?>
                    <div class="contact-alert contact-alert--error" role="alert"><strong>Verifique os campos abaixo.</strong><p><?= e(implode(' ', $formErrors)) ?></p></div>
                <?php endif; ?>



                <form
                    action="<?= e(route_url('contato')) ?>"
                    method="POST"
                    class="contact-form"
                >

                    


                    
                    <div
                        class="contact-form__honeypot"
                        aria-hidden="true"
                    >
                        <label for="website">
                            Website
                        </label>

                        <input
                            type="text"
                            name="website"
                            id="website"
                            tabindex="-1"
                            autocomplete="off"
                        >
                    </div>



                    <div class="contact-form__row">

                        <div class="contact-field">

                            <label for="name">
                                Seu nome
                            </label>

                            <input
                                type="text"
                                name="name"
                                id="name"
                                value="<?= e($formData['name'] ?? '') ?>"
                                placeholder="Como podemos te chamar?"
                                autocomplete="name"
                                required
                            >

                        </div>


                        <div class="contact-field">

                            <label for="email">
                                E-mail
                            </label>

                            <input
                                type="email"
                                name="email"
                                id="email"
                                value="<?= e($formData['email'] ?? '') ?>"
                                placeholder="voce@empresa.com"
                                autocomplete="email"
                                required
                            >

                        </div>

                    </div>



                    <div class="contact-form__row">

                        <div class="contact-field">

                            <label for="company">
                                Empresa
                                <span>
                                    opcional
                                </span>
                            </label>

                            <input
                                type="text"
                                name="company"
                                id="company"
                                value="<?= e($formData['company'] ?? '') ?>"
                                placeholder="Nome da empresa"
                                autocomplete="organization"
                            >

                        </div>


                        <div class="contact-field">

                            <label for="project_type">
                                Tipo de projeto
                            </label>

                            <select
                                name="project_type"
                                id="project_type"
                                required
                            >

                                <option value="">
                                    Selecione
                                </option>

                                <option
                                    value="site"
                                    <?= (($formData['project_type'] ?? '') === 'site') ? 'selected' : '' ?>
                                >
                                    Site ou plataforma
                                </option>

                                <option
                                    value="sistema"
                                    <?= (($formData['project_type'] ?? '') === 'sistema') ? 'selected' : '' ?>
                                >
                                    Sistema ou dashboard
                                </option>

                                <option
                                    value="mobile"
                                    <?= (($formData['project_type'] ?? '') === 'mobile') ? 'selected' : '' ?>
                                >
                                    Aplicativo mobile
                                </option>

                                <option
                                    value="ia"
                                    <?= (($formData['project_type'] ?? '') === 'ia') ? 'selected' : '' ?>
                                >
                                    Inteligência artificial
                                </option>

                                <option
                                    value="dados"
                                    <?= (($formData['project_type'] ?? '') === 'dados') ? 'selected' : '' ?>
                                >
                                    Dados / banco de dados
                                </option>

                                <option
                                    value="design"
                                    <?= (($formData['project_type'] ?? '') === 'design') ? 'selected' : '' ?>
                                >
                                    Branding / UI/UX
                                </option>

                                <option
                                    value="outro"
                                    <?= (($formData['project_type'] ?? '') === 'outro') ? 'selected' : '' ?>
                                >
                                    Outro
                                </option>

                            </select>

                        </div>

                    </div>



                    <div class="contact-field contact-field--message">

                        <label for="message">
                            Conte sobre o projeto
                        </label>

                        <textarea
                            name="message"
                            id="message"
                            rows="7"
                            placeholder="O que você pretende construir? Qual problema precisa resolver?"
                            required
                        ><?= e($formData['message'] ?? '') ?></textarea>

                    </div>



                    <div class="contact-form__footer">

                        <p>
                            Ao enviar, suas informações serão utilizadas
                            apenas para responder sobre o projeto.
                        </p>


                        <button
                            type="submit"
                            class="button button--primary contact-form__submit"
                        >

                            Enviar mensagem

                            <span aria-hidden="true">
                                ↗
                            </span>

                        </button>

                    </div>

                </form>

            </div>

        </div>

    </section>



    

    <section
        class="contact-alternatives"
        aria-labelledby="contact-alternatives-title"
    >

        <div class="container">

            <header class="contact-alternatives__heading">

                <span class="section-heading__eyebrow">
                    Outros canais
                </span>

                <h2 id="contact-alternatives-title">
                    Prefere começar
                    por outro lugar?
                </h2>

            </header>


            <div class="contact-alternatives__grid">


                <?php if (!empty(SOCIAL_LINKS['whatsapp'])): ?>

                    <a
                        href="<?= e(SOCIAL_LINKS['whatsapp'] ?? '') ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="contact-channel"
                    >

                        <span class="contact-channel__number">
                            01
                        </span>

                        <div>

                            <span class="contact-channel__label">
                                Conversa direta
                            </span>

                            <h3>
                                WhatsApp
                            </h3>

                        </div>

                        <span
                            class="contact-channel__arrow"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </a>

                <?php endif; ?>



                <?php if (!empty(SOCIAL_LINKS['instagram'])): ?>

                    <a
                        href="<?= e(SOCIAL_LINKS['instagram'] ?? '') ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="contact-channel"
                    >

                        <span class="contact-channel__number">
                            02
                        </span>

                        <div>

                            <span class="contact-channel__label">
                                Acompanhe a agência
                            </span>

                            <h3>
                                Instagram
                            </h3>

                        </div>

                        <span
                            class="contact-channel__arrow"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </a>

                <?php endif; ?>



                <?php if (!empty(SOCIAL_LINKS['linkedin'])): ?>

                    <a
                        href="<?= e(SOCIAL_LINKS['linkedin'] ?? '') ?>"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="contact-channel"
                    >

                        <span class="contact-channel__number">
                            03
                        </span>

                        <div>

                            <span class="contact-channel__label">
                                Rede profissional
                            </span>

                            <h3>
                                LinkedIn
                            </h3>

                        </div>

                        <span
                            class="contact-channel__arrow"
                            aria-hidden="true"
                        >
                            ↗
                        </span>

                    </a>

                <?php endif; ?>

            </div>

        </div>

    </section>



    

    <section class="contact-statement">

        <div class="container">

            <span class="section-heading__eyebrow">
                Hardsettings
            </span>


            <p>
                <span>
                    Estratégia.
                </span>

                <span>
                    Design.
                </span>

                <span>
                    Software.
                </span>

                <span>
                    Dados.
                </span>

                <span>
                    Inteligência artificial.
                </span>
            </p>


            <h2>
                Tudo começa com
                um problema relevante.
            </h2>

        </div>

    </section>



<?php require __DIR__ . '/includes/footer.php'; ?>
