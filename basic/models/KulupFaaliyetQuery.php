<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[KulupFaaliyet]].
 *
 * @see KulupFaaliyet
 */
class KulupFaaliyetQuery extends ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return KulupFaaliyet[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return KulupFaaliyet|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
