<?php
$usuarioLogado = false;

// CAMINHO REAL (funcionava)
$baseDir = '/var/www/html/intranet-new/protocolos';

// URL de navegação
$baseUrl = 'protocolos.php';

if (!is_dir($baseDir)) {
    die('Diretório de protocolos não encontrado.');
}

// LISTA PASTAS
$pastas = array_values(array_filter(
    scandir($baseDir),
    fn ($item) =>
        $item !== '.' &&
        $item !== '..' &&
        is_dir($baseDir . '/' . $item)
));
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Qualidade | Intranet</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include __DIR__ . '/include/navbar.php'; ?>

<div class="container-fluid mt-4">
    <div class="row">

        <aside class="col-2">
            <?php include __DIR__ . '/include/sidebar.php'; ?>
        </aside>

        <main class="col-10">

            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4>
                    <i class="bi bi-folder2-open"></i> Qualidade
                </h4>

                <?php if ($usuarioLogado): ?>
                    <button class="btn btn-primary">
                        <i class="bi bi-upload"></i> Enviar documento
                    </button>
                <?php endif; ?>
            </div>

            <div class="row g-3">

                <?php foreach ($pastas as $pasta): ?>
                    <div class="col-sm-6 col-md-3">
                        <a href="<?= $baseUrl ?>?pasta=<?= urlencode($pasta) ?>"
                           class="text-decoration-none text-dark">

                            <div class="card h-100 shadow-sm">
                                <div class="card-body text-center">
                                    <i class="bi bi-folder fs-1 text-primary"></i>
                                    <h6 class="mt-2 mb-0">
                                        <?= htmlspecialchars($pasta) ?>
                                    </h6>
                                </div>
                            </div>

                        </a>
                    </div>
                <?php endforeach; ?>

            </div>

        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
