<?php

namespace app\controllers;

use app\models\LibrosForm;
use yii\web\Controller;

class LibrosController extends Controller
{
    public function actionCreate()
    {
        $librosForm = new LibrosForm();

        return $this->render('create', [
            'librosForm' => $librosForm,
        ]);
    }
}