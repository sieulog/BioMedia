<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "module".
 *
 * @property string $title
 * @property string $description
 */
class Module extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'module';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title', 'description'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'title' => Yii::t('backend', 'Title'),
            'description' => Yii::t('backend', 'Description'),
        ];
    }

    /**
     * @inheritdoc
     * @return ModuleQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ModuleQuery(get_called_class());
    }
}
