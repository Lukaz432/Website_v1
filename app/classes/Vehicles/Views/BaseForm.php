<?php

namespace App\Vehicles\Views;

class BaseForm extends \Core\Views\Form
{

    public function __construct($data = [])
    {
        $this->data = [
            'fields' => [
                'make' => [
                    'label' => 'Make',
                    'type' => 'text',
                ],
                'model' => [
                    'label' => 'Model',
                    'type' => 'text',
                ],
                'year' => [
                    'label' => 'Year',
                    'type' => 'text',
                ],
                'power' => [
                    'label' => 'Power(kw)',
                    'type' => 'text',
                ],
                'fuel_type' => [
                    'label' => 'Fuel',
                    'type' => 'text',
                ],
                'mileage' => [
                    'label' => 'Mileage',
                    'type' => 'text',
                ],
                'special_features' => [
                    'label' => 'Special Features',
                    'type' => 'text',
                ],
                'price' => [
                    'label' => 'Price($)',
                    'type' => 'text',
                ],
                'owner' => [
                    'label' => 'Owner',
                    'type' => 'text',
                ],
            ],
            'buttons' => [
                'submit' => [
                    'title' => 'Submit',
                ],
            ]
        ];
    }

}
