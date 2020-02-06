<?php

function validate_fields_match($filtered_input, &$form, $params) {
    $match = true;

    foreach ($params as $field_id) {
        $ref_value = $ref_value ?? $filtered_input[$field_id];
        if ($ref_value != $filtered_input[$field_id]) {
            $match = false;
            break;
        }
    }
    
    if (!$match) {
        $form['fields'][$field_id]['error'] = 'Passwords do not match!';
        return false;
    }

    return true;
}

function validate_not_empty($field_value, &$field) {
    if (strlen($field_value) == 0) {
        $field['error'] = 'Field can not be empty!';
    } else {
        return true;
    }
}

function validate_is_number($field_value, &$field) {
    if (!is_numeric($field_value)) {
        $field['error'] = 'Input a number!';
    } else {
        return true;
    }
}

function validate_is_positive($field_value, &$field) {
    if ($field_value < 0) {
        $field['error'] = 'Input a positive number!';
    } else {
        return true;
    }
}

function validate_first_letter_is_capital($field_value, &$field)
{
    if (ucfirst($field_value) !== $field_value) {
        $field['error'] = 'First letter must be capital';
        return false;
    }
    return true;
}

function validate_contains_capital_letter($field_value, &$field)
{
    if (ucfirst($field_value) !== $field_value) {
        $field['error'] = 'First letter must be capital';
        return false;
    }
    return true;
}

function validate_phone_number($field_value, &$field) {
    if (!preg_match('/\+3706[0-9]{7}/', $field_value)) {
        $field['error'] = "Phone number must start with '+3706'!";
    } else {
        return true;
    }
}

function validate_has_space($field_value, &$field)
{
    if (!preg_match('/[ ]/', trim($field_value))) {
        $field['error'] = 'Words must be separated by space';
        return false;
    }
    return true;
}

function validate_age($field_value, &$field)
{
    if (!preg_match('/(2[1-9]|[3-6][0-9]|7[0-5])/', $field_value)) {
        $field['error'] = 'Participant must be 21-75 years of age';
        return false;
    }
    return true;
}

function validate_has_no_space($field_value, &$field)
{
    if (preg_match('/[\s]/', $field_value)) {
        $field['error'] = 'Can not contain space';
        return false;
    }
    return true;
}
