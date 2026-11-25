<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Opportunities\Schema;

final class FieldsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/opportunities/schema/fields.json [operationId: getOpportunityFieldsUsingGET] */
    /**
     * Get Opportunity Fields
     *
     * Retrieves metadata for all opportunity fields in the target instance. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public static function get(?\MarketoSDK\GetParams\Rest\V1\Opportunities\Schema\FieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Opportunities\Schema\FieldsJson::class)->get($params);
    }
}
