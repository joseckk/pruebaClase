<?php

namespace app\components;

use yii\base\Component;

class Prueba extends Component
{
    public $uno;
    public $dos;

    public function __construct($config = [])
    {
        parent::__construct($config);
    }
}