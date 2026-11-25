<?php

declare(strict_types=1);

namespace MarketoSDK\Rest\V1\Leads\Schema\Fields;

final class FieldApiNameJson extends \MarketoSDK\MarketoEngageRESTAPISDK
{
    /** GET /rest/v1/leads/schema/fields/{fieldApiName}.json [operationId: getLeadFieldByNameUsingGET] */
    /**
     * Get Lead Field by Name
     *
     * Retrieves metadata for single lead field. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public static function get(string $fieldApiName): \MarketoSDK\DTOs\ResponseOf\LeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\Schema\Fields\FieldApiNameJson::class)->get($fieldApiName);
    }

    /** POST /rest/v1/leads/schema/fields/{fieldApiName}.json [operationId: updateLeadFieldUsingPOST] */
    /**
     * Update Lead Field
     *
     * Update metadata for a lead field in the target instance. See update rules <a href="https://developers.marketo.com/rest-api/lead-database/leads/#update_field">here</a>. Required Permissions: Read-Write Schema Standard Field, Read-Write Schema Custom Field
     */
    public static function post(string $fieldApiName, \MarketoSDK\DTOs\Update\LeadField\Request $payload): \MarketoSDK\DTOs\ResponseOf\UpdateLeadField
    {
        return self::client()->resource(\MarketoSDK\Resources\Rest\V1\Leads\Schema\Fields\FieldApiNameJson::class)->post($fieldApiName, $payload);
    }
}
