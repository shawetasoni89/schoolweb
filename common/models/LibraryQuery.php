<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Library]].
 *
 * @see Library
 */
class LibraryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Library[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Library|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
