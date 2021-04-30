<?php

namespace frontend\modules\gelanggang\models;

use Yii;

/**
 * This is the model class for table "tbl_gf_gelanggang_futsal".
 *
 * @property int $id
 * @property string $gf_mod_nama_gelanggang
 * @property string $gf_mod_lokasi_gelanggang
 * @property string $gf_mod_bayaran
 */
class GelanggangFutsal extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tbl_gf_gelanggang_futsal';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['gf_mod_nama_gelanggang', 'gf_mod_lokasi_gelanggang', 'gf_mod_bayaran'], 'required'],
            [['gf_mod_nama_gelanggang', 'gf_mod_lokasi_gelanggang', 'gf_mod_bayaran'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'gf_mod_nama_gelanggang' => 'Gf Mod Nama Gelanggang',
            'gf_mod_lokasi_gelanggang' => 'Gf Mod Lokasi Gelanggang',
            'gf_mod_bayaran' => 'Gf Mod Bayaran',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TblGfGelanggangFutsalQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TblGfGelanggangFutsalQuery(get_called_class());
    }
}
