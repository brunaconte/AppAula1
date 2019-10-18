<?php $__env->startSection('cabecalho'); ?>
    <a href="<?php echo e(url('/')); ?>">Home</a>
    <h5>(Seção Blade Cabeçalho)</h5>
    <h2>Alunos cadastrados</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <h5>(Seção Blade Cabeçalho)</h5>
    <h2>Alunos Turma</h2>

    <table>
        <thead>
            <th> Nome </th>
            <th> Curso </th>
            <th> Turma </th>
            <th> Ações </th>
        </tread>
        <tbody>
                <?php $__currentLoopData = $alunos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dados): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                <td> <?php echo e($dados-> id); ?></td>
                <td> <?php echo e($dados-> nome); ?></td>
                <td> <?php echo e($dados-> curso); ?></td>
               </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\AppAula\resources\views/alunos.blade.php ENDPATH**/ ?>