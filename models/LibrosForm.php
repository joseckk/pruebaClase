<?php

namespace app\models;

use yii\base\Model;

/**
 * Modelo para el formulario de crear libros.
 * 
 * Los libros contienen:
 * 
 * - Título
 * - Autor
 */
class LibrosForm extends Model
{
    public $titulo;
    public $autor;

    public function attributeLabels()
    {
        return [
            'titulo' => 'Título',
            'autor' => 'Autor',
        ];
    }
}