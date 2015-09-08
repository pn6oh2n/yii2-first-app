<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Book]].
 *
 * @see Book
 */
class AuthorQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Book[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Book|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}