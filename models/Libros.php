<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "libros".
 *
 * @property int $id
 * @property string $isbn
 * @property string $titulo
 * @property float|null $anyo
 * @property int $autores_id
 *
 * @property Autores $autores
 */
class Libros extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'libros';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isbn', 'titulo', 'autores_id'], 'required'],
            [['anyo'], 'number'],
            [['autores_id'], 'default', 'value' => null],
            [['autores_id'], 'integer'],
            [['isbn'], 'string', 'max' => 13],
            [['titulo'], 'string', 'max' => 255],
            [['isbn'], 'unique'],
            [['autores_id'], 'exist', 'skipOnError' => true, 'targetClass' => Autores::className(), 'targetAttribute' => ['autores_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isbn' => 'ISBN',
            'titulo' => 'Título',
            'anyo' => 'Año',
            'autores_id' => 'Autores ID',
        ];
    }

    /**
     * Gets query for [[Autores]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAutores()
    {
        return $this->hasOne(Autores::class, ['id' => 'autores_id'])->inverseOf('libros');
    }
}
