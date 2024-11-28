

<?php $__env->startSection('title', 'Clientes'); ?>

<?php $__env->startSection('content'); ?>
<div class="container mt-4">
    <h1>Clientes</h1>
    <a href="<?php echo e(route('clientes.create')); ?>" class="btn btn-primary mb-3">Adicionar Novo Cliente</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Endereço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $clientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cliente->id); ?></td>
                <td><?php echo e($cliente->nome); ?></td>
                <td><?php echo e($cliente->email); ?></td>
                <td><?php echo e($cliente->telefone); ?></td>
                <td><?php echo e($cliente->endereco); ?></td>
                <td>
                    <a href="<?php echo e(route('clientes.show', $cliente->id)); ?>" class="btn btn-info">Ver</a>
                    <a href="<?php echo e(route('clientes.edit', $cliente->id)); ?>" class="btn btn-warning">Editar</a>
                    <form action="<?php echo e(route('clientes.destroy', $cliente->id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\upf\upf\quinta_feira_php\locadora-filmes\resources\views/clientes/index.blade.php ENDPATH**/ ?>