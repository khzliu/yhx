<?php

namespace app\models;
use yii\db\ActiveRecord;

class ArticleService extends ActiveRecord
{
    public static function tableName()
    {
        return 'article_service';
    }
	public static function primaryKey()
	{
		return 'id';
	}
}