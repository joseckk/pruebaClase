<?php

use yii\grid\GridView;
use yii\bootstrap4\Html;
use yii\bootstrap4\Alert;
use yii\widgets\DetailView;
use yii\helpers\Url;

$this->title = 'Detalles del autor ' . Html::encode($autor->nombre);
$this->params['breadcrumbs'][] = ['label' => 'Autores', 'url' => ['autores/index']];
$this->params['breadcrumbs'][] = $this->title;

\yii\web\YiiAsset::register($this);
?>
<div class="autores-view">

    <h1><?= Html::encode($this->title) ?></h1>

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
                [
                    'class' => 'yii\grid\ActionColumn',
                    'template' => '{update}{delete}',
                    'buttons' => [
                        'update' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', 
                            Url::to(['libros/update', 'id' => $model['id']]));
                        },
                        'delete' => function ($url, $model, $key) {
                            return Html::a('<span class="glyphicon glyphicon-trash"></span>', 
                            Url::to(['libros/delete', 'id' => $model['id']]));
                        },
                    ],
                ],
            ],
        ]); ?>

    <?php else: ?>
        <?= Alert::widget([
                'options' => ['class' => 'alert-info'],
                'body' => "No se encuentran libros que referencien al autor.",
            ]) ?>
    <?php endif ?>
</div>
