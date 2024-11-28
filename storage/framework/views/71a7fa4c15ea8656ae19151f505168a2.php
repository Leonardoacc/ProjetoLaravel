<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Locadora de Filmes'); ?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>">Locadora de Filmes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('filmes.index')); ?>">Filmes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('categorias.index')); ?>">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('clientes.index')); ?>">Clientes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('funcionarios.index')); ?>">Funcionários</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('locacoes.index')); ?>">Locações</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('pagamentos.index')); ?>">Pagamentos</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sair
                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo csrf_field(); ?>
                        </form>
                    </li>
                <?php else: ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('login')); ?>">Entrar</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>

    <div class="container mt-4">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="bg-light text-center py-3 mt-4">
        <p>&copy; 2024 Locadora de Filmes. Todos os direitos reservados.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>
<?php /**PATH C:\upf\upf\quinta_feira_php\locadora-filmes\resources\views/layouts/layout.blade.php ENDPATH**/ ?>