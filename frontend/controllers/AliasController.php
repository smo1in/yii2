<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class AliasController extends Controller
{
    public function actionExample()
    {
        Yii::setAlias('@files', '/var/www/yii2/frontend/web');

        $result = mkdir(Yii::getAlias('@files') . '/test1');
        var_dump($result);

        $result = mkdir(Yii::getAlias('@files') . '/test2');
        var_dump($result);

        $result = mkdir(Yii::getAlias('@files') . '/test3');
        var_dump($result);
    }
}
