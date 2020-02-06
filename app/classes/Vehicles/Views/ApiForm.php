<?php

namespace App\Vehicles\Views;

class ApiForm extends \Core\Views\Form {

    public function __construct($data = []) {
        $this->data = [
            'fields' => [
                'make' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space',
                            'validate_first_letter_is_capital'
                        ]
                    ]
                ],
                'model' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space',
                        ]
                    ]
                ],
                'year' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                        ]
                    ]
                ],
                'power' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space',
                        ]
                    ]
                ],
                'fuel_type' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space'
                        ]
                    ]
                ],
                'mileage' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space'
                        ]
                    ]
                ],
                'special_features' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space'
                        ]
                    ]
                ],
                'price' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space'
                        ]
                    ]
                ],
                'owner' => [
                    'extra' => [
                        'validators' => [
                            'validate_not_empty',
                            'validate_has_no_space',
                            'validate_first_letter_is_capital'
                        ]
                    ]
                ],
            ],
            'callbacks' => [
                'success' => 'form_success',
                'fail' => 'form_fail'
            ]
        ];
    }

}