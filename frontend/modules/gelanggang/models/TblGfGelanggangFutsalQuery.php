<?php

namespace frontend\modules\gelanggang\models;

/**
 * This is the ActiveQuery class for [[GelanggangFutsal]].
 *
 * @see GelanggangFutsal
 */
class TblGfGelanggangFutsalQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return GelanggangFutsal[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return GelanggangFutsal|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
