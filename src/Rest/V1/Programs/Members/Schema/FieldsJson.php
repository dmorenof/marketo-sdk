<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Programs\Members\Schema;

final class FieldsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/programs/members/schema/fields.json [operationId: getProgramMemberFieldsUsingGET] */
    /**
     * Get Program Member Fields
     *
     * Retrieves metadata for all program member fields in the target instance. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public static function get(?\MarketoSDK\GetParams\Rest\V1\Programs\Members\Schema\FieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Programs\Members\Schema\FieldsJson::class)->get($params);
    }

    /** POST /rest/v1/programs/members/schema/fields.json [operationId: createProgramMemberFieldUsingPOST] */
    /**
     * Create Program Member Fields
     *
     * Create program member fields in the target instance. Required Permissions: Read-Write Schema Custom Field
     */
    public static function post(\MarketoSDK\DTOs\Create\LeadField\Request $payload): \MarketoSDK\DTOs\ResponseOf\CreateLeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Programs\Members\Schema\FieldsJson::class)->post($payload);
    }

}
