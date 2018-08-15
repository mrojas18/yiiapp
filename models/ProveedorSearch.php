<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Proveedor;

/**
 * ProveedorSearch represents the model behind the search form of `app\models\Proveedor`.
 */
class ProveedorSearch extends Proveedor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_prov'], 'integer'],
            [['cod_prov', 'nom_prov', 'cuil_prov', 'dir_prov', 'pro_prov', 'est_prov'], 'safe'],
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
        $query = Proveedor::find();

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
            'id_prov' => $this->id_prov,
        ]);

        $query->andFilterWhere(['like', 'cod_prov', $this->cod_prov])
            ->andFilterWhere(['like', 'nom_prov', $this->nom_prov])
            ->andFilterWhere(['like', 'cuil_prov', $this->cuil_prov])
            ->andFilterWhere(['like', 'dir_prov', $this->dir_prov])
            ->andFilterWhere(['like', 'pro_prov', $this->pro_prov])
            ->andFilterWhere(['like', 'est_prov', $this->est_prov]);

        return $dataProvider;
    }
}
