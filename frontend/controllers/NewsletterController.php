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

        //creating new  instance экземпляр
        $model = new Subscribe();

        //is post?
        if (Yii::$app->request->isPost) {
            /*
             в атрибут email 
            записывается данные из массива 
            $formData элемента email
            */
            
            $model->email = $formData['email'];
            /*если данные validate и save
            flash сообщение ключ+сообщение 
            ключ определить для  alert
            */
            if ($model->validate() && $model->save()) {
                Yii::$app->session->setFlash('info', 'Subscribe completed!!!');
        }

        //вызов шаблона subscribe если ошибки,то они рендерятся
        return $this->render('subscribe', [
            'model' => $model,
        ]);
    }
}
