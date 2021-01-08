<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */


// TODO: Add useful helper functions here
function localDateString($lang, $date)
{
    $result = $date->format('Y-m-dT00:00:00Z');
    $lang = strtolower($lang);
    switch($lang)
    {
        case 'de':
            $result = $date->format('d.m.Y');
            break;
    }

    return $result;
}

function localDateTimeString($lang, $date)
{
    $result = $date->format('Y-m-dTH:i:sZ');
    $lang = strtolower($lang);
    switch($lang)
    {
        case 'de':
            $result = $date->format('d.m.Y H:i').'Uhr';
            break;
    }

    return $result;
}