<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[KulupUyeler]].
 *
 * @see KulupUyeler
 */
class KulupUyelerQuery extends ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return KulupUyeler[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return KulupUyeler|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
