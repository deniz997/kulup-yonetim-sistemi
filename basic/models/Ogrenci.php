<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "ogrenci".
 *
 * @property int $id
 * @property int|null $ogr_num
 * @property string|null $tam_ad
 * @property string|null $email
 * @property int|null $departmentID
 *
 * @property KulupUyeler[] $kulupUyes
 * @property Department $department
 */
class Ogrenci extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ogrenci';
    }

    /**
     * {@inheritdoc}
     * @return OgrenciQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new OgrenciQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ogr_num', 'departmentID'], 'integer'],
            [['tam_ad', 'email'], 'string', 'max' => 255],
            [['departmentID'], 'exist', 'skipOnError' => true, 'targetClass' => Department::className(), 'targetAttribute' => ['departmentID' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ogr_num' => 'Ogr Num',
            'tam_ad' => 'Tam Ad',
            'email' => 'Email',
            'departmentID' => 'Department ID',
        ];
    }

    /**
     * Gets query for [[KulupUyes]].
     *
     * @return ActiveQuery|KulupUyeQuery
     */
    public function getKulupUyes()
    {
        return $this->hasMany(KulupUye::className(), ['ogrenci_id' => 'id']);
    }

    /**
     * Gets query for [[Department]].
     *
     * @return ActiveQuery|DepartmentQuery
     */
    public function getDepartment()
    {
        return $this->hasOne(Department::className(), ['id' => 'departmentID']);
    }
}
