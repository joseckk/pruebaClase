<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;

?>

<?php $form = ActiveForm::begin() ?>

    <?= $form->field($librosForm, 'titulo') ?>
    <?= $form->field($librosForm, 'autor') ?>

    <div class="form-group">
        <?= Html::submitButton('Crear', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end() ?>