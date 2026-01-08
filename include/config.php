<?php
// =====================================
// CONFIGURAÇÕES GERAIS DO SISTEMA
// =====================================

// -------------------------------------
// AMBIENTE LOCAL (WINDOWS / XAMPP)
// -------------------------------------
define('BASE_DIR', 'C:/xampp/htdocs/intranet-new');
define('BASE_URL', '/intranet-new');

// -------------------------------------
// AMBIENTE PRODUÇÃO (LINUX)
// 👉 DESCOMENTAR QUANDO SUBIR
// -------------------------------------
// define('BASE_DIR', '/var/www/html/intranet-new');
// define('BASE_URL', '/intranet-new');


// =====================================
// PROTOCOLOS
// =====================================
define('PROTOCOLS_DIR', BASE_DIR . '/protocolos');
define('PROTOCOLS_URL', BASE_URL . '/protocolos');


// =====================================
// DOCUMENTOS INSTITUCIONAIS
// (Missão, Visão, Valores, etc.)
// =====================================
define('DOCUMENTS_DIR', BASE_DIR . '/documents');
define('DOCUMENTS_URL', BASE_URL . '/documents');
