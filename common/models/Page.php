<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\behaviors\BlameableBehavior;
use common\onecms\SlugHelper;

/**
 * This is the model class for table "page".
 *
 * @property integer $id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property string $meta_title
 * @property string $meta_description
 * @property string $meta_keywords
 * @property integer $status
 * @property integer $created_by
 * @property integer $updated_by
 * @property integer $created_at
 * @property integer $updated_at
 */
class Page extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'page';
    }
    /**
    * @inheritdoc
    */
    public function attributes()
    {
        return ['id', 'title', 'slug', 'content', 'meta_title', 'meta_description', 'meta_keywords',
                'status', 'created_by', 'updated_by', 'created_at', 'updated_at'];
    }
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => SlugHelper::className(),
                'attribute' => 'slug',
                'slugAttribute' => 'slug',
                'immutable' => true,
                'ensureUnique' => true,
            ],
            [
                'class' => TimestampBehavior::className(),
            ],
            [
                'class' => BlameableBehavior::className(),
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_by', 'updated_by', 'created_at', 'updated_at'], 'integer'],
            [['title', 'slug', 'content', 'meta_keywords'], 'string', 'max' => 255],
            [['meta_title'], 'string', 'max' => 70],
            [['meta_description'], 'string', 'max' => 160],
            [['title'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('backend', 'ID'),
            'title' => Yii::t('backend', 'Title'),
            'slug' => Yii::t('backend', 'Slug'),
            'content' => Yii::t('backend', 'Content'),
            'meta_title' => Yii::t('backend', 'Meta Title'),
            'meta_description' => Yii::t('backend', 'Meta Description'),
            'meta_keywords' => Yii::t('backend', 'Meta Keywords'),
            'status' => Yii::t('backend', 'Status'),
            'created_by' => Yii::t('backend', 'Created By'),
            'updated_by' => Yii::t('backend', 'Updated By'),
            'created_at' => Yii::t('backend', 'Created At'),
            'updated_at' => Yii::t('backend', 'Updated At'),
        ];
    }

    /**
     * @inheritdoc
     * @return PageQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PageQuery(get_called_class());
    }
}
