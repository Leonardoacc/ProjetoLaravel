

<?php $__env->startSection('title', 'Funcionários'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Funcionários</h1>

    <a href="<?php echo e(route('funcionarios.create')); ?>" class="btn btn-primary mb-3">Adicionar Novo Funcionário</a>

    <?php if(session('success')): ?>
        <div class="alert alert-success">
            <?php echo e(session('success')); ?>

        </div>
    <?php endif; ?>

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Cargo</th>
                <th>Salário</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $funcionarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $funcionario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($funcionario->id); ?></td>
                    <td><?php echo e($funcionario->nome); ?></td>
                    <td><?php echo e($funcionario->email); ?></td>
                    <td><?php echo e($funcionario->telefone); ?></td>
                    <td><?php echo e($funcionario->cargo); ?></td>
                    <td><?php echo e($funcionario->salario); ?></td>
                    <td>
                        <a href="<?php echo e(route('funcionarios.show', $funcionario->id)); ?>" class="btn btn-info">Ver</a>
                        <a href="<?php echo e(route('funcionarios.edit', $funcionario->id)); ?>" class="btn btn-warning">Editar</a>
                        <form action="<?php echo e(route('funcionarios.destroy', $funcionario->id)); ?>" method="POST" style="display:inline;">
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

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\upf\upf\quinta_feira_php\locadora-filmes\resources\views/funcionarios/index.blade.php ENDPATH**/ ?>