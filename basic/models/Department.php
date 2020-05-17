<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "department".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $facultyID
 *
 * @property Faculty $faculty
 * @property Ogrenci[] $ogrencis
 */
class Department extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'department';
    }

    /**
     * {@inheritdoc}
     * @return DepartmentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DepartmentQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['facultyID'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['facultyID'], 'exist', 'skipOnError' => true, 'targetClass' => Faculty::className(), 'targetAttribute' => ['facultyID' => 'id']],
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
            'facultyID' => 'Faculty ID',
        ];
    }

    /**
     * Gets query for [[Faculty]].
     *
     * @return ActiveQuery|FacultyQuery
     */
    public function getFaculty()
    {
        return $this->hasOne(Faculty::className(), ['id' => 'facultyID']);
    }

    /**
     * Gets query for [[Ogrencis]].
     *
     * @return ActiveQuery|OgrenciQuery
     */
    public function getOgrencis()
    {
        return $this->hasMany(Ogrenci::className(), ['departmentID' => 'id']);
    }
}
