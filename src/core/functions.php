<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */

use dwp\model\Customers as Customers;
use dwp\model\Addresses as Addresses;

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

function redirect($url)
{
    header('Location: '.$url);
    exit(0);
}

function getCustomer($id)
{
    $db = $GLOBALS['db'];
    $sql = "id=" . $db->quote($id);
    $entry = Customers::findOne($sql);
    return $entry;
}


function getAddress($addressid)
{
    $db = $GLOBALS['db'];
    $sql = "id=" . $db->quote($addressid);
    $entry = Addresses::findOne($sql);
    return $entry;
}