<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var portalium\todo\models\TodoContentSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="todo-content-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id_todo') ?>

    <?= $form->field($model, 'content') ?>

    <?= $form->field($model, 'time') ?>

    <?= $form->field($model, 'id_category') ?>

    <?= $form->field($model, 'is_done') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
