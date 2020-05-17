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
 * @property string|null $faaliyet_kapsami
 * @property int|null $aktif
 *
 * @property GenelKurulForm[] $genelKurulForms
 * @property KulupUye[] $kulupUyes
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
     * @return KuluplerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KuluplerQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['aktif'], 'integer'],
            [['name', 'danisman_mail', 'email', 'amac', 'faaliyet_kapsami'], 'string', 'max' => 255],
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
            'faaliyet_kapsami' => 'Faaliyet Kapsami',
            'aktif' => 'Aktif',
        ];
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
     * Gets query for [[KulupUyes]].
     *
     * @return ActiveQuery|KulupUyeQuery
     */
    public function getKulupUyes()
    {
        return $this->hasMany(KulupUye::className(), ['kulup_id' => 'id']);
    }
}
