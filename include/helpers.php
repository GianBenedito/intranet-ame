<?php
// ================================
// FUNÇÕES UTILITÁRIAS
// ================================

/**
 * Verifica se o arquivo é PDF
 */
function isPdf(string $arquivo): bool
{
    return strtolower(pathinfo($arquivo, PATHINFO_EXTENSION)) === 'pdf';
}

/**
 * Formata nome de PDF para exibição amigável
 */
function formatarNomePdf(string $arquivo): string
{
    $nome = pathinfo($arquivo, PATHINFO_FILENAME);
    $nome = urldecode($nome);
    $nome = str_replace(['_', '+'], ' ', $nome);
    $nome = preg_replace('/\s+/', ' ', $nome);
    return mb_convert_case(trim($nome), MB_CASE_TITLE, 'UTF-8');
}

/**
 * Lista diretórios e arquivos ignorando . e ..
 */
function listarDiretorio(string $dir): array
{
    if (!is_dir($dir)) {
        return [];
    }

    return array_values(
        array_diff(scandir($dir), ['.', '..'])
    );
}

/**
 * Monta URL segura para PDF (corrige problema de + / espaços)
 */
function montarUrlPdf(string $pasta, string $arquivo): string
{
    $url = PROTOCOLS_URL;

    if (!empty($pasta)) {
        foreach (explode('/', $pasta) as $nivel) {
            $url .= '/' . rawurlencode($nivel);
        }
    }

    return $url . '/' . rawurlencode($arquivo);
}
