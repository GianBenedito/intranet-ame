<?php
// ================================
// BOOTSTRAP DO SISTEMA
// ================================

require_once __DIR__ . '/include/config.php';
require_once __DIR__ . '/include/helpers.php';

// ================================
// CONTROLE DE PASTA ATUAL
// ================================

$pasta = $_GET['pasta'] ?? '';

// Segurança básica
$pasta = trim($pasta, '/');
$pasta = str_replace(['..', '\\'], '', $pasta);

// Diretório atual
$dirAtual = PROTOCOLS_DIR . ($pasta ? '/' . $pasta : '');

if (!is_dir($dirAtual)) {
    die('Pasta não encontrada.');
}

// Lista itens
$itens = listarDiretorio($dirAtual);

// Título
$tituloPagina = $pasta ?: 'Protocolos';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($tituloPagina) ?> | Intranet</title>

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
                        <i class="bi bi-folder2-open me-2"></i>
                        <?= htmlspecialchars($tituloPagina) ?>
                    </h4>

                    <a href="qualidade.php" class="text-decoration-none">
                        <i class="bi bi-arrow-left"></i> Voltar
                    </a>
                </div>

                <!-- GRID -->
                <div class="row g-3 justify-content-center">

                    <?php if (empty($itens)): ?>
                        <div class="col-12">
                            <div class="alert alert-warning text-center">
                                Nenhum arquivo ou pasta encontrada.
                            </div>
                        </div>
                    <?php endif; ?>

                    <?php foreach ($itens as $item): ?>
                        <?php $caminho = $dirAtual . '/' . $item; ?>

                        <!-- SUBPASTA -->
                        <?php if (is_dir($caminho)): ?>
                            <div class="col-sm-6 col-md-3">
                                <a
                                    href="protocolos.php?pasta=<?= urlencode($pasta ? $pasta . '/' . $item : $item) ?>"
                                    class="text-decoration-none text-dark"
                                >
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body text-center">
                                            <i class="bi bi-folder fs-1 text-primary"></i>
                                            <h6 class="mt-2 mb-0">
                                                <?= htmlspecialchars($item) ?>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        <!-- PDF -->
                        <?php elseif (isPdf($item)): ?>
                            <div class="col-sm-6 col-md-3">
                                <a
                                    href="<?= montarUrlPdf($pasta, $item) ?>"
                                    target="_blank"
                                    class="text-decoration-none text-dark"
                                >
                                    <div class="card h-100 shadow-sm">
                                        <div class="card-body text-center">
                                            <i class="bi bi-file-earmark-pdf fs-1 text-danger"></i>
                                            <h6 class="mt-2 mb-0 small"
                                                title="<?= htmlspecialchars(formatarNomePdf($item)) ?>">
                                                <?= htmlspecialchars(formatarNomePdf($item)) ?>
                                            </h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        <?php endif; ?>

                    <?php endforeach; ?>

                </div>

            </div>

        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
