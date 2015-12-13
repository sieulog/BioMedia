<?php

namespace common\models;

use creocoder\nestedsets\NestedSetsQueryBehavior;

/**
 * This is the ActiveQuery class for [[VideoCategory]].
 *
 * @see VideoCategory
 */
class VideoCategoryQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/
    public function behaviors() {
        return [
            NestedSetsQueryBehavior::className(),
        ];
    }
    /**
     * @inheritdoc
     * @return VideoCategory[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return VideoCategory|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}