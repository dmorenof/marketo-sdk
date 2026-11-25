<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Namedaccounts\Schema\Fields;

final class FieldApiNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/namedaccounts/schema/fields/{fieldApiName}.json [operationId: getNamedAccountFieldByNameUsingGET] */
    /**
     * Get Named Account Field by Name
     *
     * Retrieves metadata for single named account field. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public static function get(string $fieldApiName): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Namedaccounts\Schema\Fields\FieldApiNameJson::class)->get($fieldApiName);
    }
}
