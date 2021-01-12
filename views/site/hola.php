<?php

use yii\helpers\Html;

$this->title = 'Saludo';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Hola <?= Html::encode($nombre) ?></h1>
