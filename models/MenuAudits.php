<?php

namespace app\models;
use yii\db\ActiveRecord;

class MenuAudits extends ActiveRecord
{
    public static function tableName()
    {
        return 'menu_audits';
    }
	public static function primaryKey()
	{
		return 'id';
	}
}