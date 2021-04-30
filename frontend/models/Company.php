<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tbl_cp_company".
 *
 * @property int $id
 * @property string $cp_nama
 */
class Company extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_cp_company';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cp_nama'], 'required'],
            [['cp_nama'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cp_nama' => 'Name',
        ];
    }
}
