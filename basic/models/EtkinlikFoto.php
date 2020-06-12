<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "etkinlik_foto".
 *
 * @property int $id
 * @property int|null $etkinlik_id
 * @property string|null $foto_url
 *
 * @property Etkinlik $etkinlik
 */
class EtkinlikFoto extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etkinlik_foto';
    }

    /**
     * {@inheritdoc}
     * @return EtkinlikFotoQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EtkinlikFotoQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['etkinlik_id'], 'integer'],
            [['foto_url'], 'string'],
            [['etkinlik_id'], 'exist', 'skipOnError' => true, 'targetClass' => Etkinlik::className(), 'targetAttribute' => ['etkinlik_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'etkinlik_id' => 'Etkinlik ID',
            'foto_url' => 'Foto Url',
        ];
    }

    /**
     * Gets query for [[Etkinlik]].
     *
     * @return ActiveQuery|EtkinlikQuery
     */
    public function getEtkinlik()
    {
        return $this->hasOne(Etkinlik::className(), ['id' => 'etkinlik_id']);
    }
}
