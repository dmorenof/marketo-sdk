<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Namedaccounts\Schema;

final class FieldsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/namedaccounts/schema/fields.json [operationId: getNamedAccountFieldsUsingGET] */
    /**
     * Get Named Account Fields
     *
     * Retrieves metadata for all named account fields in the target instance. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public static function get(?\MarketoSDK\GetParams\Rest\V1\Namedaccounts\Schema\FieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Namedaccounts\Schema\FieldsJson::class)->get($params);
    }
}
