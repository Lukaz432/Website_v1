<?php

require '../../../bootloader.php';

$response = new \Core\Api\Response();

$model = new App\Vehicles\Model();

$conditions = $_POST ?? [];

$vehicles = $model->get($conditions);
if ($vehicles !== false) {
    foreach ($vehicles as $person) {
        $response->addData($person->getData());
    }
} else {
    $response->addError('Could not pull data from database!');
}

$response->print();