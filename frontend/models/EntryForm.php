<?php
/**
 * Created by PhpStorm.
 * User: LYK
 * Date: 2015/6/1
 * Time: 15:30
 */
namespace frontend\models;

use yii\base\Model;

class EntryForm extends Model{
    public $name;
    public $email;

    public function rules(){
        return [
            [['name','email'],'required'],['email','email']
        ];
    }
}