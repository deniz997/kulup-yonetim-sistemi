<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "katilimci_etkinlik".
 *
 * @property int $id
 * @property string|null $katilimci_isim
 * @property int|null $etkinlik_id
 *
 * @property Etkinlik $etkinlik
 */
class KatilimciEtkinlik extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'katilimci_etkinlik';
    }

    /**
     * {@inheritdoc}
     * @return KatilimciEtkinlikQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KatilimciEtkinlikQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['etkinlik_id'], 'integer'],
            [['katilimci_isim'], 'string', 'max' => 255],
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
            'katilimci_isim' => 'Katilimci Isim',
            'etkinlik_id' => 'Etkinlik ID',
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
