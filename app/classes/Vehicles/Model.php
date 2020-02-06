<?php

namespace App\Vehicles;

use \App\App;

class Model {

    private $table_name = 'vehicles';

    public function __construct() {
        App::$db->createTable($this->table_name);
    }

    /**
     * Irašo $vehicle i duombaze
     * @param Vehicle $vehicle
     * @return bool
     */
    public function insert(Vehicle $vehicle) {
        return App::$db->insertRow($this->table_name, $vehicle->getData());
    }

    /**
     * @param array $conditions
     * @return array
     */
    public function get($conditions = []) {
        $vehicles = [];
        $rows = App::$db->getRowsWhere($this->table_name, $conditions);
        foreach ($rows as $row_id => $row_data) {
            $row_data['id'] = $row_id;
            $vehicles[] = new Vehicle($row_data);
        }

        return $vehicles;
    }

    /**
     * @param Vehicle $vehicle
     * @return bool
     */
    public function update(Vehicle $vehicle) {
        return App::$db->updateRow($this->table_name, $vehicle->getId(), $vehicle->getData());
    }

    /**
     * deletes all Vehicles from database
     * @param Vehicle $vehicle
     * @return bool
     */
    public function delete(Vehicle $vehicle) {
        return App::$db->deleteRow($this->table_name, $vehicle->getId());
    }

    public function __destruct() {
        App::$db->save();
    }

}

