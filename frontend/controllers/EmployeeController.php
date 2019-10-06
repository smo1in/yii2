<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Employee;



class EmployeeController extends Controller
{

    public function actionIndex()
    {
        $employee1 = new Employee();
        $employee1->firstName = 'Alex';
        $employee1->lastName = 'Smith';
        $employee1->middleName = 'John';
        $employee1->salary = 1000;

        echo $employee1['salary'];

        echo '<hr>';

        foreach ($employee1 as $attribute => $value) {
            echo "$attribute: $value <br>";
        }
        
        echo '<hr>';

        $array = $employee1->toArray();
        echo '<pre>';
        print_r($array);
        echo '<pre>';
        
        echo '<hr>';

        echo '<pre>';
        print_r($employee1->getAttributes());
        print_r($employee1->attributes);
        echo '<pre>';
        
        echo '<pre>';
        print_r($employee1->attributes());
        echo '<pre>';
    }
}
