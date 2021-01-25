<?php

namespace app\models;

use yii\base\Model;

class IndexForm extends Model
{
    public $isbn;

    public function rules()
    {
        return [
            [['isbn'], 'safe'],
        ];
    }
}