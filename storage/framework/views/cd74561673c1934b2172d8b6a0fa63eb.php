<?php $__env->startSection('content'); ?>
    <div class="container mt-5">
        <h1>Bem-vindo ao Sistema</h1>
        <p>Você está logado!</p>
        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-danger">
            Sair
        </a>
        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\upf\upf\quinta_feira_php\locadora-filmes\resources\views/dashboard.blade.php ENDPATH**/ ?>