<?php
/**
 * Created by PhpStorm.
 * User: ghost
 * Date: 1/15/19
 * Time: 7:32 PM
 */

namespace frontend\widgets\cart;

use yii\bootstrap\Widget;

class Cart extends Widget
{

    public $parme1;
    public $param2;

    public function run(){

        //TODO get cart products list from db

        $products = [];

        return $this->render('cart',['products' => $products]);

    }
}