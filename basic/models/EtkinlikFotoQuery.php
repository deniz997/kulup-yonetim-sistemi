<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[EtkinlikFoto]].
 *
 * @see EtkinlikFoto
 */
class EtkinlikFotoQuery extends ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return EtkinlikFoto[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return EtkinlikFoto|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
