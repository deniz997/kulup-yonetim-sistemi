<?php

namespace app\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "kulup_infos".
 *
 * @property string|null $name
 * @property string $acilis
 * @property string|null $logo
 * @property int $Uye Sayisi
 * @property int $Etkinlik Sayisi
 */
class KulupInfos extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kulup_infos';
    }

    /**
     * {@inheritdoc}
     * @return KulupInfosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new KulupInfosQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['acilis'], 'required'],
            [['acilis'], 'safe'],
            [['Uye Sayisi', 'Etkinlik Sayisi'], 'integer'],
            [['name', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Name',
            'acilis' => 'Acilis',
            'logo' => 'Logo',
            'Uye Sayisi' => 'Uye Sayisi',
            'Etkinlik Sayisi' => 'Etkinlik Sayisi',
        ];
    }
}
