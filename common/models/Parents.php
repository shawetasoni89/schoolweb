<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "parent".
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $gender
 * @property string $identification_id
 * @property string $address
 * @property string $note
 * @property int $created
 * @property int $modified
 */
class Parents extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'parent';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'gender', 'identification_id', 'address', 'note', 'created', 'modified'], 'required'],
            [['user_id', 'created', 'modified'], 'integer'],
            [['note'], 'string'],
            [['name', 'address'], 'string', 'max' => 255],
            [['gender'], 'string', 'max' => 10],
            [['identification_id'], 'string', 'max' => 50],
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
            'identification_id' => 'Identification ID',
            'address' => 'Address',
            'note' => 'Note',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ParentQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ParentQuery(get_called_class());
    }
}
