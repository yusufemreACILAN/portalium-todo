<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use portalium\theme\widgets\Panel;
use portalium\todo\Module;

/** @var yii\web\View $this */
/** @var portalium\todo\models\Todo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="todo-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php Panel::begin([
    'title' => Html::encode($this->title),
    'actions' => [
        'header' => [
        ],
        'footer' => [
            Html::submitButton(Module::t( 'Save'), ['class' => 'btn btn-success']),
        ]
    ],
    ]) ?> 

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

   <?= $form->field($model, 'is_done')->checkbox(['checked' => $model->is_done > 0,  'value' => true]) ?>
      <!-- $form->field($model, 'is_done')->dropDownList(Menu::getStatusList())   -->

   
    <?php Panel::end() ?>
    <?php ActiveForm::end(); ?>
    
    
    

</div>
