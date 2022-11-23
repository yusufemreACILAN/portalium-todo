<?php

use portalium\todo\models\TodoContent;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var portalium\todo\models\TodoContentSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Todo Contents');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todo-content-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Create Todo Content'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_todo',
            'content',
            'time',
            'id_category',
            'is_done',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, TodoContent $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_todo' => $model->id_todo]);
                 }
            ],
        ],
    ]); ?>


</div>
