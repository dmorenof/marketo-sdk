<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Salespersons;

final class DeleteJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** POST /rest/v1/salespersons/delete.json [operationId: deleteSalesPersonUsingPOST] */
    /**
     * Delete SalesPersons
     *
     * Deletes a list of salesperson records from the target instance. Input records should have only one member, based on the value of 'dedupeBy'. Required Permissions: Read-Write Sales Person
     */
    public static function post(\MarketoSDK\DTOs\Delete\SalesPerson\Request $payload): \MarketoSDK\DTOs\ResponseOf\SalesPerson
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Salespersons\DeleteJson::class)->post($payload);
    }
}
