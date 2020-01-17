<?php

use yii\helpers\Html;

echo Html::beginForm(['#'], 'post', ['data-pjax' => '', 'class' => 'required']);
echo Html::input('text', 'name', Yii::$app->request->post('string'), ['class' => 'form-control', 'required' => true]);
echo Html::input('email', 'mail', Yii::$app->request->post('string'), ['class' => 'form-control', 'required' => true]);
echo Html::input('textarea', 'comment', Yii::$app->request->post('string'), ['class' => 'form-control', 'required' => true, 'encode' => true]);

echo Html::submitButton('Sumbit', ['class' => 'btn btn-lg btn-primary', 'name' => 'sumbit']);
echo Html::endForm();
