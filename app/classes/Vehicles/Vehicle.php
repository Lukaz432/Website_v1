<?php

namespace App\Vehicles;

class Vehicle {

    private $data = [];

    public function __construct($data = null) {
        if ($data) {
            $this->setData($data);
        } else {
            $this->data = [
                'id' => null,
                'make' => null,
                'model' => null,
                'year' => null,
                'power' => null,
                'fuel_type' => null,
                'mileage' => null,
                'special_features' => null,
                'price' => null,
                'owner' => null,
            ];
        }
    }

    /**
     * * Sets all data from array
     * @param $array
     */
    public function setData($array) {
        if (isset($array['id'])) {
            $this->setId($array['id']);
        } else {
            $this->data['id'] = null;
        }
        $this->setMake($array['make'] ?? null);
        $this->setModel($array['model'] ?? null);
        $this->setYear($array['year'] ?? null);
        $this->setPower($array['power'] ?? null);
        $this->setFuel($array['fuel_type'] ?? null);
        $this->setMileage($array['mileage'] ?? null);
        $this->setSpecialFeatures($array['special_features'] ?? null);
        $this->setPrice($array['price'] ?? null);
        $this->setOwner($array['owner'] ?? null);
    }

    /**
     * Gets all data as array
     * @return array
     */
    public function getData() {
        return [
            'id' => $this->getId(),
            'make' => $this->getMake(),
            'model' => $this->getModel(),
            'year' => $this->getYear(),
            'power' => $this->getPower(),
            'fuel_type' => $this->getFuel(),
            'mileage' => $this->getMileage(),
            'special_features' => $this->getSpecialFeatures(),
            'price' => $this->getPrice(),
            'owner' => $this->getOwner(),
        ];
    }

    /**
     * @param int $id
     */
    public function setId(int $id) {
        $this->data['id'] = $id;
    }

    /**
     * @return int|null
     */
    public function getId() {
        return $this->data['id'];
    }

    /**
     * Sets make
     * @param string $make
     */
    public function setMake(string $make) {
        $this->data['make'] = $make;
    }

    /**
     * Returns make
     * @return string
     */
    public function getMake() {
        return $this->data['make'];
    }

    /**
     * Sets data model
     * @param string $model
     */
    public function setModel(string $model) {
        $this->data['model'] = $model;
    }

    /**
     * @return mixed
     */
    public function getModel() {
        return $this->data['model'];
    }

    /**
     * Sets data year
     * @param string $year
     */
    public function setYear(string $year) {
        $this->data['year'] = $year;
    }

    /**
     * @return mixed
     */
    public function getYear() {
        return $this->data['year'];
    }

    /**
     * Sets data power
     * @param string $power
     */
    public function setPower(string $power) {
        $this->data['power'] = $power;
    }

    /**
     * @return mixed
     */
    public function getPower() {
        return $this->data['power'];
    }

    /**
     * Sets data fuel_type
     * @param string $fuel_type
     */
    public function setFuel(string $fuel_type) {
        $this->data['fuel_type'] = $fuel_type;
    }

    /**
     * @return mixed
     */
    public function getFuel() {
        return $this->data['fuel_type'];
    }

    /**
     * Sets data mileage
     * @param string $mileage
     */
    public function setMileage(string $mileage) {
        $this->data['mileage'] = $mileage;
    }

    /**
     * @return mixed
     */
    public function getMileage() {
        return $this->data['mileage'];
    }

    /**
     * Sets data special_features
     * @param string $special_features
     */
    public function setSpecialFeatures(string $special_features) {
        $this->data['special_features'] = $special_features;
    }

    /**
     * @return mixed
     */
    public function getSpecialFeatures() {
        return $this->data['special_features'];
    }

    /**
     * Sets data price
     * @param string $price
     */
    public function setPrice(string $price) {
        $this->data['price'] = $price;
    }

    /**
     * @return mixed
     */
    public function getPrice() {
        return $this->data['price'];
    }

    /**
     * Sets data owner
     * @param string $owner
     */
    public function setOwner(string $owner) {
        $this->data['owner'] = $owner;
    }

    /**
     * @return mixed
     */
    public function getOwner() {
        return $this->data['owner'];
    }

}
