<?php

use portalium\todo\models\Todo;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use portalium\theme\widgets\Panel;
use portalium\todo\Module;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var portalium\todo\models\TodoSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Contents');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="todo-index">

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
        'attributes' => [
            ['class' => 'yii\grid\SerialColumn'],

            'text',
            'time',

             [
                'attribute' => 'status',
                'value' => Todo::getStatusList()['STATUS'][$model->STATUS],//I am still working on it
             ],

            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Todo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_todo' => $model->id_todo]);
                 }
            ],
           
        ],
    ]); Panel::end() ?>

   

