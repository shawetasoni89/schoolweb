<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[Parents]].
 *
 * @see Parents
 */
class ParentQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Parents[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Parents|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
