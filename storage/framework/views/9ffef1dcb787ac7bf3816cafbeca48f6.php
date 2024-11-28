

<?php $__env->startSection('title', 'Pagamentos'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Pagamentos</h1>
    <a href="<?php echo e(route('pagamentos.create')); ?>" class="btn btn-primary mb-3">Adicionar Novo Pagamento</a>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Locação ID</th>
                <th>Valor</th>
                <th>Método de Pagamento</th>
                <th>Data do Pagamento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $pagamentos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pagamento): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($pagamento->id); ?></td>
                    <td><?php echo e($pagamento->locacao->cliente->nome); ?></td>
                    <td><?php echo e($pagamento->locacao_id); ?></td>
                    <td><?php echo e($pagamento->valor); ?></td>
                    <td><?php echo e($pagamento->metodo_pagamento); ?></td>
                    <td><?php echo e($pagamento->data_pagamento); ?></td>
                    <td>
                        <a href="<?php echo e(route('pagamentos.edit', $pagamento->id)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('pagamentos.destroy', $pagamento->id)); ?>" method="POST" style="display: inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\upf\upf\quinta_feira_php\locadora-filmes\resources\views/pagamentos/index.blade.php ENDPATH**/ ?>