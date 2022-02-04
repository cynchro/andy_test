<?php

namespace Validations;


class Validate
{

    public static function Year($year)
    {

        $year = str_replace(' ', '', $year);
        $year = trim($year);

        if (!is_numeric($year)) {
            echo "Error: The year must be numeric, for example: 2022 \n";
            die;
        }

        return $year;
    }
}
