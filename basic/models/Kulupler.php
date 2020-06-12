<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "kulupler".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $danisman_mail
 * @property string|null $email
 * @property string|null $amac
 * @property int|null $aktif
 * @property string|null $logo
 * @property string $acilis
 *
 * @property Etkinlik[] $etkinliks
 * @property GenelKurulForm[] $genelKurulForms
 * @property KulupFaaliyet[] $kulupFaaliyets
 * @property KulupUyeler[] $kulupUyes
 */
class Kulupler extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kulupler';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['amac'], 'string'],
            [['aktif'], 'integer'],
            [['acilis'], 'required'],
            [['acilis'], 'safe'],
            [['name', 'danisman_mail', 'email', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'danisman_mail' => 'Danisman Mail',
            'email' => 'Email',
            'amac' => 'Amac',
            'aktif' => 'Aktif',
            'logo' => 'Logo',
            'acilis' => 'Acilis',
        ];
    }

    /**
     * Gets query for [[Etkinliks]].
     *
     * @return ActiveQuery|EtkinlikQuery
     */
    public function getEtkinliks()
    {
        return $this->hasMany(Etkinlik::className(), ['kulup_id' => 'id']);
    }

    /**
     * Gets query for [[GenelKurulForms]].
     *
     * @return ActiveQuery|GenelKurulFormQuery
     */
    public function getGenelKurulForms()
    {
        return $this->hasMany(GenelKurulForm::className(), ['kulup_id' => 'id']);
    }

    /**
     * Gets query for [[KulupFaaliyets]].
     *
     * @return ActiveQuery|KulupFaaliyetQuery
     */
    public function getKulupFaaliyets()
    {
        return $this->hasMany(KulupFaaliyet::className(), ['kulup_id' => 'id']);
    }

    /**
     * Gets query for [[KulupUyes]].
     *
     * @return ActiveQuery|KulupUyeQuery
     */
    public function getKulupUyes()
    {
        return $this->hasMany(KulupUyeler::className(), ['kulup_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return KuluplerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KuluplerQuery(get_called_class());
    }
}
