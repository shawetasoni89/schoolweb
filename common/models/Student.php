<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $gender
 * @property int $level_id
 * @property int $class_id
 * @property double $fee
 * @property double $paid_amount
 * @property string $due_date
 * @property int $created
 * @property int $modified
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'gender', 'level_id', 'class_id', 'fee', 'paid_amount', 'due_date', 'created', 'modified'], 'required'],
            [['user_id', 'level_id', 'class_id', 'created', 'modified'], 'integer'],
            [['fee', 'paid_amount'], 'number'],
            [['due_date'], 'safe'],
            [['name'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'gender' => 'Gender',
            'level_id' => 'Level ID',
            'class_id' => 'Class ID',
            'fee' => 'Fee',
            'paid_amount' => 'Paid Amount',
            'due_date' => 'Due Date',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * {@inheritdoc}
     * @return StudentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new StudentQuery(get_called_class());
    }
}
