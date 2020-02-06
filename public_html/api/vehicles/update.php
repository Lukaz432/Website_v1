<?php

use \App\App;

require '../../../bootloader.php';

// Check user authorization
if (!App::$session->userLoggedIn()) {
    $response = new \Core\Api\Response();
    $response->addError('You are not authorized!');
    $response->print();
}

// Filter received data
$form = (new \App\Vehicles\Views\ApiForm())->getData();
$filtered_input = get_form_input($form);
validate_form($filtered_input, $form);

/**
 * If request passes validation
 * this function is automatically
 * called
 *
 * @param type $filtered_input
 * @param type $form
 */
function form_success($filtered_input, &$form) {
    $response = new \Core\Api\Response();
    $model = new \App\Vehicles\Model();

    $conditions = [
        'row_id' => intval($_POST['id'])
    ];

    //gauname areju su $drink objektais (siuo atveju viena objekta arejuje pagal paduota id
    $vehicles = $model->get($conditions);
    if (!$vehicles) {
        $response->addError('Review does not exist!');
    } else {
        $vehicle = $vehicles[0];

        //idedame i data holderi naujas vertes, kurias ivede useris
        //ir kurios atejo is javascripto
        $vehicle->setMake($filtered_input['make']);
        $vehicle->setModel($filtered_input['model']);
        $vehicle->setYear($filtered_input['year']);
        $vehicle->setPower($filtered_input['power']);
        $vehicle->setFuel($filtered_input['fuel_type']);
        $vehicle->setMileage($filtered_input['mileage']);
        $vehicle->setSpecialFeatures($filtered_input['special_features']);
        $vehicle->setPrice($filtered_input['price']);
        $vehicle->setOwner($filtered_input['owner']);

        //vertes, kurias idejome auksciau i data holderi updatinam
        //ir duombazeje FileDB ka daro $drinksModel->update($drink) metodas
        $model->update($vehicle);

        // Irasom visa dalyvio informacija i response
        $response->setData($vehicle->getData());
    }

    $response->print();
}

/**
 * If request fails validation
 * this function is automatically
 * called
 *
 * @param type $filtered_input
 * @param type $form
 */
function form_fail($filtered_input, &$form) {
    $response = new \Core\Api\Response();

    foreach ($form['fields'] as $field_id => $field) {
        if (isset($field['error'])) {
            $response->addError($field['error'], $field_id);
        }
    }

    $response->print();
}