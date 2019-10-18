<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página principal</title>
</head>
<body>
    <h1> Conceitos iniciais / Rotas / Views / Blades</h1>
    <div>
        <?php echo $__env->yieldContent('cabecalho'); ?>
        <!--Quando alguma página extende a principal e usa a section cabeçalho ela vem pra ca--!>
    </div>

    <div>
        <?php echo $__env->yieldContent('conteudo'); ?>
        <!--Quando alguma página extende a principal e usa a section cabeçalho ela vem pra ca--!>
    </div>
</body>
</html>
<?php /**PATH D:\wamp\www\AppAula\resources\views/principal.blade.php ENDPATH**/ ?>