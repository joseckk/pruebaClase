<?php

use yii\bootstrap4\Html;

?>

<?= Html::beginForm(['libros/create']) ?>

    <?= Html::label('Título', 'titulo') ?>
    <?= Html::textInput('titulo', null, ['id' => 'titulo']) ?>

    <?= Html::label('Autor', 'autor') ?>
    <?= Html::textInput('autor', null, ['id' => 'autor']) ?>
 
<?= Html::endForm() ?>
