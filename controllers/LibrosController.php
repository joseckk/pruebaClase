<?php

namespace app\controllers;

use yii\web\Controller;

class LibrosController extends Controller
{
    public function actionCreate()
    {
        return $this->render('create');
    }
}