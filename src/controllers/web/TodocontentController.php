<?php

namespace portalium\todo\controllers\web;

use portalium\todo\models\TodoContent;
use portalium\todo\models\TodoContentSearch;
use portalium\web\Controller as WebController;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TodoContentController implements the CRUD actions for TodoContent model.
 */
class TodocontentController extends WebController
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TodoContent models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new TodoContentSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TodoContent model.
     * @param int $id_todo Id Todo
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_todo)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_todo),
        ]);
    }

    /**
     * Creates a new TodoContent model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TodoContent();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_todo' => $model->id_todo]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TodoContent model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_todo Id Todo
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_todo)
    {
        $model = $this->findModel($id_todo);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_todo' => $model->id_todo]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TodoContent model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_todo Id Todo
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_todo)
    {
        $this->findModel($id_todo)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TodoContent model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_todo Id Todo
     * @return TodoContent the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_todo)
    {
        if (($model = TodoContent::findOne(['id_todo' => $id_todo])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }
}
