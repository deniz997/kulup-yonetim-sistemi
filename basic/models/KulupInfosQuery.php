<?php

namespace app\models;

use yii\db\ActiveQuery;

/**
 * This is the ActiveQuery class for [[KulupInfos]].
 *
 * @see KulupInfos
 */
class KulupInfosQuery extends ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return KulupInfos[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return KulupInfos|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
