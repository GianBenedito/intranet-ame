<?php
/**
 * ARQUIVO DE DADOS - QUALIDADE
 * 
 * Este arquivo:
 * - NÃO tem HTML
 * - NÃO imprime nada na tela
 * - Apenas prepara variáveis para a view
 */

// Caminho REAL no servidor onde estão os protocolos

//$baseDir = '/var/www/html/intranet-new/protocolos';
$baseDir = 'C:\xampp\htdocs\intranet-new\protocolos';

// Caminho usado no navegador (URL)
$baseUrl = '/intranet-new/protocolos';

// Array que armazenará as pastas encontradas
$pastas = [];

/**
 * Verifica se o diretório existe
 * Isso evita erro fatal caso o caminho esteja errado
 */
if (is_dir($baseDir)) {

    /**
     * scandir() lista tudo dentro da pasta
     * Inclui arquivos e diretórios
     */
    foreach (scandir($baseDir) as $item) {

        // Ignora os diretórios especiais do Linux
        if ($item === '.' || $item === '..') {
            continue;
        }

        // Verifica se o item é uma pasta
        if (is_dir($baseDir . '/' . $item)) {

            // Adiciona a pasta no array
            $pastas[] = $item;
        }
    }
}

/**
 * Ao final deste arquivo, a variável $pastas estará disponível
 * para ser usada na view (qualidade.view.php)
 */
