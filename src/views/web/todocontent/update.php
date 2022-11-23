<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var portalium\todo\models\TodoContent $model */

$this->title = Yii::t('app', 'Update Todo Content: {name}', [
    'name' => $model->id_todo,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Todo Contents'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_todo, 'url' => ['view', 'id_todo' => $model->id_todo]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="todo-content-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
