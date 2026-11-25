<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1;

final class SalespersonsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/salespersons.json [operationId: getSalesPersonUsingGET] */
    /**
     * Get SalesPersons
     *
     * Retrieves salesperson records from the destination instance based on the submitted filter. Required Permissions: Read-Only Sales Person, Read-Write Sales Person
     */
    public static function get(\MarketoSDK\GetParams\Rest\V1\SalespersonsJson $params): \MarketoSDK\DTOs\ResponseOf\SalesPerson
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\SalespersonsJson::class)->get($params);
    }

    /** POST /rest/v1/salespersons.json [operationId: syncSalesPersonsUsingPOST] */
    /**
     * Sync SalesPersons
     *
     * Allows inserts, updates, or upserts of salespersons to the target instance. Required Permissions: Read-Write Sales Person
     */
    public static function post(\MarketoSDK\DTOs\Sync\SalesPerson\Request $payload): \MarketoSDK\DTOs\ResponseOf\SalesPerson
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\SalespersonsJson::class)->post($payload);
    }
}
