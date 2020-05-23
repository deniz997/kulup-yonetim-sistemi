<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "kulup_uye".
 *
 * @property int $id
 * @property int|null $kulup_id
 * @property int|null $ogrenci_id
 * @property string|null $ogr_role
 * @property string|null $uyelik_tarihi
 * @property int|null $is_approved
 * @property string|null $uyelik_tarihi_bitis
 * @property string|null $ayrilma_sebebi
 *
 * @property Kulupler $kulup
 * @property Ogrenci $ogrenci
 */
class KulupUyeler extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kulup_uye';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kulup_id', 'ogrenci_id', 'is_approved'], 'integer'],
            [['ogr_role', 'ayrilma_sebebi'], 'string'],
            [['uyelik_tarihi', 'uyelik_tarihi_bitis'], 'safe'],
            [['kulup_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kulupler::className(), 'targetAttribute' => ['kulup_id' => 'id']],
            [['ogrenci_id'], 'exist', 'skipOnError' => true, 'targetClass' => Ogrenci::className(), 'targetAttribute' => ['ogrenci_id' => 'id']],
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
            'ogrenci_id' => 'Ogrenci ID',
            'ogr_role' => 'Ogr Role',
            'uyelik_tarihi' => 'Uyelik Tarihi',
            'is_approved' => 'Is Approved',
            'uyelik_tarihi_bitis' => 'Uyelik Tarihi Bitis',
            'ayrilma_sebebi' => 'Ayrilma Sebebi',
        ];
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

    /**
     * Gets query for [[Ogrenci]].
     *
     * @return ActiveQuery|OgrenciQuery
     */
    public function getOgrenci()
    {
        return $this->hasOne(Ogrenci::className(), ['id' => 'ogrenci_id']);
    }

    /**
     * {@inheritdoc}
     * @return KulupUyelerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KulupUyelerQuery(get_called_class());
    }
}
