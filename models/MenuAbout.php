<?php

namespace app\models;
use yii\db\ActiveRecord;

class MenuAbout extends ActiveRecord
{
    public static function tableName()
    {
        return 'menu_about';
    }
	public static function primaryKey()
	{
		return 'id';
	}
}