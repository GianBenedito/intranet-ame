<?php
/**
 * VIEW - QUALIDADE
 * Apenas exibição
 * Variável esperada: $pastas
 */
?>

<h4 class="mb-4 text-center">
    <i class="bi bi-folder2-open"></i> Qualidade
</h4>

<div class="w-100">
    <div class="row g-4 justify-content-center">

        <?php if (empty($pastas)): ?>
            <div class="col-12">
                <div class="alert alert-warning text-center">
                    Nenhuma pasta encontrada em protocolos.
                </div>
            </div>
        <?php endif; ?>

        <?php foreach ($pastas as $pasta): ?>
            <div class="col-sm-6 col-md-3">
                <a href="protocolos.php?pasta=<?= urlencode($pasta) ?>"
                   class="text-decoration-none text-dark">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body text-center">
                            <i class="bi bi-folder fs-1 text-primary"></i>
                            <h6 class="mt-3">
                                <?= htmlspecialchars($pasta) ?>
                            </h6>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>

    </div>
</div>
