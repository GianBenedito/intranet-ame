<?php
// ================================
// BOOTSTRAP DO SISTEMA
// ================================

require_once __DIR__ . '/include/config.php';

// ================================
// DOCUMENTO INSTITUCIONAL
// ================================

// Nome do arquivo PDF
$arquivo = 'Missao_Visao_Valores.pdf';

// Caminho real
$caminhoArquivo = DOCUMENTS_DIR . '/' . $arquivo;

// URL pública
$urlArquivo = DOCUMENTS_URL . '/' . rawurlencode($arquivo);

// Validação
if (!file_exists($caminhoArquivo)) {
    die('Documento não encontrado.');
}

// Título da página
$tituloPagina = 'Missão, Visão e Valores';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($tituloPagina) ?> | Intranet</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include __DIR__ . '/include/navbar.php'; ?>

<div class="container-fluid mt-4">
    <div class="row">

        <!-- SIDEBAR -->
        <aside class="col-2">
            <?php include __DIR__ . '/include/sidebar.php'; ?>
        </aside>

        <!-- CONTEÚDO -->
        <main class="col-10 d-flex justify-content-center">

            <div class="w-100" style="max-width: 1200px;">

                <!-- TÍTULO -->
                <div class="text-center mb-4">
                    <h4 class="fw-semibold">
                        <i class="bi-lightbulb me-2"></i>
                        <?= htmlspecialchars($tituloPagina) ?>
                    </h4>

                    <a href="index.php" class="text-decoration-none">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>

                <!-- CARD DO DOCUMENTO -->
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-4">

                        <a
                            href="<?= $urlArquivo ?>"
                            target="_blank"
                            class="text-decoration-none text-dark"
                        >
                            <div class="card h-100 shadow-sm">
                                <div class="card-body text-center">

                                    <i class="bi bi-file-earmark-text fs-1 text-primary"></i>

                                    <h6 class="mt-3 mb-0">
                                        Missão, Visão e Valores
                                    </h6>

                                    <small class="text-muted">
                                        Documento institucional
                                    </small>

                                </div>
                            </div>
                        </a>

                    </div>
                </div>

            </div>

        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
