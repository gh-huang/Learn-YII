<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%blog}}".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $is_show
 * @property string $addtime
 * @property string $logo
 * @property string $sm_logo
 * @property string $mid_logo
 * @property string $big_logo
 * @property string $mbig_logo
 */
class Blog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%blog}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'addtime'], 'required'],
            [['content', 'is_show'], 'string'],
            [['addtime'], 'safe'],
            [['title', 'logo', 'sm_logo', 'mid_logo', 'big_logo', 'mbig_logo'], 'string', 'max' => 150],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'content' => 'Content',
            'is_show' => 'Is Show',
            'addtime' => 'Addtime',
            'logo' => 'Logo',
            'sm_logo' => 'Sm Logo',
            'mid_logo' => 'Mid Logo',
            'big_logo' => 'Big Logo',
            'mbig_logo' => 'Mbig Logo',
        ];
    }
}
