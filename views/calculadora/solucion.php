<?php

use yii\bootstrap4\Alert;

?>

<?php if (isset($resultado)): ?>
    <?= Alert::widget([
        'options' => ['class' => 'alert-info'],
        'body' => "El resultado es <strong>$resultado</strong>.",
    ]) ?>
<?php endif ?>