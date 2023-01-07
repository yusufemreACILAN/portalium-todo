<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var portalium\todo\models\Content $model */

$this->title = Yii::t('app', 'Update Task: {title}', [
    'title' => $model->title,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_task, 'url' => ['view', 'title' => $model->title]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="task-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
