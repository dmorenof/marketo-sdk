<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1;

final class CompaniesJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/companies.json [operationId: getCompaniesUsingGET] */
    /**
     * Get Companies
     *
     * Retrieves company records from the destination instance based on the submitted filter. Required Permissions: Read-Only Company, Read-Write Company
     */
    public static function get(\MarketoSDK\GetParams\Rest\V1\CompaniesJson $params): \MarketoSDK\DTOs\ResponseOf\Company
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\CompaniesJson::class)->get($params);
    }

    /** POST /rest/v1/companies.json [operationId: syncCompaniesUsingPOST] */
    /**
     * Sync Companies
     *
     * Allows inserting, updating, or upserting of company records into Marketo. Required Permissions: Read-Write Company
     */
    public static function post(\MarketoSDK\DTOs\Sync\Company\Request $payload): \MarketoSDK\DTOs\ResponseOf\Company
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\CompaniesJson::class)->post($payload);
    }
}
