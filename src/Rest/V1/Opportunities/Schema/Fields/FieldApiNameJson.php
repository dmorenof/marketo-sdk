<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Opportunities\Schema\Fields;

final class FieldApiNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/opportunities/schema/fields/{fieldApiName}.json [operationId: getOpportunityFieldByNameUsingGET] */
    /**
     * Get Opportunity Field by Name
     *
     * Retrieves metadata for single opportunity field. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public static function get(string $fieldApiName): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Opportunities\Schema\Fields\FieldApiNameJson::class)->get($fieldApiName);
    }

}
