<?php $__env->startSection('cabecalho'); ?>
    <a href="<?php echo e(url('/')); ?>">Home</a>
    <h5>(Seção Blade Cabeçalho)</h5>
    <h2>Professores cadastrados</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <h5>(Seção Blade Cabeçalho)</h5>
    <h2>Professores Turma</h2>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\AppAula\resources\views/professores.blade.php ENDPATH**/ ?>