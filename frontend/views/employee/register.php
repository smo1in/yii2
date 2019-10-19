<?php
/* @var $model frontend\models\Employee */

if ($model->hasErrors()) {
    echo '<pre>';
    print_r($model->getErrors());
    echo '</pre>';
}
?>

<h1>Welcome to our company!</h1>

<form method="post">
    <p>First name:</p>
    <input name="firstName" type="text" />
    <br><br>

    <p>Last name:</p>
    <input name="lastName" type="text" />
    <br><br>

    <p>Middle name:</p>
    <input name="middleName" type="text" />
    <br><br>

    <p>Email name:</p>
    <input name="email" type="text" />
    <br><br>

    <p>Position:</p>
    <input name="position" type="text" />
    <br><br>

    <p>ID code:</p>
    <input name="idCode" type="text" />
    <br><br>

    <p>Born date:</p>
    <input name="bornDate" type="date" />
    <br><br>

    <p>Since date:</p>
    <input name="sinceDate" type="date" />
    <br><br>


    <select>
        <option disabled selected>Выберите город</option>
        <option value="1">Красноярск</option>
        <option value="2">Москва</option>
        <option value="3">Санкт-Петербург</option>
    </select>
    <br><br>

    <input type="submit" />

</form>