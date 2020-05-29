<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[KatilimciEtkinlik]].
 *
 * @see KatilimciEtkinlik
 */
class KatilimciEtkinlikQuery extends ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return KatilimciEtkinlik[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return KatilimciEtkinlik|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
