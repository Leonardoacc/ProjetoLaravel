<?php $__env->startSection('content'); ?>
    <h1>Login</h1>

    <form method="POST" action="<?php echo e(route('login')); ?>">
        <?php echo csrf_field(); ?>

        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Entrar</button>

        <div class="mt-3">
            <a href="<?php echo e(route('register')); ?>">Não tem conta? Cadastre-se</a>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\upf\upf\quinta_feira_php\locadora-filmes\resources\views/auth/login.blade.php ENDPATH**/ ?>