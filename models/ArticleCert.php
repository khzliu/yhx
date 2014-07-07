<?php

namespace app\models;
use yii\db\ActiveRecord;

class ArticleCert extends ActiveRecord
{
    public static function tableName()
    {
        return 'article_cert';
    }
	public static function primaryKey()
	{
		return 'id';
	}
}