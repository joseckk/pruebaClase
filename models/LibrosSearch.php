<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Libros;

/**
 * LibrosSearch represents the model behind the search form of `app\models\Libros`.
 */
class LibrosSearch extends Libros
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'autores_id'], 'integer'],
            [['isbn', 'titulo'], 'safe'],
            [['anyo'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Libros::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'anyo' => $this->anyo,
            'autores_id' => $this->autores_id,
        ]);

        $query->andFilterWhere(['ilike', 'isbn', $this->isbn])
            ->andFilterWhere(['ilike', 'titulo', $this->titulo]);

        return $dataProvider;
    }
}
