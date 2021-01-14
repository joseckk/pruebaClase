<?php

namespace app\controllers;

use app\models\LibrosForm;
use Yii;
use yii\web\Controller;

class LibrosController extends Controller
{
    public function actionCreate()
    {
        $librosForm = new LibrosForm();

        Yii::debug(Yii::$app->request->post());

        return $this->render('create', [
            'librosForm' => $librosForm,
        ]);
    }
}