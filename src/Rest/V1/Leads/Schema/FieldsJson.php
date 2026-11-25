<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads\Schema;

final class FieldsJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/leads/schema/fields.json [operationId: getLeadFieldsUsingGET] */
    /**
     * Get Lead Fields
     *
     * Retrieves metadata for all lead fields in the target instance. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public static function get(?\MarketoSDK\GetParams\Rest\V1\Leads\Schema\FieldsJson $params = null): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\Schema\FieldsJson::class)->get($params);
    }

    /** POST /rest/v1/leads/schema/fields.json [operationId: createLeadFieldUsingPOST] */
    /**
     * Create Lead Fields
     *
     * Create lead fields in the target instance. Required Permissions: Read-Write Schema Custom Field
     */
    public static function post(\MarketoSDK\DTOs\Create\LeadField\Request $payload): \MarketoSDK\DTOs\ResponseOf\CreateLeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\Schema\FieldsJson::class)->post($payload);
    }

}
