<?php

namespace app\controllers;

use app\models\LibrosForm;
use app\models\LibrosSearch;
use Yii;
use yii\data\Pagination;
use yii\db\Query;
use yii\web\Controller;

class LibrosController extends Controller
{
    public function actionCreate()
    {
        $librosForm = new LibrosForm();

        if ($librosForm->load(Yii::$app->request->post()) && $librosForm->validate()) {
            return $this->redirect(['site/index']);
        }

        return $this->render('create', [
            'librosForm' => $librosForm,
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
        $librosSearch = new LibrosSearch();
        $libros = (new Query())->from('libros');
        
        if ($librosSearch->load(Yii::$app->request->queryParams)
            && $librosSearch->validate()) {
            $libros->filterWhere(['isbn' => $librosSearch->isbn]);
            $libros->andFilterWhere(['like', 'titulo', $librosSearch->titulo]);
        }
        
        $pagination = new Pagination([
            'pageSize' => 5,
            'totalCount' => $libros->count(),
        ]);

        $libros->limit($pagination->limit)->offset($pagination->offset);

        return $this->render('index', [
            'libros' => $libros->all(),
            'librosSearch' => $librosSearch,
            'pagination' => $pagination,
        ]);
    }
}