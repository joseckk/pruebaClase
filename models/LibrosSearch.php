<?php

namespace app\models;

use yii\base\Model;

class LibrosSearch extends Model
{
    public $isbn;
    public $titulo;

    public function rules()
    {
        return [
            [['isbn', 'titulo'], 'safe'],
        ];
    }
}