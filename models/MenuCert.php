<?php

namespace app\models;
use yii\db\ActiveRecord;

class MenuCert extends ActiveRecord
{
    public static function tableName()
    {
        return 'menu_cert';
    }
	public static function primaryKey()
	{
		return 'id';
	}
}