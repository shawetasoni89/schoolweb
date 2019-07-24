<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "library".
 *
 * @property int $id
 * @property int $class_id
 * @property int $level_id
 * @property string $title
 * @property string $file
 * @property int $created
 * @property int $modified
 */
class Library extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'library';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['class_id', 'level_id', 'title', 'file', 'created', 'modified'], 'required'],
            [['class_id', 'level_id', 'created', 'modified'], 'integer'],
            [['title', 'file'], 'string', 'max' => 255],
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
            'title' => 'Title',
            'file' => 'File',
            'created' => 'Created',
            'modified' => 'Modified',
        ];
    }

    /**
     * {@inheritdoc}
     * @return LibraryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new LibraryQuery(get_called_class());
    }
}
