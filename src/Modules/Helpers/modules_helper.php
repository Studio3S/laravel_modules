<?php
function get_modules_config($key)
{
    return config('studio3s.modules.'.$key);
}

function get_modules_location()
{
    return get_modules_config('location');
}

function get_modules_location_info($key)
{
    $location = get_modules_config('location');
    return get_modules_config('locations.'.$location.'.'.$key);
}