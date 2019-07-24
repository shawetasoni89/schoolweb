<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "level".
 *
 * @property int $id
 * @property string $level
 * @property int $created
 * @property int $modified
 */
class Level extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'level';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['level', 'created', 'modified'], 'required'],
            [['created', 'modified'], 'integer'],
            [['level'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'level' => 'Level',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * {@inheritdoc}
     * @return LevelQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LevelQuery(get_called_class());
    }
}
