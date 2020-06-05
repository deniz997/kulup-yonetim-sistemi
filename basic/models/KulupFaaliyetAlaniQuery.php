<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[KulupFaaliyetAlani]].
 *
 * @see KulupFaaliyetAlani
 */
class KulupFaaliyetAlaniQuery extends ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return KulupFaaliyetAlani[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return KulupFaaliyetAlani|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
