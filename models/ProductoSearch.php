<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Producto;

/**
 * ProductoSearch represents the model behind the search form of `app\models\Producto`.
 */
class ProductoSearch extends Producto
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            
            [['cod_pro', 'des_pro', 'nom_pro', 'est_pro'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Producto::find();

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
            'id_pro' => $this->id_pro,
        ]);

        $query->andFilterWhere(['like', 'cod_pro', $this->cod_pro])
            ->andFilterWhere(['like', 'des_pro', $this->des_pro])
            ->andFilterWhere(['like', 'nom_pro', $this->nom_pro])
            ->andFilterWhere(['=', 'est_pro', $this->est_pro]);

        return $dataProvider;
    }
}
