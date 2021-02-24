<?php

/**
 * @author Matthias Gabel<matthias.gabel@fh-erfurt.de>
 * @copyright Since 2021 by Matthias Gabel
 * @version 1.0.0
 */

use dwp\model\Members as Members;
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

/**
 * @param $url url
 */
function redirect($url)
{
    header('Location: '.$url);
    exit(0);
}

/**
 * @param $id member id
 * @return mixed|null return member or null
 */
function getMember($id)
{
    $db = $GLOBALS['db'];
    $sql = "id=" . $db->quote($id);
    return Members::findOne($sql);
}

/**
 * @param $addressid address id
 * @return mixed|null return an address or null
 */
function getAddress($addressid)
{
    $db = $GLOBALS['db'];
    $sql = "id=" . $db->quote($addressid);
    return Addresses::findOne($sql);
}