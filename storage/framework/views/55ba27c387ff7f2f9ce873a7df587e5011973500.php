<?php $__env->startSection('cabecalho'); ?>
    <img src="<?php echo e(url('img/homep_ico.png')); ?>"/>
    <h2>Principal - Cadastros</h2>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('conteudo'); ?>
    <a href="/alunos"><img src="<?php echo e(url('img/aluno_ico.png')); ?>"/></a>
    <a href="/professores"><img src="<?php echo e(url('img/prof_ico.png')); ?>"/></a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('principal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\wamp\www\AppAula\resources\views/main.blade.php ENDPATH**/ ?>