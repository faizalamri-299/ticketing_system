<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Report;

/**
 * ReportSearch represents the model behind the search form of `frontend\models\Report`.
 */
class ReportSearch extends Report
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'fk_cpre_company_id', 'cpre_status', 'cpre_priority', 'cpre_done'], 'integer'],
            [['sys_created_at', 'sys_updated_at', 'cpre_details'], 'safe'],
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
        $query = Report::find();

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
            'fk_cpre_company_id' => $this->fk_cpre_company_id,
            'sys_created_at' => $this->sys_created_at,
            'sys_updated_at' => $this->sys_updated_at,
            'cpre_status' => $this->cpre_status,
            'cpre_priority' => $this->cpre_priority,
            'cpre_done' => $this->cpre_done,
        ]);

        $query->andFilterWhere(['like', 'cpre_details', $this->cpre_details]);

        return $dataProvider;
    }
}
