<?php

namespace app\models;

use yii\base\Model;

/**
 * Modelo para el formulario de crear autores.
 * 
 * Los autores contienen:
 * 
 * - Nombre
 */
class AutoresForm extends Model
{
    public $nombre;
    
    public function rules()
    {
        return [
            [['nombre'], 'required'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'nombre' => 'Nombre',
        ];
    }
}