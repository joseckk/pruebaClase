<?php

namespace app\controllers;

use app\models\CalculadoraForm;
use Yii;
use yii\web\Controller;

class CalculadoraController extends Controller
{
    public function actionCalcular()
    {
        $calculadoraForm = new CalculadoraForm();
        $resultado = null;

        if ($calculadoraForm->load(Yii::$app->request->post())
            && $calculadoraForm->validate()) {
            // calcular:
            switch ($calculadoraForm->op) {
                case '+':
                    $resultado = $calculadoraForm->op1 + $calculadoraForm->op2;
                    break;
            }
        }

        $this->render('calcular', [
            'calculadoraForm' => $calculadoraForm,
            'resultado' => $resultado,
        ]);
    }
}