HARDSETTINGS — VERSÃO PHP SIMPLES (SEM LARAVEL)

Estrutura:
- index.php: Home
- sobre.php, servicos.php, projetos.php, processo.php, contato.php
- includes/: cabeçalho, rodapé e helpers
- css/style.css: CSS do projeto
- js/app.js: menu responsivo
- img/: imagens originais
- fonts/: fontes locais
- config.php: redes sociais e e-mail do formulário

PUBLICAÇÃO
1. Envie todo o conteúdo desta pasta para a pasta pública desejada, por exemplo:
   /var/www/vhosts/.../hardsettingss/
2. Acesse /hardsettingss/index.php (ou apenas /hardsettingss/ se index.php for padrão).
3. Não precisa de Composer, npm, artisan, .env, vendor nem banco de dados.

CONFIGURAÇÃO OPCIONAL
Abra config.php e preencha SOCIAL_LINKS e CONTACT_EMAIL se quiser ativar redes sociais e envio do formulário.

Observação: o formulário usa mail() nativo do PHP quando CONTACT_EMAIL estiver configurado. A hospedagem precisa permitir envio de e-mail por PHP.
