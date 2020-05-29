<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "etkinlik".
 *
 * @property int $id
 * @property int|null $kulup_id
 * @property string|null $tur
 * @property string|null $adi
 * @property string|null $konusu
 * @property string $tarih
 * @property string|null $ortam
 * @property int|null $sonuc_raporu_yazildi_mi
 *
 * @property EtkinlikFoto[] $etkinlikFotos
 * @property KatilimciEtkinlik[] $katilimciEtkinliks
 * @property SonucRaporu[] $sonucRaporus
 */
class Etkinlik extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'etkinlik';
    }

    /**
     * {@inheritdoc}
     * @return EtkinlikQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new EtkinlikQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kulup_id', 'sonuc_raporu_yazildi_mi'], 'integer'],
            [['tur'], 'string'],
            [['tarih'], 'required'],
            [['tarih'], 'safe'],
            [['adi', 'konusu', 'ortam'], 'string', 'max' => 255],
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
            'tur' => 'Tur',
            'adi' => 'Adi',
            'konusu' => 'Konusu',
            'tarih' => 'Tarih',
            'ortam' => 'Ortam',
            'sonuc_raporu_yazildi_mi' => 'Sonuc Raporu Yazildi Mi',
        ];
    }

    /**
     * Gets query for [[EtkinlikFotos]].
     *
     * @return ActiveQuery|EtkinlikFotoQuery
     */
    public function getEtkinlikFotos()
    {
        return $this->hasMany(EtkinlikFoto::className(), ['etkinlik_id' => 'id']);
    }

    /**
     * Gets query for [[KatilimciEtkinliks]].
     *
     * @return ActiveQuery|KatilimciEtkinlikQuery
     */
    public function getKatilimciEtkinliks()
    {
        return $this->hasMany(KatilimciEtkinlik::className(), ['etkinlik_id' => 'id']);
    }

    public function getKulupName()
    {
        return Kulupler::find()->where('id=:id', [
            ':id' => $this->kulup_id
        ])->one()->name;
    }

    /**
     * Gets query for [[SonucRaporus]].
     *
     * @return ActiveQuery|SonucRaporuQuery
     */
    public function getSonucRaporus()
    {
        return $this->hasMany(SonucRaporu::className(), ['etkinlik_form_id' => 'id']);
    }
}
