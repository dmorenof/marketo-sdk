<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Companies\Schema\Fields;

final class FieldApiNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/companies/schema/fields/{fieldApiName}.json [operationId: getCompanyFieldByNameUsingGET] */
    /**
     * Get Company Field by Name
     *
     * Retrieves metadata for single company field. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public static function get(string $fieldApiName): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Companies\Schema\Fields\FieldApiNameJson::class)->get($fieldApiName);
    }

}
