<?php

namespace console\controllers;

use yii\helpers\Console;


class DateController extends \yii\console\Controller
{

    /**
     * Sending newsletter
     */
    public function actionSend()
    {
        date_default_timezone_set('Australia/Melbourne');
        $data = date('m/d/Y h:i:s a', time());
        $logPath = "/var/www/yii2/frontend/web/log.txt";
        $mode = (!file_exists($logPath)) ? 'w' : 'a';
        $logfile = fopen($logPath, $mode);
        fwrite($logfile, "\r\n" . $data);
        fclose($logfile);
    }
}
