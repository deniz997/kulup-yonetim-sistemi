<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "kulup_faaliyet".
 *
 * @property int $id
 * @property int $kulup_id
 * @property int $faaliyet_id
 *
 * @property Faaliyet $faaliyet
 * @property Kulupler $kulup
 */
class KulupFaaliyet extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kulup_faaliyet';
    }

    /**
     * {@inheritdoc}
     * @return KulupFaaliyetQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KulupFaaliyetQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kulup_id', 'faaliyet_id'], 'required'],
            [['kulup_id', 'faaliyet_id'], 'integer'],
            [['faaliyet_id'], 'exist', 'skipOnError' => true, 'targetClass' => Faaliyet::className(), 'targetAttribute' => ['faaliyet_id' => 'id']],
            [['kulup_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kulupler::className(), 'targetAttribute' => ['kulup_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kulup_id' => 'Kulup ID',
            'faaliyet_id' => 'Faaliyet ID',
        ];
    }

    /**
     * Gets query for [[Faaliyet]].
     *
     * @return ActiveQuery|FaaliyetQuery
     */
    public function getFaaliyet()
    {
        return $this->hasOne(Faaliyet::className(), ['id' => 'faaliyet_id']);
    }

    /**
     * Gets query for [[Kulup]].
     *
     * @return ActiveQuery|KuluplerQuery
     */
    public function getKulup()
    {
        return $this->hasOne(Kulupler::className(), ['id' => 'kulup_id']);
    }
}
