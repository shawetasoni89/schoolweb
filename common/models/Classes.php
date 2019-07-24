<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "class".
 *
 * @property int $id
 * @property string $class
 * @property int $created
 * @property int $modified
 */
class Classes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'class';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['class', 'created', 'modified'], 'required'],
            [['created', 'modified'], 'integer'],
            [['class'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class' => 'Class',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * {@inheritdoc}
     * @return ClassQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ClassQuery(get_called_class());
    }
}
