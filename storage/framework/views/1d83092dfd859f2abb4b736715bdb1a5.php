<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Sistema de Locadora'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>
<body>
    <nav>
        <ul>
            <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
            <?php if(auth()->guard()->check()): ?>
                <li><a href="<?php echo e(route('logout')); ?>"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Sair
                    </a>
                </li>
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                    <?php echo csrf_field(); ?>
                </form>
            <?php endif; ?>
        </ul>
    </nav>

    <main class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </main>
</body>
</html>
<?php /**PATH C:\upf\upf\quinta_feira_php\locadora-filmes\resources\views/layouts/app.blade.php ENDPATH**/ ?>