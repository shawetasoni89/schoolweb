<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "teacher".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $gender
 * @property string $majority
 * @property string $address
 * @property string $note
 * @property string $identification_id
 * @property int $created
 * @property int $modified
 */
class Teacher extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'teacher';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'gender', 'majority', 'address', 'note', 'identification_id', 'created', 'modified'], 'required'],
            [['user_id', 'created', 'modified'], 'integer'],
            [['note'], 'string'],
            [['name', 'majority', 'address'], 'string', 'max' => 255],
            [['gender', 'identification_id'], 'string', 'max' => 20],
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
            'majority' => 'Majority',
            'address' => 'Address',
            'note' => 'Note',
            'identification_id' => 'Identification ID',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * {@inheritdoc}
     * @return TeacherQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TeacherQuery(get_called_class());
    }
}
