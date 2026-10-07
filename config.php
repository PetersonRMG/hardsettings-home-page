<?php
// Configuração simples do site. Nenhum banco de dados é necessário.
// BASE_PATH vazio faz o site detectar automaticamente a pasta em que está publicado.
const BASE_PATH = '';

// Preencha apenas os canais que desejar exibir.
const SOCIAL_LINKS = [
    'whatsapp' => '',
    'instagram' => '',
    'linkedin' => '',
    'x' => '',
    'github' => '',
];

// Opcional: e-mail que receberá o formulário de contato via mail() do PHP.
// Se ficar vazio, o formulário continuará visível, mas informará que o envio ainda não está configurado.
const CONTACT_EMAIL = '';
