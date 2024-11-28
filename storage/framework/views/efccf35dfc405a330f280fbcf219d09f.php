

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h1>Filmes</h1>
    <a href="<?php echo e(route('filmes.create')); ?>" class="btn btn-primary mb-3">Adicionar Novo Filme</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $filmes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filme): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($filme->id); ?></td>
                <td><?php echo e($filme->titulo); ?></td>
                <td>
                    <a href="<?php echo e(route('filmes.show', $filme->id)); ?>" class="btn btn-info">Ver</a>
                    <a href="<?php echo e(route('filmes.edit', $filme->id)); ?>" class="btn btn-warning">Editar</a>
                    <form action="<?php echo e(route('filmes.destroy', $filme->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\upf\upf\quinta_feira_php\locadora-filmes\resources\views/filmes/index.blade.php ENDPATH**/ ?>