<?php

require "../../Frame/vendor/autoload.php";
require "vendor/autoload.php";

function app_path($path = '') {
    return getcwd() . '/../app/' . $path;
}

