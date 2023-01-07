<?php

namespace portalium\todo\controllers\web;

use portalium\web\Controller as WebController;
use portalium\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

// use portalium\web\DefaultController as WebController;




class DefaultController extends WebController
{
   

    /**
     * Lists all Content models.
     *
     * @return string
     */
    public function actionIndex()
    {

        return $this->render('index');
    }
}
