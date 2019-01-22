<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>This is the About page. You may modify the following file to customize its content:</p>

    <code><?= __FILE__ ?></code>
    <?php
    $form = \yii\widgets\ActiveForm::begin();

    echo $form->field($model,'name')->label('gsgdgd');
    echo $form->field($model,'lastname')->label('dddd');
//    echo $form->field($model,'age')->input('number');
?>

    <input class="form-control" aria-required="true" id="myform-age" type="number" name="MyForm[age]">

    <?php
    echo Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']);


\yii\widgets\ActiveForm::end();
    ?>

</div>
