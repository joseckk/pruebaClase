<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Alert;
use yii\bootstrap4\Html;

$this->title = 'Calculadora';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Calculadora</h1>

<?php $form = ActiveForm::begin([
    'method' => 'get',
    'action' => ['calculadora/calcular'],
]) ?>

    <?= $form->field($calculadoraForm, 'op1') ?>
    <?= $form->field($calculadoraForm, 'op2') ?>
    <?= $form->field($calculadoraForm, 'op')->dropDownList($lista) ?>

    <div class="form-group">
        <?= Html::submitButton('Calcular', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end() ?>

<?php if (isset($resultado)): ?>
    <?= Alert::widget([
        'options' => ['class' => 'alert-info'],
        'body' => "El resultado es <strong>$resultado</strong>.",
    ]) ?>
<?php endif ?>







    Active Record (Mapeado Objeto-Relacional)
--------------------
    Query Builder
--------------------
     DAO (Data Access Objects)
--------------------
     PDO (PHP)




