<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Companies\Schema;

final class FieldsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/companies/schema/fields.json [operationId: getCompanyFieldsUsingGET] */
    /**
     * Get Company Fields
     *
     * Retrieves metadata for all company fields in the target instance. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public static function get(?\MarketoSDK\GetParams\Rest\V1\Companies\Schema\FieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Companies\Schema\FieldsJson::class)->get($params);
    }

}
