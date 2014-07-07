<?php

namespace app\models;
use yii\db\ActiveRecord;

class ArticleTrain extends ActiveRecord
{
    public static function tableName()
    {
        return 'article_train';
    }
	public static function primaryKey()
	{
		return 'id';
	}
}