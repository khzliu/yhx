<?php

namespace app\models;
use yii\db\ActiveRecord;

class MenuTrain extends ActiveRecord
{
    public static function tableName()
    {
        return 'menu_train';
    }
	public static function primaryKey()
	{
		return 'id';
	}
}