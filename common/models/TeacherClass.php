<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "teacher_class".
 *
 * @property int $id
 * @property int $class_id
 * @property int $level_id
 * @property int $teacher_id
 * @property int $created
 * @property int $modified
 */
class TeacherClass extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher_class';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['class_id', 'level_id', 'teacher_id', 'created', 'modified'], 'required'],
            [['class_id', 'level_id', 'teacher_id', 'created', 'modified'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class_id' => 'Class ID',
            'level_id' => 'Level ID',
            'teacher_id' => 'Teacher ID',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TeacherClassQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeacherClassQuery(get_called_class());
    }
}
