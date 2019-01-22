<?php
/**
 * Created by PhpStorm.
 * User: ghost
 * Date: 1/10/19
 * Time: 8:20 PM
 */

namespace frontend\models;


use yii\base\Model;

class MyForm extends Model
{

    public $name;
    public $lastname;
    public $age;

    public function rules(){
        return [
          [['name','lastname','age'],'required'],
           [['name','lastname'],'string','max'=>25,'min'=>4],
           [['age'],'number']
        ];
    }

    public function attributeLabels()
    {
        return [
            'lastname' => 'Last Name',
            'age' => 'Type your age',
        ];
    }

    public function test(){
        echo $this->age;
    }

}