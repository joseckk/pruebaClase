<?php

use yii\grid\GridView;
use yii\bootstrap4\Html;
use yii\bootstrap4\Alert;
use yii\widgets\DetailView;

$this->title = 'Detalles del autor ' . Html::encode($autor['nombre']);
$this->params['breadcrumbs'][] = ['label' => 'Autores', 'url' => ['autores/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h3>Autor</h3>

<?= DetailView::widget([
    'model' => $autor,
    'attributes' => [
        'nombre',
    ],
]) ?>


<h3>Libros del autor</h3>

<?php if (count($dataProvider->getModels()) !== 0): ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            'isbn',
            'titulo',
            'anyo',
        ],
    ]) ?>

<?php else: ?>
    <?= Alert::widget([
            'options' => ['class' => 'alert-info'],
            'body' => "No se encuentran libros que referencien al autor.",
        ]) ?>
<?php endif ?>