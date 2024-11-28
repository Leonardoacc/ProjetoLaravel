

<?php $__env->startSection('title', 'Registrar Pagamento'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Registrar Pagamento</h1>

    <form action="<?php echo e(route('pagamentos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="locacao_id" class="form-label">Cliente e Locação</label>
            <select name="locacao_id" id="locacao_id" class="form-control" required>
                <option value="">Selecione uma locação</option>
                <?php $__currentLoopData = $locacoes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locacao): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($locacao->id); ?>">
                        Cliente: <?php echo e($locacao->cliente->nome); ?> | Locação ID: <?php echo e($locacao->id); ?>

                    </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="number" step="0.01" class="form-control" id="valor" name="valor" required>
        </div>
        <div class="mb-3">
            <label for="metodo_pagamento" class="form-label">Método de Pagamento</label>
            <select name="metodo_pagamento" id="metodo_pagamento" class="form-control" required>
                <option value="">Selecione o método de pagamento</option>
                <?php $__currentLoopData = $metodosPagamento; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $metodo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($metodo); ?>"><?php echo e($metodo); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="data_pagamento" class="form-label">Data do Pagamento</label>
            <input type="date" class="form-control" id="data_pagamento" name="data_pagamento" required>
        </div>
        <button type="submit" class="btn btn-success">Salvar</button>
        <a href="<?php echo e(route('pagamentos.index')); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\upf\upf\quinta_feira_php\locadora-filmes\resources\views/pagamentos/create.blade.php ENDPATH**/ ?>