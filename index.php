<?php
require_once __DIR__ . '/include/config.php';
require_once __DIR__ . '/include/helpers.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Intranet - AME SJBV</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php include __DIR__ . '/include/navbar.php'; ?>

<div class="container-fluid mt-3">
    <div class="row">

        <!-- SIDEBAR -->
        <aside class="col-2">
            <?php include __DIR__ . '/include/sidebar.php'; ?>
        </aside>

        <!-- FEED CENTRAL -->
        <main class="col-7">
            <div class="card mb-3">
                <div class="card-body">
                    <h5>Comunicados</h5>

                    <div class="card mb-3">
                        <div class="card-body">
                            <h6>Título do comunicado</h6>
                            <p class="text-muted mb-1">Publicado em 01/02/2026</p>
                            <p>
                                Texto do comunicado. Aqui entra o conteúdo principal.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </main>

        <!-- COLUNA DIREITA -->
        <aside class="col-3">
            <div class="card mb-3">
                <div class="card-body">
                    <h6>Aniversariantes do mês</h6>
                    <ul class="list-unstyled mb-0">
                        <li>Maria – 05/02</li>
                        <li>João – 12/02</li>
                        <li>Ana – 23/02</li>
                    </ul>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h6>Informações</h6>
                    <p class="mb-0">Avisos rápidos, links úteis, etc.</p>
                </div>
            </div>
        </aside>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
