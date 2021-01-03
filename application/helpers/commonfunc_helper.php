<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('partial_uri'))
{
    function partial_uri($start = 0) {
        return join('/',array_slice(get_instance()->uri->segment_array(), $start));
    }
}