<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\LinkPager;
use yii\bootstrap4\Html;
use yii\bootstrap4\Alert;

$this->title = 'Detalles del autor ' . Html::encode($autor['nombre']);
$this->params['breadcrumbs'][] = ['label' => 'Autores', 'url' => ['autores/index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<h3>Autor</h3>
<p><?= Html::encode($autor['nombre']) ?></p>

<?php if (count($libros->all()) !== 0): ?>
    <table class="table">
        <thead>
            <th>ISBN</th>
            <th>Título</th>
            <th>Año</th>
        </thead>
        <tbody>
            <?php foreach ($libros->each() as $libro): ?>
                <tr>
                    <td><?= Html::encode($libro['isbn']) ?></td>
                    <td><?= Html::encode($libro['titulo']) ?></td>
                    <td><?= Html::encode($libro['anyo']) ?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>

<?php else: ?>
    <?= Alert::widget([
            'options' => ['class' => 'alert-info'],
            'body' => "No se encuentran libros que referencien al autor.",
        ]) ?>
<?php endif ?>