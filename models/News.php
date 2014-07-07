<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * LoginForm is the model behind the login form.
 */
class News extends Model
{

    public $item;
    public $groupItems;
    
    public function rules()
    {
        return [
            // username and password are both required
            ['item', 'required'],
            // rememberMe must be a boolean value
            ['groupItems', 'MenuCert'],
            ];
    }

    public function setGroupItems($menu)
    {
       $this->groupItems = $menu;
    }
    public function getGroupItems()
    {
       return $this->groupItems;
    }
    
    
    public function getItem(){
        return $this->item;
    }
    public function setItem($item){
        $this->item = $item;
    }
}