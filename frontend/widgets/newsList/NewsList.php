<?php

namespace frontend\widgets\newsList;

use Yii;
use yii\base\Widget;
use frontend\models\Test;

class NewsList extends Widget
{
    public function run()
    {
        $max = Yii::$app->params['maxNewsInList'];

        $list = Test::getNewsList($max);
        //render view page with array 
        return $this->render('block', [
            'list' => $list,
        ]);
    }
};
