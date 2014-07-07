<?php

namespace app\models;
use yii\db\ActiveRecord;

class MenuService extends ActiveRecord
{
    public static function tableName()
    {
        return 'menu_service';
    }
	public static function primaryKey()
	{
		return 'id';
	}
}