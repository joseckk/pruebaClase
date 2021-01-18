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
    private $_isbn;
    private $_db = null;

    public $titulo;
    public $autor;

    public function rules()
    {
        return [
            [['titulo'], 'required'],
            [['autor'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'titulo' => 'Título',
            'autor' => 'Autor',
        ];
    }

    public function getIsbn()
    {
        return $this->_isbn;
    }

    public function setIsbn($isbn) {
        if (ctype_digit((string) $isbn)) {
            $this->_isbn = $isbn;
        }
    }

    public function getDb()
    {
        if ($this->_db === null) {
            $this->_db = new \DateTime();
        }

        return $this->_db;
    }
}