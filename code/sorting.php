<?php

use Algorithm\sorting\sort;

require_once dirname(__FILE__) . '/vendor/autoload.php';
$sorting = new sort('selection');//bubble, insertion,selection
echo "<pre>";
print_r($sorting->sort([5, 2, 9, 7, 6]));
echo "</pre>";