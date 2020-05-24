<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[Etkinlik]].
 *
 * @see Etkinlik
 */
class EtkinlikQuery extends ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Etkinlik[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Etkinlik|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
