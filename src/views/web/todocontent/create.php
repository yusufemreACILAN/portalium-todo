<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var portalium\todo\models\TodoContent $model */

$this->title = Yii::t('app', 'Create Todo Content');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Todo Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todo-content-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
