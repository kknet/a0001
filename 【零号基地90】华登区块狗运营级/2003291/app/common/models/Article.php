<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "me_article".
 *
 * @property integer $id
 * @property integer $typeid
 * @property string $title
 * @property string $content
 * @property string $title_en
 * @property string $content_en
 * @property string $keyword
 * @property string $description
 * @property string $thumb
 * @property string $flags
 * @property string $author
 * @property string $referer
 * @property integer $senddate
 * @property integer $audit
 * @property integer $audit_at
 * @property integer $hits
 * @property integer $branch_id
 * @property integer $created_at
 * @property integer $updated_at
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'me_article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['typeid', 'title', 'content', 'title_en', 'content_en'], 'required'],
            [['typeid', 'senddate', 'audit', 'audit_at', 'hits', 'branch_id', 'created_at', 'updated_at'], 'integer'],
            [['content', 'content_en', 'description', 'flags'], 'string'],
            [['title', 'title_en', 'thumb'], 'string', 'max' => 100],
            [['keyword'], 'string', 'max' => 255],
            [['author'], 'string', 'max' => 30],
            [['referer'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '自增ID',
            'typeid' => '所属类别',
            'title' => '标题',
            'content' => '内容',
            'title_en' => '英文标题',
            'content_en' => '英文内容',
            'keyword' => '关键字',
            'description' => '摘要',
            'thumb' => '缩略图',
            'flags' => '自定义属性',
            'author' => '作者',
            'referer' => '来源',
            'senddate' => '发布日期',
            'audit' => '审核',
            'audit_at' => '审核时间',
            'hits' => '浏览量',
            'created_at' => '创建时间',
            'updated_at' => '更新时间',
        ];
    }
}
