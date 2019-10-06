<?php

namespace frontend\models;

use yii\base\Model;
use Yii;


class Subscribe extends Model
{

    public $email;

    /* 
    rules of validations
    return array with rules of embed validators
    */
    public function rules()
    {
        return [
            [['email'], 'required'],
            [['email'], 'email'],
        ];
    }

    public function save()
    {
        $sql = "INSERT INTO subscriber (id, email) VALUES (null, '{$this->email}')";
        return Yii::$app->db->createCommand($sql)->execute();
    }
}
