<?php

use yii\db\Migration;

class create_employee_table extends Migration {

    public function up() {
        $this->createTable('employee', [
            'id' => $this->primaryKey(),
            'first_name' => $this->string(),
            'midle_name' => $this->string(),
            'last_name' => $this->string(),
            'birthdate' => $this->date(),
            'city' => $this->string(),
            'hiring_date' => $this->date(),
            'department' => $this->string(),
            'id_code' => $this->string(),
            'email' => $this->string(),
        ]);
    }

    public function down() {
        $this->dropTable('employee');
    }

}
