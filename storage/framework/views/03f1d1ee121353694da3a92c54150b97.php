

<?php $__env->startSection('title', 'Locações'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h1>Locações</h1>
    <a href="<?php echo e(route('locacoes.create')); ?>" class="btn btn-primary mb-3">Adicionar Nova Locação</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Filme</th>
                <th>Data Locação</th>
                <th>Data Devolução</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $locacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($locacao->id); ?></td>
                <td><?php echo e($locacao->cliente->nome); ?></td>
                <td><?php echo e($locacao->filme->titulo); ?></td>
                <td><?php echo e($locacao->data_locacao); ?></td>
                <td><?php echo e($locacao->data_devolucao); ?></td>
                <td>
                    <a href="<?php echo e(route('locacoes.show', $locacao->id)); ?>" class="btn btn-info">Ver</a>
                    <a href="<?php echo e(route('locacoes.edit', $locacao->id)); ?>" class="btn btn-warning">Editar</a>
                    <form action="<?php echo e(route('locacoes.destroy', $locacao->id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\upf\upf\quinta_feira_php\locadora-filmes\resources\views/locacoes/index.blade.php ENDPATH**/ ?>