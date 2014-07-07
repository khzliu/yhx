<?php

namespace app\models;
use yii\db\ActiveRecord;

class ArticleAudits extends ActiveRecord
{
    public static function tableName()
    {
        return 'article_audits';
    }
	public static function primaryKey()
	{
		return 'id';
	}
}