<?php

use yii\bootstrap4\Html;

$this->title = 'Listado de libros';
$this->params['breadcrumbs'][] = $this->title;
?>

<table class="table">
    <thead>
        <th>ISBN</th>
        <th>Título</th>
        <th>Año</th>
    </thead>
    <tbody>
        <?php foreach ($libros as $libro): ?>
            <tr>
                <td><?= Html::encode($libro['isbn']) ?></td>
                <td><?= Html::encode($libro['titulo']) ?></td>
                <td><?= Html::encode($libro['anyo']) ?></td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>