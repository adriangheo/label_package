<?php

namespace LabelGenerator;

class LabelGenerator 
{
    public static function get() {
        if( !isset( $_GET['firstname'] ) || !isset( $_GET['lastname'] ) || !isset( $_GET['phone']) || strlen( $_GET['firstname'] )<1 || strlen($_GET['lastname'])<1 || strlen($_GET['phone'])<1 ) {
            return json_encode( 'Please fill in all the data' );
        }
        return json_encode(
            [
                'Name' => $_GET['firstname'] . ' ' . $_GET['lastname'],
                'Phone' => $_GET['phone'],
                'Unique identifier' => random_int(1, 999)
            ]
        );
    }
}