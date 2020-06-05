<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "kulup_faaliyet_alani".
 *
 * @property int $id
 * @property int|null $mesleki
 * @property int|null $bilimsel
 * @property int|null $kulturel
 * @property int|null $sanatsal
 * @property int|null $sportif
 * @property int|null $sosyal
 *
 * @property Kulupler $kulupler
 */
class KulupFaaliyetAlani extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kulup_faaliyet_alani';
    }

    /**
     * {@inheritdoc}
     * @return KulupFaaliyetAlaniQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KulupFaaliyetAlaniQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['mesleki', 'bilimsel', 'kulturel', 'sanatsal', 'sportif', 'sosyal'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'mesleki' => 'Mesleki',
            'bilimsel' => 'Bilimsel',
            'kulturel' => 'Kulturel',
            'sanatsal' => 'Sanatsal',
            'sportif' => 'Sportif',
            'sosyal' => 'Sosyal',
        ];
    }

    /**
     * Gets query for [[Kulupler]].
     *
     * @return ActiveQuery|KuluplerQuery
     */
    public function getKulupler()
    {
        return $this->hasOne(Kulupler::className(), ['id' => 'id']);
    }
}
