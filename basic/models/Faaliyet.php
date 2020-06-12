<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "faaliyet".
 *
 * @property int $id
 * @property string $isim
 *
 * @property KulupFaaliyet[] $kulupFaaliyets
 */
class Faaliyet extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faaliyet';
    }

    /**
     * {@inheritdoc}
     * @return FaaliyetQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FaaliyetQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isim'], 'required'],
            [['isim'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isim' => 'Isim',
        ];
    }

    /**
     * Gets query for [[KulupFaaliyets]].
     *
     * @return ActiveQuery|KulupFaaliyetQuery
     */
    public function getKulupFaaliyets()
    {
        return $this->hasMany(KulupFaaliyet::className(), ['faaliyet_id' => 'id']);
    }
}
