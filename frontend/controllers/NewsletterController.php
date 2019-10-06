<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Subscribe;

class NewsletterController extends Controller
{

    public function actionSubscribe()
    {
        /*
        если форма пустая get. не пустая post
        получение из компонента yii-app-request 
        который содержит метод post для получения  данных из суперглобального массива
        */
        $formData = Yii::$app->request->post();

        //creating new  instance 
        $model = new Subscribe();

        //вызов шаблона subscribe
        return $this->render('subscribe');
    }
}
