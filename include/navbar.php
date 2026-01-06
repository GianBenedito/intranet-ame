<?php
// futuramente: $usuarioLogado = $_SESSION['usuario'] ?? false;
$usuarioLogado = false;
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">

        <!-- LOGO / HOME -->
        <a class="navbar-brand fw-semibold" href="/intranet-new/">
            Intranet · AME
        </a>

        <!-- BOTÃO MOBILE -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTop">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- MENU -->
        <div class="collapse navbar-collapse" id="navbarTop">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <!-- RAMAIS -->
                <li class="nav-item">
                    <a class="nav-link" href="ramais.php">
                        <i class="bi bi-telephone"></i> Ramais
                    </a>
                </li>

                <!-- LINKS ÚTEIS -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
                        Links Úteis
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="#">Salutem</a></li>
                        <li><a class="dropdown-item" href="#">Helpdesk</a></li>
                        <li><a class="dropdown-item" href="#">Portal SUS</a></li>
                    </ul>
                </li>

                <!-- LOGIN / USUÁRIO -->
                <?php if ($usuarioLogado): ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
                            <i class="bi bi-person-circle"></i> Usuário
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li><a class="dropdown-item" href="#">Sair</a></li>
                        </ul>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="btn btn-outline-light ms-2" href="login.php">
                            <i class="bi bi-box-arrow-in-right"></i> Login
                        </a>
                    </li>
                <?php endif; ?>

            </ul>
        </div>
    </div>
</nav>
