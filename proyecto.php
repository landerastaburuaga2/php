<?php

require 'vendor/autoload.php';

use DmitryIvanov\DarkSkyApi\DarkSkyApi;

$forecast = (new DarkSkyApi('ba5e9e5efc9baf56ea6199dfb8af1073'))
    ->location(46.482, 30.723)
    ->units('si')
    ->language('es')
    ->forecast();

echo $forecast->currently()->summary();





