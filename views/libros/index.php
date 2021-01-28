<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
use yii\grid\GridView;

$this->title = 'Listado de libros';
$this->params['breadcrumbs'][] = $this->title;
?>

<?php $form = ActiveForm::begin([
    'method' => 'get',
    'action' => ['libros/index'],
]) ?>
    <?= $form->field($librosSearch, 'isbn') ?>
    <?= $form->field($librosSearch, 'titulo') ?>

    <div class="form-group">
        <?= Html::submitButton('Buscar', ['class' => 'btn btn-primary']) ?>
    </div>
<?php ActiveForm::end() ?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'isbn',
        'titulo',
        'anyo',
        [
            'label' => 'Autor',
            'value' => function ($model, $key, $index, $column) {
                return  Html::a($model['nombre'], [
                    'autores/view',
                    'id' => $model['autores_id'],
                ],);
            },
            'format' => 'html',
        ],
    ],
]) ?>