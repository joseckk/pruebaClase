<?php

namespace app\controllers;

use app\models\Autores;
use app\models\Libros;
use yii\data\ActiveDataProvider;
use yii\db\Query;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class AutoresController extends Controller
{
    public function actionCreate()
    {
        $autores = new Autores();

        if ($autores->load(Yii::$app->request->post()) 
        && $autores->validate()) {
            return $this->redirect(['site/index']);
        }

        return $this->render('create', [
            'autores' => $autores,
        ]);
    }

    /*
    CRUD:

       - index: visualizar todas las filas de la tabla
       - create: dar de alta
       - update: modificar
       - delete: borrar
       - view:   ver una fila
    */

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Autores::find(),
            'pagination' => [
                'pageSize' => 2,
            ],
            'sort' => [
                'attributes' => [
                    'nombre' => [
                        'asc' => ['nombre' => SORT_ASC],
                        'desc' => ['nombre' => SORT_DESC],
                        'label' => 'Nombre',
                    ],
                ],
            ]
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionView($id)
    {
        $autor = $this->findAutor($id);

        $dataProvider = new ActiveDataProvider([
            'query' => (new Query())
                            ->from('libros')
                            ->where(['autores_id' => $id]),
            'pagination' => [
                'pageSize' => 5,
            ],
            'sort' => [
                'attributes' => [
                    'isbn' => [
                        'asc' => ['isbn' => SORT_ASC],
                        'desc' => ['isbn' => SORT_DESC],
                        'default' => SORT_ASC,
                        'label' => 'ISBN',
                    ],
                    'titulo' => [
                        'label' => 'Título',
                    ],
                    'anyo' => [
                        'label' => 'Año',
                    ],
                ],
            ]
        ]);
        

        return $this->render('view', [
            'autor' => $autor,
            'dataProvider' => $dataProvider,
        ]);
    }

    private function findAutor($id)
    {
        
        $autor = Autores::findOne($id);

        if ($autor === null) {
            throw new NotFoundHttpException('Ese autor no existe.');
        }

        return $autor;
    }
}