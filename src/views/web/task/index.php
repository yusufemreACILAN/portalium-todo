<?php

use portalium\todo\models\Task;
use yii\helpers\Html;
use yii\helpers\Url;
use portalium\theme\widgets\ActionColumn;
use portalium\theme\widgets\GridView;
use portalium\theme\widgets\Panel;
use portalium\todo\Module;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var portalium\todo\models\TaskSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Contents');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    
</div>

<?php

Panel::begin([
    
    'title' => Module::t('Contents'),
    'actions' => [
        'header' => [
            Html::submitButton(Module::t(''), [
                'class' => 'fa fa-trash btn btn-danger', 'id' => 'delete-select',
                'data' => [
                    'confirm' => Module::t('If you continue, all your data will be reset. Do you want to continue?'),
                    'method' => 'post'

                ]
            ]),
            Html::a(Module::t(''), ['create'], ['class' => 'fa fa-plus btn btn-success']),
        ]
    ]
    
]) ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); 



    ?>
    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'title',
            'date_create',

             [
                'label' => 'status',
                'value' => function($model){
                    return Task::getStatusList()[$model->status];
                },
               
             ],
             

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Task $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_task' => $model->id_task]);
                 }
            ],
            
           
        ],
    ]); Panel::end() ?>

   

