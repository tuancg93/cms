<?php
/**
 * Created by : Anhpt
 */
if (!function_exists('image_url')) {
    function image_url($img_name, $img_id = 0)
    {
        return url('/public/images') . "/" . $img_name . "?id=" . $img_id;
    }
}