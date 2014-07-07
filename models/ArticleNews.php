<?php

namespace app\models;
use yii\db\ActiveRecord;

class ArticleNews extends ActiveRecord
{
    public static function tableName()
    {
        return 'article_news';
    }
	public static function primaryKey()
	{
		return 'id';
	}
}