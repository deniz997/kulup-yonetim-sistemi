<?php

namespace app\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "faculty".
 *
 * @property int $id
 * @property string|null $name
 *
 * @property Department[] $departments
 */
class Faculty extends ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'faculty';
    }

    /**
     * {@inheritdoc}
     * @return FacultyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FacultyQuery(get_called_class());
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'string', 'max' => 255],
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
        ];
    }

    /**
     * Gets query for [[Departments]].
     *
     * @return ActiveQuery|DepartmentQuery
     */
    public function getDepartments()
    {
        return $this->hasMany(Department::className(), ['facultyID' => 'id']);
    }
}
