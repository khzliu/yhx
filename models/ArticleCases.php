<?php

namespace app\models;
use yii\db\ActiveRecord;

class ArticleCases extends ActiveRecord
{
    public static function tableName()
    {
        return 'article_cases';
    }
	public static function primaryKey()
	{
		return 'id';
	}
}