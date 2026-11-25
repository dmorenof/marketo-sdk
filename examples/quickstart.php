<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use MarketoSDK\Configuration;
use MarketoSDK\MarketoEngageRESTAPISDK;
use MarketoSDK\Bulk\V1\Activities\ExportJson;

$configuration = new Configuration();
$configuration->baseUrl = 'https://123-ABC-456.mktorest.com'; // your Munchkin ID
$configuration->headers = ['Authorization' => 'Bearer ' . (getenv('MARKETO_ACCESS_TOKEN') ?: '')];
MarketoEngageRESTAPISDK::configure($configuration);

$jobs = ExportJson::get();

echo json_encode($jobs), "\n";
