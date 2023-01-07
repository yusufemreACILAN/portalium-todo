<?php
use portalium\todo\models\Task;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use portalium\theme\widgets\Panel;
use portalium\todo\Module;

/** @var yii\web\View $this */
/** @var portalium\todo\models\Todo $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>
    <?php Panel::begin([
    'title' => ($model->isNewRecord) ? Module::t('Create Task') : Module::t('Update Task'),
    'actions' => [
        'header' => [
           
        ],
    'footer' => [
        Html::submitButton(Module::t('Save'), ['class' => 'btn btn-success']),
    ],
    
    ],
    ]) ?> 

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

  
      <?= $form->field($model, 'status')->dropDownList(Task::getStatusList()) ?>   

   
    <?php Panel::end();?>
    <?php ActiveForm::end(); ?>
    
    
    

</div>
