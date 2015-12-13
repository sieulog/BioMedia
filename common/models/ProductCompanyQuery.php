<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[ProductCompany]].
 *
 * @see ProductCompany
 */
class ProductCompanyQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return ProductCompany[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return ProductCompany|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}